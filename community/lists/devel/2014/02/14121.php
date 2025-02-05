<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 09:58:51 2014" -->
<!-- isoreceived="20140212145851" -->
<!-- sent="Wed, 12 Feb 2014 15:58:50 +0100" -->
<!-- isosent="20140212145850" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems" -->
<!-- id="20140212145850.GB31985_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2161142-1344-4BFC-BF1C-5454E36B9FE4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 09:58:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14122.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Previous message:</strong> <a href="14120.php">Ralph Castain: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>In reply to:</strong> <a href="14118.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14122.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Reply:</strong> <a href="14122.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, the system has only a few MOAB_* variables and many SLURM_*
<br>
variables:
<br>
<p>$BASH                         $IFS                          $SECONDS                      $SLURM_PTY_PORT
<br>
$BASHOPTS                     $LINENO                       $SHELL                        $SLURM_PTY_WIN_COL
<br>
$BASHPID                      $LINES                        $SHELLOPTS                    $SLURM_PTY_WIN_ROW
<br>
$BASH_ALIASES                 $MACHTYPE                     $SHLVL                        $SLURM_SRUN_COMM_HOST
<br>
$BASH_ARGC                    $MAILCHECK                    $SLURMD_NODENAME              $SLURM_SRUN_COMM_PORT
<br>
$BASH_ARGV                    $MOAB_CLASS                   $SLURM_CHECKPOINT_IMAGE_DIR   $SLURM_STEPID
<br>
$BASH_CMDS                    $MOAB_GROUP                   $SLURM_CONF                   $SLURM_STEP_ID
<br>
$BASH_COMMAND                 $MOAB_JOBID                   $SLURM_CPUS_ON_NODE           $SLURM_STEP_LAUNCHER_PORT
<br>
$BASH_LINENO                  $MOAB_NODECOUNT               $SLURM_DISTRIBUTION           $SLURM_STEP_NODELIST
<br>
$BASH_SOURCE                  $MOAB_PARTITION               $SLURM_GTIDS                  $SLURM_STEP_NUM_NODES
<br>
$BASH_SUBSHELL                $MOAB_PROCCOUNT               $SLURM_JOBID                  $SLURM_STEP_NUM_TASKS
<br>
$BASH_VERSINFO                $MOAB_SUBMITDIR               $SLURM_JOB_CPUS_PER_NODE      $SLURM_STEP_TASKS_PER_NODE
<br>
$BASH_VERSION                 $MOAB_USER                    $SLURM_JOB_ID                 $SLURM_SUBMIT_DIR
<br>
$COLUMNS                      $OPTERR                       $SLURM_JOB_NODELIST           $SLURM_SUBMIT_HOST
<br>
$COMP_WORDBREAKS              $OPTIND                       $SLURM_JOB_NUM_NODES          $SLURM_TASKS_PER_NODE
<br>
$DIRSTACK                     $OSTYPE                       $SLURM_LAUNCH_NODE_IPADDR     $SLURM_TASK_PID
<br>
$EUID                         $PATH                         $SLURM_LOCALID                $SLURM_TOPOLOGY_ADDR
<br>
$GROUPS                       $POSIXLY_CORRECT              $SLURM_NNODES                 $SLURM_TOPOLOGY_ADDR_PATTERN
<br>
$HISTCMD                      $PPID                         $SLURM_NODEID                 $SRUN_DEBUG
<br>
$HISTFILE                     $PS1                          $SLURM_NODELIST               $TERM
<br>
$HISTFILESIZE                 $PS2                          $SLURM_NPROCS                 $TMPDIR
<br>
$HISTSIZE                     $PS4                          $SLURM_NTASKS                 $UID
<br>
$HOSTNAME                     $PWD                          $SLURM_PRIO_PROCESS           $_
<br>
$HOSTTYPE                     $RANDOM                       $SLURM_PROCID                 
<br>
<p><p><p>On Wed, Feb 12, 2014 at 06:12:45AM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Seems rather odd - since this is managed by Moab, you shouldn't be seeing SLURM envars at all. What you should see are PBS_* envars, including a PBS_NODEFILE that actually contains the allocation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 12, 2014, at 4:42 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I tried the nightly snapshot (openmpi-1.7.5a1r30692.tar.gz) on a system
</span><br>
<span class="quotelev2">&gt; &gt; with slurm and moab. I requested an interactive session using:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; msub -I -l nodes=3:ppn=8
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; and started a simple test case which fails:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -np 2 ./mpi-test 1
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; There are not enough slots available in the system to satisfy the 2 slots 
</span><br>
<span class="quotelev2">&gt; &gt; that were requested by the application:
</span><br>
<span class="quotelev2">&gt; &gt;  ./mpi-test
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev2">&gt; &gt; for use.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; srun: error: xxxx108: task 1: Exited with exit code 1
</span><br>
<span class="quotelev2">&gt; &gt; srun: Terminating job step 131823.4
</span><br>
<span class="quotelev2">&gt; &gt; srun: error: xxxx107: task 0: Exited with exit code 1
</span><br>
<span class="quotelev2">&gt; &gt; srun: Job step aborted
</span><br>
<span class="quotelev2">&gt; &gt; slurmd[xxxx108]: *** STEP 131823.4 KILLED AT 2014-02-12T13:30:32 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; requesting only one core works:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun  ./mpi-test 1
</span><br>
<span class="quotelev2">&gt; &gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 0 on xxxx106 out of 1: 0.000000
</span><br>
<span class="quotelev2">&gt; &gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 0 on xxxx106 out of 1: 0.000000
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; using openmpi-1.6.5 works with multiple cores:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -np 24 ./mpi-test 2
</span><br>
<span class="quotelev2">&gt; &gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 0 on xxxx106 out of 24: 0.000000
</span><br>
<span class="quotelev2">&gt; &gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 12 on xxxx106 out of 24: 12.000000
</span><br>
<span class="quotelev2">&gt; &gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 11 on xxxx108 out of 24: 11.000000
</span><br>
<span class="quotelev2">&gt; &gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 18 on xxxx106 out of 24: 18.000000
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ echo $SLURM_JOB_CPUS_PER_NODE 
</span><br>
<span class="quotelev2">&gt; &gt; 8(x3)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I never used slurm before so this could also be a user error on my side.
</span><br>
<span class="quotelev2">&gt; &gt; But as 1.6.5 works it seems something has changed and wanted to let
</span><br>
<span class="quotelev2">&gt; &gt; you know in case it was not intentionally.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 		Adrian
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p><pre>
-- 
Adrian Reber &lt;adrian_at_[hidden]&gt;            <a href="http://lisas.de/~adrian/">http://lisas.de/~adrian/</a>
&quot;Let us all bask in television's warm glowing warming glow.&quot; -- Homer Simpson
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14122.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Previous message:</strong> <a href="14120.php">Ralph Castain: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>In reply to:</strong> <a href="14118.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14122.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Reply:</strong> <a href="14122.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
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
