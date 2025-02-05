<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 10:20:00 2014" -->
<!-- isoreceived="20140212152000" -->
<!-- sent="Wed, 12 Feb 2014 07:19:54 -0800" -->
<!-- isosent="20140212151954" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems" -->
<!-- id="3EE6A616-38A3-4E38-81F2-9C4A11F2191B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="719B6CEC-3CA4-4E50-8AA6-170F03C359CD_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 10:19:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14124.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>Previous message:</strong> <a href="14122.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>In reply to:</strong> <a href="14122.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14125.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Reply:</strong> <a href="14125.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
...and your version of Slurm?
<br>
<p>On Feb 12, 2014, at 7:19 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What is your SLURM_TASKS_PER_NODE?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 12, 2014, at 6:58 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No, the system has only a few MOAB_* variables and many SLURM_*
</span><br>
<span class="quotelev2">&gt;&gt; variables:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $BASH                         $IFS                          $SECONDS                      $SLURM_PTY_PORT
</span><br>
<span class="quotelev2">&gt;&gt; $BASHOPTS                     $LINENO                       $SHELL                        $SLURM_PTY_WIN_COL
</span><br>
<span class="quotelev2">&gt;&gt; $BASHPID                      $LINES                        $SHELLOPTS                    $SLURM_PTY_WIN_ROW
</span><br>
<span class="quotelev2">&gt;&gt; $BASH_ALIASES                 $MACHTYPE                     $SHLVL                        $SLURM_SRUN_COMM_HOST
</span><br>
<span class="quotelev2">&gt;&gt; $BASH_ARGC                    $MAILCHECK                    $SLURMD_NODENAME              $SLURM_SRUN_COMM_PORT
</span><br>
<span class="quotelev2">&gt;&gt; $BASH_ARGV                    $MOAB_CLASS                   $SLURM_CHECKPOINT_IMAGE_DIR   $SLURM_STEPID
</span><br>
<span class="quotelev2">&gt;&gt; $BASH_CMDS                    $MOAB_GROUP                   $SLURM_CONF                   $SLURM_STEP_ID
</span><br>
<span class="quotelev2">&gt;&gt; $BASH_COMMAND                 $MOAB_JOBID                   $SLURM_CPUS_ON_NODE           $SLURM_STEP_LAUNCHER_PORT
</span><br>
<span class="quotelev2">&gt;&gt; $BASH_LINENO                  $MOAB_NODECOUNT               $SLURM_DISTRIBUTION           $SLURM_STEP_NODELIST
</span><br>
<span class="quotelev2">&gt;&gt; $BASH_SOURCE                  $MOAB_PARTITION               $SLURM_GTIDS                  $SLURM_STEP_NUM_NODES
</span><br>
<span class="quotelev2">&gt;&gt; $BASH_SUBSHELL                $MOAB_PROCCOUNT               $SLURM_JOBID                  $SLURM_STEP_NUM_TASKS
</span><br>
<span class="quotelev2">&gt;&gt; $BASH_VERSINFO                $MOAB_SUBMITDIR               $SLURM_JOB_CPUS_PER_NODE      $SLURM_STEP_TASKS_PER_NODE
</span><br>
<span class="quotelev2">&gt;&gt; $BASH_VERSION                 $MOAB_USER                    $SLURM_JOB_ID                 $SLURM_SUBMIT_DIR
</span><br>
<span class="quotelev2">&gt;&gt; $COLUMNS                      $OPTERR                       $SLURM_JOB_NODELIST           $SLURM_SUBMIT_HOST
</span><br>
<span class="quotelev2">&gt;&gt; $COMP_WORDBREAKS              $OPTIND                       $SLURM_JOB_NUM_NODES          $SLURM_TASKS_PER_NODE
</span><br>
<span class="quotelev2">&gt;&gt; $DIRSTACK                     $OSTYPE                       $SLURM_LAUNCH_NODE_IPADDR     $SLURM_TASK_PID
</span><br>
<span class="quotelev2">&gt;&gt; $EUID                         $PATH                         $SLURM_LOCALID                $SLURM_TOPOLOGY_ADDR
</span><br>
<span class="quotelev2">&gt;&gt; $GROUPS                       $POSIXLY_CORRECT              $SLURM_NNODES                 $SLURM_TOPOLOGY_ADDR_PATTERN
</span><br>
<span class="quotelev2">&gt;&gt; $HISTCMD                      $PPID                         $SLURM_NODEID                 $SRUN_DEBUG
</span><br>
<span class="quotelev2">&gt;&gt; $HISTFILE                     $PS1                          $SLURM_NODELIST               $TERM
</span><br>
<span class="quotelev2">&gt;&gt; $HISTFILESIZE                 $PS2                          $SLURM_NPROCS                 $TMPDIR
</span><br>
<span class="quotelev2">&gt;&gt; $HISTSIZE                     $PS4                          $SLURM_NTASKS                 $UID
</span><br>
<span class="quotelev2">&gt;&gt; $HOSTNAME                     $PWD                          $SLURM_PRIO_PROCESS           $_
</span><br>
<span class="quotelev2">&gt;&gt; $HOSTTYPE                     $RANDOM                       $SLURM_PROCID                 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Feb 12, 2014 at 06:12:45AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seems rather odd - since this is managed by Moab, you shouldn't be seeing SLURM envars at all. What you should see are PBS_* envars, including a PBS_NODEFILE that actually contains the allocation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 12, 2014, at 4:42 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried the nightly snapshot (openmpi-1.7.5a1r30692.tar.gz) on a system
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with slurm and moab. I requested an interactive session using:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; msub -I -l nodes=3:ppn=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and started a simple test case which fails:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -np 2 ./mpi-test 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There are not enough slots available in the system to satisfy the 2 slots 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./mpi-test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for use.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; srun: error: xxxx108: task 1: Exited with exit code 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; srun: Terminating job step 131823.4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; srun: error: xxxx107: task 0: Exited with exit code 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; srun: Job step aborted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slurmd[xxxx108]: *** STEP 131823.4 KILLED AT 2014-02-12T13:30:32 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; requesting only one core works:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun  ./mpi-test 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 0 on xxxx106 out of 1: 0.000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 0 on xxxx106 out of 1: 0.000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using openmpi-1.6.5 works with multiple cores:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -np 24 ./mpi-test 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 0 on xxxx106 out of 24: 0.000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 12 on xxxx106 out of 24: 12.000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 11 on xxxx108 out of 24: 11.000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 18 on xxxx106 out of 24: 18.000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ echo $SLURM_JOB_CPUS_PER_NODE 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8(x3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I never used slurm before so this could also be a user error on my side.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But as 1.6.5 works it seems something has changed and wanted to let
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you know in case it was not intentionally.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 		Adrian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 		Adrian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Adrian Reber &lt;adrian_at_[hidden]&gt;            <a href="http://lisas.de/~adrian/">http://lisas.de/~adrian/</a>
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Let us all bask in television's warm glowing warming glow.&quot; -- Homer Simpson
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14124.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>Previous message:</strong> <a href="14122.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>In reply to:</strong> <a href="14122.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14125.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Reply:</strong> <a href="14125.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
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
