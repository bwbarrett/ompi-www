<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 20 11:37:24 2006" -->
<!-- isoreceived="20060120163724" -->
<!-- sent="Fri, 20 Jan 2006 09:37:18 -0700" -->
<!-- isosent="20060120163718" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] does btl_openib work ?" -->
<!-- id="48800896-A806-4C59-911E-C0C630CA48AC_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1137618792.24430.28.camel_at_jhugly.pantasys.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-20 11:37:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0519.php">Michael Kluskens: "[O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Previous message:</strong> <a href="0517.php">Glenn Morris: "[O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>In reply to:</strong> <a href="0509.php">Jean-Christophe Hugly: "[O-MPI users] does btl_openib work ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0546.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Reply:</strong> <a href="0546.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jean,
<br>
<p>I am not able to reproduce this problem on a non-threaded build, can  
<br>
you try taking a fresh src package and configuring without thread  
<br>
support. I am wondering if this is simply a threading issue. I did  
<br>
note that you said you configured both with and without threads but  
<br>
try the configure on a fresh source, not on one that had previously  
<br>
been configured with thread support.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p>On Jan 18, 2006, at 2:13 PM, Jean-Christophe Hugly wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been trying for the past few days to get an MPI application  
</span><br>
<span class="quotelev1">&gt; (the
</span><br>
<span class="quotelev1">&gt; pallas bm) to run with ompi and openib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My environment:
</span><br>
<span class="quotelev1">&gt; ===============
</span><br>
<span class="quotelev1">&gt; . two quad cpu hosts with one mlx hca each.
</span><br>
<span class="quotelev1">&gt; . the hosts are running suse10 (kernel 2.6.13) with the latest  
</span><br>
<span class="quotelev1">&gt; (close to
</span><br>
<span class="quotelev1">&gt; it) from openib. (rev 4904, specifically)
</span><br>
<span class="quotelev1">&gt; . opensm runs on third machine with the same os.
</span><br>
<span class="quotelev1">&gt; . openmpi is built from openmpi-1.1a1r8727.tar.bz2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Behaviour:
</span><br>
<span class="quotelev1">&gt; ==========
</span><br>
<span class="quotelev1">&gt; . openib seems to behave ok (ipoib works, rdma_bw and rdma_lat  
</span><br>
<span class="quotelev1">&gt; work, osm
</span><br>
<span class="quotelev1">&gt; works)
</span><br>
<span class="quotelev1">&gt; . I can mpirun any non-mpi program like ls, hostname, or ompi_info all
</span><br>
<span class="quotelev1">&gt; right.
</span><br>
<span class="quotelev1">&gt; . I can mpirun the pallas bm on any single host (the local one or the
</span><br>
<span class="quotelev1">&gt; other)
</span><br>
<span class="quotelev1">&gt; . I can mpirun the pallas bm on  the two nodes provided that I disable
</span><br>
<span class="quotelev1">&gt; the openib btl
</span><br>
<span class="quotelev1">&gt; . If I try to use the openib btl, the bm does not start (at best I get
</span><br>
<span class="quotelev1">&gt; the initial banner, sometimes not). On both hosts, I see that the PMB
</span><br>
<span class="quotelev1">&gt; processes (the correct number for each host) use 99% cpu.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I obtained the exact same behaviour with the following src packages:
</span><br>
<span class="quotelev1">&gt;  openmpi-1.0.1.tar.bz2
</span><br>
<span class="quotelev1">&gt;  openmpi-1.0.2a3r8706.tar.bz2
</span><br>
<span class="quotelev1">&gt;  openmpi-1.1a1r8727.tar.bz2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Earlier on, I also did the same experiment with openmpi-1.0.1 and the
</span><br>
<span class="quotelev1">&gt; stock gen2 of the suse kernel; same thing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configuration:
</span><br>
<span class="quotelev1">&gt; ==============
</span><br>
<span class="quotelev1">&gt; For building, I tried the following variants:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/ompi --enable-mpi-threads --enable- 
</span><br>
<span class="quotelev1">&gt; progress-thread
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/ompi
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/ompi --disable-smp-locks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also tried many variations to mca-params.conf. What I normally  
</span><br>
<span class="quotelev1">&gt; use for trying openib is:
</span><br>
<span class="quotelev1">&gt; rmaps_base_schedule_policy = node
</span><br>
<span class="quotelev1">&gt; btl = ^tcp
</span><br>
<span class="quotelev1">&gt; mpi_paffinity_alone = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpirun cmd I normally use is:
</span><br>
<span class="quotelev1">&gt; mpirun -prefix /opt/ompi -wdir `pwd` -machinefile /root/machines - 
</span><br>
<span class="quotelev1">&gt; np 2 PMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My machine file being:
</span><br>
<span class="quotelev1">&gt; bench1 slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; bench2 slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I doing something obviously wrong ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jean-Christophe Hugly &lt;jice_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; PANTA
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0519.php">Michael Kluskens: "[O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Previous message:</strong> <a href="0517.php">Glenn Morris: "[O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>In reply to:</strong> <a href="0509.php">Jean-Christophe Hugly: "[O-MPI users] does btl_openib work ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0546.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Reply:</strong> <a href="0546.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
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
