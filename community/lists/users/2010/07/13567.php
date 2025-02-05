<?
$subject_val = "Re: [OMPI users] OpenMPI Hangs, No Error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 10 13:14:39 2010" -->
<!-- isoreceived="20100710171439" -->
<!-- sent="Sat, 10 Jul 2010 10:14:34 -0700 (PDT)" -->
<!-- isosent="20100710171434" -->
<!-- name="Robert Walters" -->
<!-- email="raw19896_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Hangs, No Error" -->
<!-- id="738119.84745.qm_at_web80803.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] OpenMPI Hangs, No Error" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Hangs, No Error<br>
<strong>From:</strong> Robert Walters (<em>raw19896_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-10 13:14:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13568.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13566.php">Shiqing Fan: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Maybe in reply to:</strong> <a href="13484.php">Robert Walters: "[OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13568.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Reply:</strong> <a href="13568.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello again,
<br>
<p>I believe my administrator has opened the ports I requested. The problem I am having now is that OpenMPI is not listening to my defined port assignments in openmpi-mca-params.conf (looks like permission 644 on those files should it be 755?)
<br>
<p>When I perform netstat -ltnup I see that orted is listening 14 processes in tcp but scaterred in the 26000ish port range when I specified 60001-60016 in the mca-params file. Is there a parameter I am missing? In any case I am still hanging as mentioned originally even with the port forwarding enabled and specifications in mca-param enabled. 
<br>
<p>Any other ideas on what might be causing the hang? Is there a more verbose mode I can employ to see more deeply into the issue? I have run --debug-daemons and --mca plm_base_verbose 99.
<br>
<p>Thanks!
<br>
--- On Tue, 7/6/10, Robert Walters &lt;raw19896_at_[hidden]&gt; wrote:
<br>
<p>From: Robert Walters &lt;raw19896_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] OpenMPI Hangs, No Error
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Tuesday, July 6, 2010, 5:41 PM
<br>
<p>Thanks for your expeditious responses, Ralph.
<br>
<p>Just to confirm with you, I should change openmpi-mca-params.conf to include:
<br>
<p>oob_tcp_port_min_v4 = (My minimum port in the range)
<br>
oob_tcp_port_range_v4 = (My port range)
<br>
btl_tcp_port_min_v4 = (My minimum port in the range)
<br>
btl_tcp_port_range_v4 = (My port range)
<br>
<p>correct?
<br>
<p>Also, for a cluster of around 32-64 processes (8 processors per node), how wide of a range will I require? I've noticed some entries in the mailing list suggesting you need a few to get started and then it opens as necessary. Will I be safe with 20 or should I go for 100? 
<br>
<p>Thanks again for all of your help!
<br>
<p>--- On Tue, 7/6/10, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p>From:
 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] OpenMPI Hangs, No Error
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Tuesday, July 6, 2010, 5:31 PM
<br>
<p>Problem isn't with ssh - the problem is that the daemons need to open a TCP connection back to the machine where mpirun is running. If the firewall blocks that connection, then we can't run.
<br>
If you can get a range of ports opened, then you can specify the ports OMPI should use for this purpose. If the sysadmin won't allow even that, then you are pretty well hosed.
<br>
<p>On Jul 6, 2010, at 2:23 PM, Robert Walters wrote:
<br>
Yes, there is a system firewall. I don't think the sysadmin will allow it to go disabled. Each Linux machine
 has the built-in RHEL firewall. SSH is enabled through the firewall though.
<br>
<p>--- On Tue, 7/6/10, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p>From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] OpenMPI Hangs, No Error
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Tuesday, July 6, 2010, 4:19 PM
<br>
<p>It looks like the remote daemon is starting - is there a firewall in the way?
<br>
On Jul 6, 2010, at 2:04 PM, Robert Walters
 wrote:
