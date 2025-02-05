#include "mpi.h"
#include <stdio.h>

#define NUM 16

int main(int argc, char **argv) {
    int myrank, count;
    MPI_Status status;


    int data[NUM] = {1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16};
    int i, j;

    MPI_Init(&argc, &argv); 
    MPI_Comm_rank(MPI_COMM_WORLD, &myrank);
    MPI_Comm_size(MPI_COMM_WORLD, &count);
    
    if (myrank == 0) {
      for (i=1; i<count; i++) {
	for (j=0; j<NUM; j++) {
	  MPI_Send(&data[j], 1, MPI_INT, i, 99, MPI_COMM_WORLD); 
	} 
      }
    } else {
      for (j=0; j<NUM; j++) {
	MPI_Recv(&data[j], 1, MPI_INT, 0, 99, MPI_COMM_WORLD, &status);
	printf("[%d] received data[%d]=%d\n", myrank, j, data[j]);
      } 
    }    
    
    MPI_Finalize(); 
}

