<?
$subject_val = "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 22 12:56:29 2013" -->
<!-- isoreceived="20131122175629" -->
<!-- sent="Fri, 22 Nov 2013 10:56:28 -0700" -->
<!-- isosent="20131122175628" -->
<!-- name="Jason Gans" -->
<!-- email="jgans_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI" -->
<!-- id="528F9ACC.2020508_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="98B7E0DB-078F-4A22-8B11-EB59108BE9F4_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI<br>
<strong>From:</strong> Jason Gans (<em>jgans_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-22 12:56:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23022.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="23020.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="23020.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23022.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="23022.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="23023.php">Ralph Castain: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/22/13 10:47 AM, Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 22.11.2013 um 17:32 schrieb Gans, Jason D:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to run an instance of my application on every *core* of a small cluster. I am using Torque 2.5.12 to run jobs on the cluster. The cluster in question is a heterogeneous collection of machines that are all past their prime. Specifically, the number of cores ranges from 2-8. Here is the Torque &quot;nodes&quot; file:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; n0000 np=2
</span><br>
<span class="quotelev2">&gt;&gt; n0001 np=2
</span><br>
<span class="quotelev2">&gt;&gt; n0002 np=8
</span><br>
<span class="quotelev2">&gt;&gt; n0003 np=8
</span><br>
<span class="quotelev2">&gt;&gt; n0004 np=2
</span><br>
<span class="quotelev2">&gt;&gt; n0005 np=2
</span><br>
<span class="quotelev2">&gt;&gt; n0006 np=2
</span><br>
<span class="quotelev2">&gt;&gt; n0007 np=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I use openmpi-1.6.3, I can oversubscribe nodes but the tasks are allocated to nodes without regard to the number of cores on each node (specified by the &quot;np=xx&quot; in the nodes file). For example, when I run &quot;mpirun -np 24 hostname&quot;, mpirun places three instances of &quot;hostname&quot; on each node, despite the fact that some nodes only have two processors and some have more.
</span><br>
<span class="quotelev1">&gt; You submitted the job itself by requesting 24 cores for it too?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
Since there are only 8 Torque nodes in the cluster, I submitted the job 
<br>
by requesting 8 nodes, i.e. &quot;qsub -I -l nodes=8&quot;.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to have OpenMPI &quot;gracefully&quot; oversubscribe nodes by allocating instances based on the &quot;np=xx&quot; information in the Torque nodes file? It this a Torque problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; p.s. I do get the desired behavior when I run *without* Torque and specify the following machine file to mpirun:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; n0000 slots=2
</span><br>
<span class="quotelev2">&gt;&gt; n0001 slots=2
</span><br>
<span class="quotelev2">&gt;&gt; n0002 slots=8
</span><br>
<span class="quotelev2">&gt;&gt; n0003 slots=8
</span><br>
<span class="quotelev2">&gt;&gt; n0004 slots=2
</span><br>
<span class="quotelev2">&gt;&gt; n0005 slots=2
</span><br>
<span class="quotelev2">&gt;&gt; n0006 slots=2
</span><br>
<span class="quotelev2">&gt;&gt; n0007 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jason
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23022.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="23020.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="23020.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23022.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="23022.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="23023.php">Ralph Castain: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
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