<br>
Hello all,
<br>
<p>I am using OpenMPI 1.4.2 on RHEL. I have a cluster of AMD Opteron's and right now I am just working on getting OpenMPI itself up and running. I have a successful configure and make all install. LD_LIBRARY_PATH and PATH variables were correctly edited. mpirun -np 8 hello_c successfully works on all machines. I have setup my two test machines with DSA key pairs that successfully work with each other.
<br>
<p>The problem comes when I initiate my hostfile to attempt to communicate across machines. The hostfile is setup correctly with &lt;host_name&gt; &lt;slots&gt; &lt;max-slots&gt;. When running with all verbose options enabled &quot;mpirun --mca plm_base_verbose 99 --debug-daemons --mca btl_base_verbose 30 --mca oob_base_verbose 99 --mca
 pml_base_verbose 99 -hostfile hostfile -np 16 hello_c&quot; I receive the following text
 output.
<br>
<p>[machine1:03578] mca: base: components_open: Looking for plm components
<br>
[machine1:03578] mca: base: components_open: opening plm components
<br>
[machine1:03578] mca: base: components_open: found loaded component rsh
<br>
[machine1:03578] mca: base: components_open: component rsh has no register function
<br>
[machine1:03578] mca: base: components_open: component rsh open function successful
<br>
[machine1:03578] mca: base: components_open: found loaded component slurm
<br>
[machine1:03578] mca: base: components_open: component slurm has no register function
<br>
[machine1:03578] mca: base: components_open: component slurm open function successful
<br>
[machine1:03578] mca:base:select: Auto-selecting plm components
<br>
[machine1:03578] mca:base:select:(&#160; plm) Querying component [rsh]
<br>
[machine1:03578] mca:base:select:(&#160; plm) Query of component [rsh] set priority to 10
<br>
[machine1:03578] mca:base:select:(&#160; plm) Querying component
 [slurm]
<br>
[machine1:03578] mca:base:select:(&#160; plm) Skipping component [slurm]. Query failed to return a module
<br>
[machine1:03578] mca:base:select:(&#160; plm) Selected component [rsh]
<br>
[machine1:03578] mca: base: close: component slurm closed
<br>
[machine1:03578] mca: base: close: unloading component slurm
<br>
[machine1:03578] mca: base: components_open: Looking for oob components
<br>
[machine1:03578] mca: base: components_open: opening oob components
<br>
[machine1:03578] mca: base: components_open: found loaded component tcp
<br>
[machine1:03578] mca: base: components_open: component tcp has no register function
<br>
[machine1:03578] mca: base: components_open: component tcp open function successful
<br>
Daemon was launched on machine2- beginning to initialize
<br>
[machine2:01962] mca: base: components_open: Looking for oob components
<br>
[machine2:01962] mca: base: components_open: opening oob components
<br>
[machine2:01962] mca: base: components_open:
 found loaded component tcp
<br>
[machine2:01962] mca: base: components_open: component tcp has no register function
<br>
[machine2:01962] mca: base: components_open: component tcp open function successful
<br>
Daemon [[1418,0],1] checking in as pid 1962 on host machine2
<br>
Daemon [[1418,0],1] not using static ports
<br>
<p>At this point the system hangs indefinitely. While running top on the machine2 terminal, I see several things come up briefly. These items are: sshd (root), tcsh (myuser), orted (myuser), and mcstransd (root). I was wondering if sshd needs to be initiated by myuser? It is currently turned off in sshd_config through UsePAM yes. This was setup by the sysadmin but it can be worked around if this is necessary.
<br>
<p>So in summary, mpirun works on each machine individually, but hangs when initiated through a hostfile or with the -host flag. ./configure with defaults and --prefix. LD_LIBRARY_PATH and PATH set up correctly. Any help is
 appreciated. Thanks!
<br>
<p><p><p>users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>-----Inline Attachment Follows-----
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>-----Inline Attachment Follows-----
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13567/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13568.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13566.php">Shiqing Fan: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Maybe in reply to:</strong> <a href="13484.php">Robert Walters: "[OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13568.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Reply:</strong> <a href="13568.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
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
