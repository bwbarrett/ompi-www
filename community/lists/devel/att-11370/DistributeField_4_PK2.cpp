// #include "mpi.h" nach oben, sonst Fehlermeldung
//    /opt/intel/impi/4.0.3.008/intel64/include/mpicxx.h(93): catastrophic error: #error directive: "SEEK_SET is #defined but must not be for the C++ binding of MPI. Include mpi.h before stdio.h"
//  #error "SEEK_SET is #defined but must not be for the C++ binding of MPI. Include mpi.h before stdio.h"

#include "mpi.h"
#include <stdio.h>
#include <stdlib.h>
#include <sys/time.h>
#include <time.h>
#include <math.h>

using namespace std;







void startMPI( int &rank, int &procCount, int & argc, char ** argv )
{
  MPI_Init(&argc, &argv);
  MPI_Comm_size(MPI_COMM_WORLD, &procCount);
  MPI_Comm_rank(MPI_COMM_WORLD, &rank);
  
}

void cleanUp( double * vector)
{
    delete [] vector;
    vector = 0;
}

// wollen wir MPI_Standard-Konform bleibene
//void initVector( double * vector, unsigned long &length, double val)
void initVector( double * vector, int &length, double val)
{
    for( int i=0; i<length; ++i )
    {
      vector[i] = val;
    }
}

/*
**  Ausführung nur vom Master!
**  Test der Eingabe:
**  Initialisierung der Vektorlänge mit dem eingelesenen Wert
*/
// wollen wir MPI_Standard-Konform bleibene
//void input( int & argc, char ** argv, unsigned long &length)
void input( int & argc, char ** argv, int &length, int &block)
{
    length = 10000000;
    block = 1000;
    if( argc > 1)
    {
      length = atol(argv[1]);
    }
    if( argc > 2)
    {
      block = atol(argv[2]);
    }
}

/*
**  Testausgabe (optional)
*/
// wollen wir MPI_Standard-Konform bleibene
//void printVector( double * vector, unsigned long &length, int &proc, int &count)
void printVector( double * vector, int &length, int &proc, int &count)
{
  printf("process %i:\t[ ", proc);
  for(long i=0;i<length;++i)
  {
      if( i%count==0 && i>0)
      {
	printf("\n\t\t  ");
      }
     printf(" %5.1f", vector[i] );
  }
  printf(" ] \n");
}
// wollen wir MPI_Standard-Konform bleibene
//void checkResult( double &checkSum, unsigned long &bufferLength, const double &testVal , int &procCount, const double &epsilon)
void checkResult( double &checkSum, int &bufferLength, const double &testVal , int &procCount, const double &epsilon)
{
    double targetVal = bufferLength * testVal * procCount;
    double diff = (targetVal >= checkSum)? (targetVal - checkSum):(targetVal - checkSum)*(-1);
    
    if(diff < epsilon)
    {
        printf("#####  Test ok!  #####\n");
    }
    else
    {
        printf("difference occured: %lf \n", diff);
    }
    printf("[SOLL | IST] = ( %0.2lf | %0.2lf)\n", targetVal, checkSum );
}


//void checkResultVector( double &checkSum, int &bufferLength, const double &testVal , int &procCount, const double &epsilon)
//{}




int main( int argc,  char * argv[])
{
  const double TEST_VAL = 0.1;
  const double EPSILON = pow(10, -9);

  int rank, procCount;
  // wollen wir MPI_Standard-Konform bleibene
  // unsigned long size=0;
  int size=0;
  int block=0;
  int tot, sz0;
  double startTime, endTime;
  double localResult=0, checkSum=0;
  
  //--------------------------------------------------------------
  startMPI( rank, procCount, argc, argv);   // Initialisierung der MPI-Umgebung
  // MPI_Wtime NACH startMPI, sonst Fehlermeldung
  //     Attempting to use an MPI routine before initializing MPI

  startTime = MPI_Wtime();

  printf("process %i starts test \n", rank);

  
  if(0==rank)
  {
    printf("Epsilon = %0.10lf\n", EPSILON);
    input(argc, argv, size, block);
  }
  MPI_Bcast(&size, 1, MPI_INT, 0, MPI_COMM_WORLD);
  MPI_Bcast(&block, 1, MPI_INT, 0, MPI_COMM_WORLD);
  double * vector = new double[size];
  
  if(0==rank)
  {
    initVector(vector, size, TEST_VAL);
  }
  
  //printVector(vector, size, rank, procCount );
  MPI_Bcast(vector, size, MPI_DOUBLE, 0, MPI_COMM_WORLD);
  //printVector(vector, size, rank, procCount );
  
  // auszuführen von allen Prozessen:
  for(int i=0; i<size;++i)
  {
    localResult+=vector[i];
  }
  printf("#######  process %i yields partial sum: %0.1lf\n", rank, localResult);
  //printf("#######  process %i yields check sum: %0.1lf\n", rank, checkSum);
  
  MPI_Reduce( &localResult, &checkSum, 1, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD );

  double * vector_empf = new double[size];

  printf("size, block: %i %i \n ", size, block);
  if (size < block)
    {
      printf("MPI_Reduce in einem!\n ");
      MPI_Reduce( &vector[0], &vector_empf[0], size, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD );
    }
  else
    {
      tot = 0;
      do 
	{
	  sz0 = block;
	  if (tot + sz0 > size)  sz0 = size - tot;
//          if(0==rank) printf("MPI_Reduce: tot %i\n ", tot);
          // fflush(stdout);


	  MPI_Reduce( &vector[tot], &vector_empf[tot], sz0, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD );

	  tot = tot + sz0;
	  MPI_Barrier(MPI_COMM_WORLD);
	}
      while (tot < size);
    }





//   if(0==rank) {
//     MPI_Reduce( MPI_IN_PLACE, &vector, size, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD );
//   } else {
//     MPI_Reduce( &vector, NULL, size, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD );
//   }
// int MPI_Reduce(void *sendbuf, void *recvbuf, int count,  MPI_Datatype datatype, MPI_Op op, int root, MPI_Comm comm)







  MPI_Barrier(MPI_COMM_WORLD);
  

  if(0==rank)
  { 
    checkResult( checkSum, size, TEST_VAL, procCount, EPSILON );
    endTime = MPI_Wtime();
    printf("Elapsed time: %lf\n", (endTime - startTime));

    localResult=0;
    for(int i=0; i<size;++i)    {
      localResult+=vector_empf[i];
//      if (vector_empf[i] == TEST_VAL) printf("UNCHANGED %i\n ", i);    
    }
    printf("Master's Summe: %lf \n", localResult);


  }
  
//  cleanUp(vector);


  MPI_Finalize();

  //--------------------------------------------------------------

} // main

