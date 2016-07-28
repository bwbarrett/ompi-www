<?
$subject_val = "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 10:39:23 2008" -->
<!-- isoreceived="20081217153923" -->
<!-- sent="Wed, 17 Dec 2008 07:29:46 -0800" -->
<!-- isosent="20081217152946" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?" -->
<!-- id="43F69684-CD93-4269-8896-9B187CE65E08_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081217143019.GA234_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-17 10:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7556.php">John Fink: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>Previous message:</strong> <a href="7554.php">Ethan Mallove: "[OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?"</a>
<li><strong>In reply to:</strong> <a href="7554.php">Ethan Mallove: "[OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7556.php">John Fink: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>Reply:</strong> <a href="7556.php">John Fink: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe that the openmpi that comes with leopard doesn't support  
<br>
xgrid. If you type ompi_info|grep xgrid you get nothing. I'm not sure  
<br>
what apple was thinking.
<br>
<p>Doug Reeder
<br>
On Dec 17, 2008, at 6:30 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Hi John,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm forwarding your question to the Open MPI users list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec/17/2008 08:35:00AM, John Fink wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    Hello OpenMPI folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    I've got a large pool of Macs running Leopard that are all on  
</span><br>
<span class="quotelev2">&gt;&gt; an xgrid.
</span><br>
<span class="quotelev2">&gt;&gt;    However, I can't seem to use the mpirun that comes with Leopard  
</span><br>
<span class="quotelev2">&gt;&gt; with the
</span><br>
<span class="quotelev2">&gt;&gt;    xgrid.  I've got my grid and password environment variables set  
</span><br>
<span class="quotelev2">&gt;&gt; up okay on
</span><br>
<span class="quotelev2">&gt;&gt;    my controller, all the xgrid command line commands work  
</span><br>
<span class="quotelev2">&gt;&gt; (displaying grid
</span><br>
<span class="quotelev2">&gt;&gt;    IDs, things like that) but mpirun only wants to run things on  
</span><br>
<span class="quotelev2">&gt;&gt; the local
</span><br>
<span class="quotelev2">&gt;&gt;    host.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    I'm extremely new to OpenMPI and only slightly less new to Macs  
</span><br>
<span class="quotelev2">&gt;&gt; so there's
</span><br>
<span class="quotelev2">&gt;&gt;    probably something very obvious that I'm missing, but I'm  
</span><br>
<span class="quotelev2">&gt;&gt; trying what's
</span><br>
<span class="quotelev2">&gt;&gt;    detailed on this page:
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.macresearch.org/runing_mpi_job_through_xgrid">http://www.macresearch.org/runing_mpi_job_through_xgrid</a> (the / 
</span><br>
<span class="quotelev2">&gt;&gt; bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt;    example).  Here's my output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    as-0003-l:~ locadmin$ mpirun -n 8 /bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt;    as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev2">&gt;&gt;    as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev2">&gt;&gt;    as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev2">&gt;&gt;    as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev2">&gt;&gt;    as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev2">&gt;&gt;    as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev2">&gt;&gt;    as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev2">&gt;&gt;    as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Issuing the same command with -nolocal yields the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    as-0003-l:~ locadmin$ mpirun --nolocal -n 8 /bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;    There are no available nodes allocated to this job. This could  
</span><br>
<span class="quotelev2">&gt;&gt; be because
</span><br>
<span class="quotelev2">&gt;&gt;    no nodes were found or all the available nodes were already used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Note that since the -nolocal option was given no processes can be
</span><br>
<span class="quotelev2">&gt;&gt;    launched on the local node.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;    [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev2">&gt;&gt; Temporarily out
</span><br>
<span class="quotelev2">&gt;&gt;    of resource in file
</span><br>
<span class="quotelev2">&gt;&gt;    /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/base/ 
</span><br>
<span class="quotelev2">&gt;&gt; rmaps_base_support_fns.c
</span><br>
<span class="quotelev2">&gt;&gt;    at line 168
</span><br>
<span class="quotelev2">&gt;&gt;    [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev2">&gt;&gt; Temporarily out
</span><br>
<span class="quotelev2">&gt;&gt;    of resource in file
</span><br>
<span class="quotelev2">&gt;&gt;    /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/ 
</span><br>
<span class="quotelev2">&gt;&gt; round_robin/rmaps_rr.c
</span><br>
<span class="quotelev2">&gt;&gt;    at line 402
</span><br>
<span class="quotelev2">&gt;&gt;    [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev2">&gt;&gt; Temporarily out
</span><br>
<span class="quotelev2">&gt;&gt;    of resource in file
</span><br>
<span class="quotelev2">&gt;&gt;    /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/base/ 
</span><br>
<span class="quotelev2">&gt;&gt; rmaps_base_map_job.c
</span><br>
<span class="quotelev2">&gt;&gt;    at line 210
</span><br>
<span class="quotelev2">&gt;&gt;    [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev2">&gt;&gt; Temporarily out
</span><br>
<span class="quotelev2">&gt;&gt;    of resource in file
</span><br>
<span class="quotelev2">&gt;&gt;    /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmgr/urm/ 
</span><br>
<span class="quotelev2">&gt;&gt; rmgr_urm.c at
</span><br>
<span class="quotelev2">&gt;&gt;    line 372
</span><br>
<span class="quotelev2">&gt;&gt;    [as-0003-l.lib.mcmaster.ca:82776] mpirun: spawn failed with  
</span><br>
<span class="quotelev2">&gt;&gt; errno=-3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks very much for any help you can provide!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    jf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    --
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://libgrunt.blogspot.com">http://libgrunt.blogspot.com</a> -- library culture and technology.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; References
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Visible links
</span><br>
<span class="quotelev2">&gt;&gt;    . <a href="http://www.macresearch.org/runing_mpi_job_through_xgrid">http://www.macresearch.org/runing_mpi_job_through_xgrid</a>
</span><br>
<span class="quotelev2">&gt;&gt;    . <a href="http://as-0003-l.lib.mcmaster.ca/">http://as-0003-l.lib.mcmaster.ca/</a>
</span><br>
<span class="quotelev2">&gt;&gt;    . <a href="http://as-0003-l.lib.mcmaster.ca/">http://as-0003-l.lib.mcmaster.ca/</a>
</span><br>
<span class="quotelev2">&gt;&gt;    . <a href="http://as-0003-l.lib.mcmaster.ca/">http://as-0003-l.lib.mcmaster.ca/</a>
</span><br>
<span class="quotelev2">&gt;&gt;    . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev2">&gt;&gt;    . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev2">&gt;&gt;    . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev2">&gt;&gt;    . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev2">&gt;&gt;    . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev2">&gt;&gt;    . <a href="http://libgrunt.blogspot.com/">http://libgrunt.blogspot.com/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<li><strong>Next message:</strong> <a href="7556.php">John Fink: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>Previous message:</strong> <a href="7554.php">Ethan Mallove: "[OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?"</a>
<li><strong>In reply to:</strong> <a href="7554.php">Ethan Mallove: "[OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7556.php">John Fink: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>Reply:</strong> <a href="7556.php">John Fink: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
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