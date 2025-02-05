<?
$subject_val = "Re: [OMPI users] client-server example";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 13 22:05:15 2013" -->
<!-- isoreceived="20130414020515" -->
<!-- sent="Sat, 13 Apr 2013 19:05:08 -0700" -->
<!-- isosent="20130414020508" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] client-server example" -->
<!-- id="DCD009F2-34CA-4999-BB13-90F50EA81F0A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABftzeg7PjvaCmW71UCE3Wk5TeRGs4HmY6xyY9nKRHdm82=7fw_at_mail.gmail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] client-server example<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-13 22:05:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21727.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>Previous message:</strong> <a href="21725.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>In reply to:</strong> <a href="21725.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21727.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>Reply:</strong> <a href="21727.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you see that there are two semi-colon's in that line? They both need to be protected from the shell. I would just put quotes around the whole thing.
<br>
<p>Other than that, it looks okay to me...I assume you are using a 1.6 series release?
<br>
<p>On Apr 13, 2013, at 4:54 PM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; After I replaced &quot;;&quot; with &quot;\;&quot; in the server name I got passed the
</span><br>
<span class="quotelev1">&gt; ABORT problem.  Now the client and server deadlock until I finally get
</span><br>
<span class="quotelev1">&gt; (on the client side):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [jski:02429] [[59675,0],0] -&gt; [[59187,0],0] (node: jski) oob-tcp:
</span><br>
<span class="quotelev1">&gt; Number of attempts to create TCP connection has been exceeded.  Cannot
</span><br>
<span class="quotelev1">&gt; communicate with peer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Apr 13, 2013 at 7:24 PM, John Chludzinski
</span><br>
<span class="quotelev1">&gt; &lt;john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sorry: The previous post was intended for another group, ignore it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With regards to the client-server problem:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -n 1 client
</span><br>
<span class="quotelev2">&gt;&gt; 3878879232.0;tcp://192.168.1.4:37625+3878879233.0;tcp://192.168.1.4:38945:300
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [jski:01882] [[59199,1],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; dpm_orte.c at line 158
</span><br>
<span class="quotelev2">&gt;&gt; [jski:1882] *** An error occurred in MPI_Comm_connect
</span><br>
<span class="quotelev2">&gt;&gt; [jski:1882] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [jski:1882] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev2">&gt;&gt; [jski:1882] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 0 with PID 1882 on
</span><br>
<span class="quotelev2">&gt;&gt; node jski exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev2">&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev2">&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev2">&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Apr 13, 2013 at 7:16 PM, John Chludzinski
</span><br>
<span class="quotelev2">&gt;&gt; &lt;john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After I &quot;source mpi.ksk&quot;, PATH is unchanged but LD_LIBRARY_PATH is there:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   $ print $LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /usr/lib64/openmpi/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why does PATH loose its change?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---John
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sat, Apr 13, 2013 at 12:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You need to pass in the port info that the server printed - just copy/paste the line below &quot;server available at&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 12, 2013, at 10:58 PM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Found the following client-server example (code) on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.mpi-forum.org">http://www.mpi-forum.org</a> and I'm trying to get it to work.  Not sure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; what argv[1] should be for the client?  The output from the server
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; side is:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      server available at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4094230528.0;tcp://192.168.1.4:55803+4094230529.0;tcp://192.168.1.4:51618:300
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; // SERVER
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;error.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;errno.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #define MAX_DATA 100
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #define FATAL 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int main( int argc, char **argv )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Comm client;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Status status;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; char port_name[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; double buf[MAX_DATA];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int size, again;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if (size != 1) error(FATAL, errno, &quot;Server too big&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Open_port(MPI_INFO_NULL, port_name);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; printf(&quot;server available at %s\n&quot;,port_name);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; while (1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI_Comm_accept( port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;client );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     again = 1;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     while (again)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         MPI_Recv( buf, MAX_DATA, MPI_DOUBLE, MPI_ANY_SOURCE,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_ANY_TAG, client, &amp;status );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         switch (status.MPI_TAG)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           case 0: MPI_Comm_free( &amp;client );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             MPI_Close_port(port_name);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             return 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           case 1: MPI_Comm_disconnect( &amp;client );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             again = 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             break;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           case 2: /* do something */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             fprintf( stderr, &quot;Do something ...\n&quot; );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           default:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             /* Unexpected message type */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             MPI_Abort( MPI_COMM_WORLD, 1 );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; //CLIENT
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #define MAX_DATA 100
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int main( int argc, char **argv )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Comm server;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; double buf[MAX_DATA];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; char port_name[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int done = 0, tag, n, CNT=0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; strcpy(port_name, argv[1] );  /* assume server's name is cmd-line arg */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Comm_connect( port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;server );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n = MAX_DATA;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; while (!done)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     tag = 2; /* Action to perform */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     if ( CNT == 5 ) { tag = 0; done = 1; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI_Send( buf, n, MPI_DOUBLE, 0, tag, server );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     CNT++;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     /* etc */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Send( buf, 0, MPI_DOUBLE, 0, 1, server );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Comm_disconnect( &amp;server );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21727.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>Previous message:</strong> <a href="21725.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>In reply to:</strong> <a href="21725.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21727.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>Reply:</strong> <a href="21727.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
