<?
$subject_val = "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 06:54:01 2009" -->
<!-- isoreceived="20090716105401" -->
<!-- sent="Thu, 16 Jul 2009 04:53:42 -0600" -->
<!-- isosent="20090716105342" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
<!-- id="5EECFD9F-3463-440E-8829-7C697D52BC1C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b20b52800907152301m5988de1fv4bd4cd195aaa2c8d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-16 06:53:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9994.php">Steven Dale: "[OMPI users] Possible openmpi bug?"</a>
<li><strong>Previous message:</strong> <a href="9992.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9990.php">Mike Dubman: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9184.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 16, 2009, at 12:01 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that Option2 is preferred, because it is more intuitive for  
</span><br>
<span class="quotelev1">&gt; end-user to create rankfile for mpi job, which is described by -app  
</span><br>
<span class="quotelev1">&gt; cmd line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All hosts definitions used inside -app &lt;file&gt;, will be treated like  
</span><br>
<span class="quotelev1">&gt; a single global hostlist combined from all hosts appearing inside &quot;- 
</span><br>
<span class="quotelev1">&gt; app file&quot; and rankfile will refer to any host, appearing inside &quot;- 
</span><br>
<span class="quotelev1">&gt; app &lt;file&gt;&quot; directive. is that correct?
</span><br>
<p>Yes, that's the intent of option 2. Note that the only problem we are  
<br>
addressing here is the use of relative node indexing to specify the  
<br>
rank locations. Everything else works fine - we're just trying to work  
<br>
out the proper index numbering scheme.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. man mpirun claims, that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -app &lt;appfile&gt; Provide an appfile, ignoring all other command line  
</span><br>
<span class="quotelev1">&gt; options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but it seems that it does not ignore all other command line options.
</span><br>
<span class="quotelev1">&gt; Even more, it seems that it is very comfortable to specify some  
</span><br>
<span class="quotelev1">&gt; per_job parameters inside mpirun command just before -app appfile  
</span><br>
<span class="quotelev1">&gt; and putting per_host params inside &quot;-app appfile&quot;. What do you think?
</span><br>
<p>That pretty much is how it already works. We ignore things like &quot;-np&quot;  
<br>
as that is a per-app-context value, but we will pickup any mca params  
<br>
or global directives (e.g., -bynode, -rf, -mca foo bar).
<br>
<p>I confess I personally haven't tested this to see exactly what does  
<br>
and doesn't get picked up as I don't use appfiles. Perhaps others that  
<br>
do can provide more insight into the current behavior.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 16, 2009 at 2:00 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hmmm...well actually, there isn't a bug in the code. This is an  
</span><br>
<span class="quotelev1">&gt; interesting question!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the problem. It has to do with how -host is processed.  
</span><br>
<span class="quotelev1">&gt; Remember, in the new scheme (as of 1.3.0), in the absence of any  
</span><br>
<span class="quotelev1">&gt; other info (e.g., an RM allocation or hostfile), we cycle across - 
</span><br>
<span class="quotelev1">&gt; all- the -host specifications to create a global pool of allocated  
</span><br>
<span class="quotelev1">&gt; nodes. Hence, you got the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: Name: dellix7   Num slots: 0    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: Name: witch1    Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: Name: witch2    Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we start mapping, we call the base function to get the  
</span><br>
<span class="quotelev1">&gt; available nodes for this particular app_context. The function starts  
</span><br>
<span class="quotelev1">&gt; with the entire allocation. It then checks for a hostfile, which in  
</span><br>
<span class="quotelev1">&gt; this case it won't find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subsequently, it looks at the -host spec and removes -all- nodes in  
</span><br>
<span class="quotelev1">&gt; the list that were not included in -host. In the case of  
</span><br>
<span class="quotelev1">&gt; app_context=0, the &quot;-host witch1&quot; causes us to remove dellix7 and  
</span><br>
<span class="quotelev1">&gt; witch2 from the list - leaving only witch1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This list is passed back to the rank_file mapper. The rf mapper then  
</span><br>
<span class="quotelev1">&gt; looks at your rankfile, which tells it to put rank=0 on the +n1 node  
</span><br>
<span class="quotelev1">&gt; on the list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the list only has ONE node on the list, which would correspond  
</span><br>
<span class="quotelev1">&gt; to +n0! Hence the error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have two potential solutions I can see:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Option 1. we can leave things as they are, and you adjust your  
</span><br>
<span class="quotelev1">&gt; rankfile to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 0=+n0 slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=+n0 slot=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since you specified -host witch2 for the second app_context, this  
</span><br>
<span class="quotelev1">&gt; will work to put rank0 on witch1 and rank1 on witch2. However, I  
</span><br>
<span class="quotelev1">&gt; admit that it looks a little weird.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, you could adjust your appfile to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -np 1 -host witch1,witch2 ./hello_world
</span><br>
<span class="quotelev1">&gt; -np 1 ./hello_world
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note you could have -host witch1,witch2 on the second line too, if  
</span><br>
<span class="quotelev1">&gt; you wanted. Now your current rankfile would put rank0 on witch2 and  
</span><br>
<span class="quotelev1">&gt; rank1 on witch1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Option 2. we could modify your relative node syntax to be based on  
</span><br>
<span class="quotelev1">&gt; the eventual total allocation. In this case, we would not use the  
</span><br>
<span class="quotelev1">&gt; base function to give us a list, but instead would construct it from  
</span><br>
<span class="quotelev1">&gt; the allocated node pool. Your current rankfile would give you what  
</span><br>
<span class="quotelev1">&gt; you wanted since we wouldn't count the HNP's node in the pool as it  
</span><br>
<span class="quotelev1">&gt; wasn't included in the allocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts on how you'd like to do this? I can make it work either  
</span><br>
<span class="quotelev1">&gt; way, but have no personal preference.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 15, 2009, at 7:38 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Okay, I'll dig into it - must be a bug in my code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the problem! Thanks for patience in tracking it down...
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 15, 2009 at 7:28 AM, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; I guess your guess was correct, here is the display map.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $cat rankfile
</span><br>
<span class="quotelev2">&gt;&gt; rank 0=+n1 slot=0
</span><br>
<span class="quotelev2">&gt;&gt; rank 1=+n0 slot=0
</span><br>
<span class="quotelev2">&gt;&gt; $cat appfile
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 -host witch1 ./hello_world
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 -host witch2 ./hello_world
</span><br>
<span class="quotelev2">&gt;&gt; $mpirun -np 2 -rf rankfile --display-allocation  -app appfile
</span><br>
<span class="quotelev2">&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: Name: dellix7   Num slots: 0    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: Name: witch1    Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: Name: witch2    Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Rankfile claimed host +n1 by index that is bigger than number of  
</span><br>
<span class="quotelev2">&gt;&gt; allocated hosts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 15, 2009 at 4:10 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What is supposed to happen is this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. each line of the appfile causes us to create a new app_context.  
</span><br>
<span class="quotelev2">&gt;&gt; We store the provided -host info in that object.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. when we create the &quot;allocation&quot;, we cycle through -all- the  
</span><br>
<span class="quotelev2">&gt;&gt; app_contexts and add -all- of their -host info into the list of  
</span><br>
<span class="quotelev2">&gt;&gt; allocated nodes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. when we get_target_nodes, we start with the entire list of  
</span><br>
<span class="quotelev2">&gt;&gt; allocated nodes, and then use -host for that app_context to filter  
</span><br>
<span class="quotelev2">&gt;&gt; down to the hosts allowed for that specific app_context
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So you should have to only provide -np 1 and 1 host on each line.  
</span><br>
<span class="quotelev2">&gt;&gt; My guess is that the rankfile mapper isn't correctly behaving for  
</span><br>
<span class="quotelev2">&gt;&gt; multiple app_contexts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Add --display-allocation to your mpirun cmd line for the &quot;not  
</span><br>
<span class="quotelev2">&gt;&gt; working&quot; cse and let's see what mpirun thinks the total allocation  
</span><br>
<span class="quotelev2">&gt;&gt; is - I'll bet that both nodes show up, which would tell us that my  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;guess&quot; is correct. Then I'll know what needs to be fixed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 15, 2009 at 6:08 AM, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Same result.
</span><br>
<span class="quotelev2">&gt;&gt; I still suspect that rankfile claims for node in small hostlist  
</span><br>
<span class="quotelev2">&gt;&gt; provided by line in the app file, and not from the hostlist  
</span><br>
<span class="quotelev2">&gt;&gt; provided by mpirun on HNP node.
</span><br>
<span class="quotelev2">&gt;&gt; According to my suspections your proposal should not work(and it  
</span><br>
<span class="quotelev2">&gt;&gt; does not), since in appfile line I provide np=1, and 1 host, while  
</span><br>
<span class="quotelev2">&gt;&gt; rankfile tries to allocate all ranks (np=2).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $orte/mca/rmaps/rank_file/rmaps_rank_file.c at line 338
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   if(ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev2">&gt;&gt; orte_rmaps_base_get_target_nodes(&amp;node_list, &amp;num_slots, app,
</span><br>
<span class="quotelev2">&gt;&gt;                                                                    
</span><br>
<span class="quotelev2">&gt;&gt; map-&gt;policy))) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node_list will be partial, according to app, and not full provided  
</span><br>
<span class="quotelev2">&gt;&gt; by mpirun cmd. If I didnt provide hostlist in the appfile line,  
</span><br>
<span class="quotelev2">&gt;&gt; mpirun uses local host and not hosts from the hostfile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tell me if I am wrong by expecting the following behaivor
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I provide to mpirun NP, full_hostlist, full_rankfile, appfile
</span><br>
<span class="quotelev2">&gt;&gt; I provide in appfile only partial NP and partial hostlist.
</span><br>
<span class="quotelev2">&gt;&gt; and it works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently, in order to get it working I need to provide full  
</span><br>
<span class="quotelev2">&gt;&gt; hostlist in the appfile. Which is quit a problematic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $mpirun -np 2 -rf rankfile -app appfile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Rankfile claimed host +n1 by index that is bigger than number of  
</span><br>
<span class="quotelev2">&gt;&gt; allocated hosts.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [dellix7:17277] [[23928,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../../../orte/mca/rmaps/rank_file/rmaps_rank_file.c at  
</span><br>
<span class="quotelev2">&gt;&gt; line 422
</span><br>
<span class="quotelev2">&gt;&gt; [dellix7:17277] [[23928,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c at line 85
</span><br>
<span class="quotelev2">&gt;&gt; [dellix7:17277] [[23928,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../../orte/mca/plm/base/plm_base_launch_support.c at  
</span><br>
<span class="quotelev2">&gt;&gt; line 103
</span><br>
<span class="quotelev2">&gt;&gt; [dellix7:17277] [[23928,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../../../orte/mca/plm/rsh/plm_rsh_module.c at line 1001
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 15, 2009 at 2:02 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Try your &quot;not working&quot; example without the -H on the mpirun cmd  
</span><br>
<span class="quotelev2">&gt;&gt; line - i.e.,, just use &quot;mpirun -np 2 -rf rankfile -app appfile&quot;.  
</span><br>
<span class="quotelev2">&gt;&gt; Does that work?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry to have to keep asking you to try things - I don't have a  
</span><br>
<span class="quotelev2">&gt;&gt; setup here where I can test this as everything is RM managed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 15, 2009, at 12:09 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Ralph, after playing with prefixes it worked,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I still have a problem running app file with rankfile, by  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; providing full hostlist in mpirun command and not in app file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is is planned behaviour, or it can be fixed ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See Working example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $cat rankfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=+n1 slot=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=+n0 slot=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $cat appfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 1 -H witch1,witch2  ./hello_world
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 1 -H witch1,witch2 ./hello_world
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $mpirun -rf rankfile -app appfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world! I'm 1 of 2 on witch1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world! I'm 0 of 2 on witch2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See NOT working example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $cat appfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 1 -H witch1 ./hello_world
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 1 -H witch2 ./hello_world
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $mpirun  -np 2 -H witch1,witch2 -rf rankfile -app appfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rankfile claimed host +n1 by index that is bigger than number of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocated hosts.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dellix7:16405] [[24080,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file ../../../../../orte/mca/rmaps/rank_file/rmaps_rank_file.c at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 422
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dellix7:16405] [[24080,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c at line 85
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dellix7:16405] [[24080,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file ../../../../orte/mca/plm/base/plm_base_launch_support.c at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 103
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dellix7:16405] [[24080,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file ../../../../../orte/mca/plm/rsh/plm_rsh_module.c at line 1001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jul 15, 2009 at 6:58 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Took a deeper look into this, and I think that your first guess  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When we changed hostfile and -host to be per-app-context options,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it became necessary for you to put that info in the appfile  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; itself. So try adding it there. What you would need in your  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appfile is the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 1 -H witch1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 1 -H witch2 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That should get you what you want.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 14, 2009, at 10:29 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No,  it's not working as I expect , unless I expect somthing  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrong .
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ( sorry for the long PATH, I needed to provide it )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $LD_LIBRARY_PATH=/hpc/home/USERS/lennyb/work/svn/ompi/trunk/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; build_x86-64/install/lib/ /hpc/home/USERS/lennyb/work/svn/ompi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/build_x86-64/install/bin/mpirun -np 2 -H witch1,witch2  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; witch1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; witch2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $LD_LIBRARY_PATH=/hpc/home/USERS/lennyb/work/svn/ompi/trunk/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; build_x86-64/install/lib/ /hpc/home/USERS/lennyb/work/svn/ompi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/build_x86-64/install/bin/mpirun -np 2 -H witch1,witch2 -app  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; appfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dellix7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dellix7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $cat appfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -np 1 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -np 1 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Jul 14, 2009 at 7:08 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Run it without the appfile, just putting the apps on the cmd line  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - does it work right then?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 14, 2009, at 10:04 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; additional info
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am running mpirun on hostA, and providing hostlist with hostB  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and hostC.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I expect that each application would run on hostB and hostC, but  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I get all of them running on hostA.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dellix7$cat appfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -np 1 hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -np 1 hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dellix7$mpirun -np 2 -H witch1,witch2 -app appfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dellix7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dellix7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Jul 14, 2009 at 4:59 PM, Ralph Castain &lt;rhc_at_open- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpi.org&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Strange - let me have a look at it later today. Probably  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something simple that another pair of eyes might spot.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 14, 2009, at 7:43 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Seems like connected problem:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I can't use rankfile with app, even after all those fixes  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ( working with trunk 1.4a1r21657).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This is my case :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $cat rankfile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 0=+n1 slot=0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 1=+n0 slot=0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $cat appfile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -np 1 hostname
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -np 1 hostname
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $mpirun -np 2 -H witch1,witch2 -rf rankfile -app appfile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Rankfile claimed host +n1 by index that is bigger than number  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of allocated hosts.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [dellix7:13414] [[10851,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file ../../../../../orte/mca/rmaps/rank_file/rmaps_rank_file.c  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; at line 422
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [dellix7:13414] [[10851,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file ../../../../orte/mca/rmaps/base/rmaps_base_map_job.c at  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; line 85
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [dellix7:13414] [[10851,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file ../../../../orte/mca/plm/base/plm_base_launch_support.c at  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; line 103
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [dellix7:13414] [[10851,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file ../../../../../orte/mca/plm/rsh/plm_rsh_module.c at line  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1001
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The problem is, that rankfile mapper tries to find an  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; appropriate host in the partial ( and not full ) hostlist.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any suggestions how to fix it?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Wed, May 13, 2009 at 1:55 AM, Ralph Castain &lt;rhc_at_open- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpi.org&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Okay, I fixed this today too....r21219
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On May 11, 2009, at 11:27 PM, Anton Starikov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Now there is another problem :)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You can try oversubscribe node. At least by 1 task.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If you hostfile and rank file limit you at N procs, you can ask  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun for N+1 and it wil be not rejected.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Although in reality there will be N tasks.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So, if your hostfile limit is 4, then &quot;mpirun -np 4&quot; and  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;mpirun -np 5&quot; both works, but in both cases there are only 4  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tasks. It isn't crucial, because there is nor real  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; oversubscription, but there is still some bug which can affect  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; something in future.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Anton Starikov.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On May 12, 2009, at 1:45 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This is fixed as of r21208.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks for reporting it!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On May 11, 2009, at 12:51 PM, Anton Starikov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Although removing this check solves problem of having more  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; slots in rankfile than necessary, there is another problem.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If I set rmaps_base_no_oversubscribe=1 then if, for example:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hostfile:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node01
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node01
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node02
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node02
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rankfile:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 0=node01 slot=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 1=node01 slot=0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 2=node02 slot=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 3=node02 slot=0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 4 ./something
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; complains with:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;There are not enough slots available in the system to satisfy  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the 4 slots
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that were requested by the application&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; but &quot;mpirun -np 3 ./something&quot; will work though. It works, when  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; you ask for 1 CPU less. And the same behavior in any case  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (shared nodes, non-shared nodes, multi-node)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If you switch off rmaps_base_no_oversubscribe, then it works  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and all affinities set as it requested in rankfile, there is no  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; oversubscription.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Anton.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On May 5, 2009, at 3:08 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ah - thx for catching that, I'll remove that check. It no  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; longer is required.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thx!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Tue, May 5, 2009 at 7:04 AM, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; According to the code it does cares.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $vi orte/mca/rmaps/rank_file/rmaps_rank_file.c +572
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ival = orte_rmaps_rank_file_value.ival;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; if ( ival &gt; (np-1) ) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; orte_show_help(&quot;help-rmaps_rank_file.txt&quot;, &quot;bad-rankfile&quot;,  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; true, ival, rankfile);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rc = ORTE_ERR_BAD_PARAM;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; goto unlock;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If I remember correctly, I used an array to map ranks, and  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; since the length of array is NP, maximum index must be less  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; than np, so if you have the number of rank &gt; NP, you have no  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; place to put it inside array.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;Likewise, if you have more procs than the rankfile specifies,  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; we map the additional procs either byslot (default) or bynode  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (if you specify that option). So the rankfile doesn't need to  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; contain an entry for every proc.&quot;  - Correct point.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 5/5/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote: Sorry Lenny,  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; but that isn't correct. The rankfile mapper doesn't care if the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rankfile contains additional info - it only maps up to the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; number of processes, and ignores anything beyond that number.  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So there is no need to remove the additional info.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Likewise, if you have more procs than the rankfile specifies,  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; we map the additional procs either byslot (default) or bynode  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (if you specify that option). So the rankfile doesn't need to  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; contain an entry for every proc.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Just don't want to confuse folks.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Tue, May 5, 2009 at 5:59 AM, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; maximum rank number must be less then np.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; if np=1 then there is only rank 0 in the system, so rank 1 is  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; invalid.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; please remove &quot;rank 1=node2 slot=*&quot; from the rankfile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mon, May 4, 2009 at 11:14 AM, Geoffroy Pignot &lt;geopignot_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi ,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I got the openmpi-1.4a1r21095.tar.gz tarball, but unfortunately  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; my command doesn't work
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cat rankf:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 0=node1 slot=*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 1=node2 slot=*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cat hostf:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node1 slots=2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node2 slots=2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun  --rankfile rankf --hostfile hostf  --host node1 -n 1  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hostname : --host node2 -n 1 hostname
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Error, invalid rank (1) in the rankfile (rankf)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file rmaps_rank_file.c at line 403
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file base/rmaps_base_map_job.c at line 86
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file base/plm_base_launch_support.c at line 86
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file plm_rsh_module.c at line 1016
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph, could you tell me if my command syntax is correct or  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; not ? if not, give me the expected one ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Geoffroy
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2009/4/30 Geoffroy Pignot &lt;geopignot_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Immediately Sir !!! :)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks again Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Geoffroy
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Message: 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Date: Thu, 30 Apr 2009 06:45:39 -0600
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    &lt;71d2d8cc0904300545v61a42fe1k50086d2704d0f7e6_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I believe this is fixed now in our development trunk - you can  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; download any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tarball starting from last night and give it a try, if you  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; like. Any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; feedback would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Apr 14, 2009, at 7:57 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ah now, I didn't say it -worked-, did I? :-)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Clearly a bug exists in the program. I'll try to take a look at  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it (if Lenny
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; doesn't get to it first), but it won't be until later in the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; week.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Apr 14, 2009, at 7:18 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I agree with you Ralph , and that 's what I expect from openmpi  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; but my
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; second example shows that it's not working
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cat hostfile.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; r011n002 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; r011n003 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cat rankfile.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 1=r011n003 slot=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1 hostname
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ### CRASHED
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; attempting to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; launch so we are aborting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; There may be more information reported by the environment  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (see
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; This may be because the daemon was unable to find all the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; libraries on the remote node. You may set your  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; have the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; location of the shared libraries on the remote nodes and  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; orterun noticed that the job aborted, but has no info as to  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Message: 4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Date: Tue, 14 Apr 2009 06:55:58 -0600
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Message-ID: &lt;F6290ADA-A196-43F0-A853-CBCB802D8D9C_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The rankfile cuts across the entire job - it isn't applied on an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; app_context basis. So the ranks in your rankfile must  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; correspond to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the eventual rank of each process in the cmd line.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately, that means you have to count ranks. In your  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; case, you
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; only have four, so that makes life easier. Your rankfile would  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; look
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; something like this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 0=r001n001 slot=0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 1=r001n002 slot=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 2=r001n001 slot=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 3=r001n002 slot=2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Apr 14, 2009, at 12:19 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; I agree that my examples are not very clear. What I want to  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; do is to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; launch a multiexes application (masters-slaves) and benefit  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; processor affinity.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Could you show me how to convert this command , using -rf  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; option
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; (whatever the affinity is)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; mpirun -n 1 -host r001n001 master.x options1  : -n 1 -host  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; r001n002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; master.x options2 : -n 1 -host r001n001 slave.x options3 : -n  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; host r001n002 slave.x options4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Thanks for your help
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Geoffroy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Message: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Date: Sun, 12 Apr 2009 18:26:35 +0300
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Message-ID:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;        &lt;453d39990904120826t2e1d1d33l7bb1fe3de65b5361_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; The first &quot;crash&quot; is OK, since your rankfile has ranks 0 and 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; defined,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; while n=1, which means only rank 0 is present and can be  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; allocated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; NP must be &gt;= the largest rank in rankfile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; What exactly are you trying to do ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; I tried to recreate your seqv but all I got was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; ~/work/svn/ompi/trunk/build_x86-64/install/bin/mpirun -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; hostfile.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; -rf rankfile.0 -n 1 hostname : -rf rankfile.1 -n 1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; [witch19:30798] mca: base: component_find: paffinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &quot;mca_paffinity_linux&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; uses an MCA interface that is not recognized (component MCA  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; v1.0.0 !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; It looks like opal_init failed for some reason; your parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; likely to abort. There are many reasons that a parallel  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; fail during opal_init; some of which are due to configuration  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; environment problems. This failure appears to be an internal  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; here's some additional information (which may only be  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  opal_carto_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; ../../orte/runtime/orte_init.c at line 78
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; ../../orte/orted/orted_main.c at line 344
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; A daemon (pid 11629) died unexpectedly with status 243 while
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; attempting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; There may be more information reported by the environment  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; This may be because the daemon was unable to find all the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; libraries on the remote node. You may set your  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; location of the shared libraries on the remote nodes and this  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; mpirun noticed that the job aborted, but has no info as to  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Lenny.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; On 4/10/09, Geoffroy Pignot &lt;geopignot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; Hi ,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; I am currently testing the process affinity capabilities of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; openmpi and I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; would like to know if the rankfile behaviour I will  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; describe below
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; is normal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; or not ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; cat hostfile.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; r011n002 slots=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; r011n003 slots=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; cat rankfile.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; rank 1=r011n003 slot=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ##################################################################################
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 2  hostname  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ### OK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; r011n002
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; r011n003
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ##################################################################################
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname :  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -n 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; ### CRASHED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; attempting to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; launch so we are aborting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; There may be more information reported by the environment  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (see
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; This may be because the daemon was unable to find all the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; libraries on the remote node. You may set your  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; have the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; location of the shared libraries on the remote nodes and  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; orterun noticed that the job aborted, but has no info as to  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; It seems that the rankfile option is not propagted to the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; second
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; command
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; line ; there is no global understanding of the ranking  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; inside a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; command.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ##################################################################################
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; Assuming that , I tried to provide a rankfile to each  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; command line:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; cat rankfile.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; cat rankfile.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; rank 0=r011n003 slot=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname :  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; rankfile.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; -n 1 hostname ### CRASHED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; *[r011n002:28778] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] Failing at address: 0x34
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 0] [0xffffe600]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; 0(orte_odls_base_default_get_add_procs_data+0x55d)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [0x5557decd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; 0(orte_plm_base_launch_apps+0x117)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [0x555842a7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 3] /tmp/HALMPI/openmpi-1.3.1/lib/openmpi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; mca_plm_rsh.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [0x556098c0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 4] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; [0x804aa27]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 5] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; [0x804a022]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 6] /lib/libc.so.6(__libc_start_main+0xdc)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; [0x9f1dec]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 7] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; [0x8049f71]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; Segmentation fault (core dumped)*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; I hope that I've found a bug because it would be very  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; important
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; for me to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; have this kind of capabiliy .
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; Launch a multiexe mpirun command line and be able to bind  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; my exes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; sockets together.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; Thanks in advance for your help
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; Geoffroy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; End of users Digest, Vol 1202, Issue 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; **************************************
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; End of users Digest, Vol 1218, Issue 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; **************************************
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9993/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9994.php">Steven Dale: "[OMPI users] Possible openmpi bug?"</a>
<li><strong>Previous message:</strong> <a href="9992.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9990.php">Mike Dubman: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9184.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
