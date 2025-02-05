<?
$subject_val = "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 12:43:43 2014" -->
<!-- isoreceived="20141016164343" -->
<!-- sent="Thu, 16 Oct 2014 12:43:38 -0400" -->
<!-- isosent="20141016164338" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters" -->
<!-- id="543FF5BA.3010209_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AAFC4113-4331-43BA-BF62-ADC14B623596_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-16 12:43:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25509.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>Previous message:</strong> <a href="25507.php">Gus Correa: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>In reply to:</strong> <a href="25503.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25510.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Reply:</strong> <a href="25510.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Reply:</strong> <a href="25526.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
<p>Yes, I know the process placement features are powerful.
<br>
They were already very good in 1.6, even in 1.4,
<br>
and I just tried the new 1.8
<br>
&quot;-map-by l2cache&quot; (works nicely on Opteron 6300).
<br>
<p>Unfortunately I couldn't keep track, test, and use the 1.7 series.
<br>
I did that in the previous &quot;odd/new feature&quot; series (1.3, 1.5).
<br>
However, my normal workload require that
<br>
I focus my attention on the &quot;even/stable&quot; series
<br>
(less fun, more production).
<br>
Hence I hopped directly from 1.6 to 1.8,
<br>
although I read a number of mailing list postings about the new
<br>
style of process placement.
<br>
<p>Pestering you again about documentation (last time for now):
<br>
The mpiexec man page also seems to need an update.
<br>
That is probably the first place people look for information
<br>
about runtime features.
<br>
For instance, the process placement examples still
<br>
use deprecated parameters and mpiexec options:
<br>
-bind-to-core, rmaps_base_schedule_policy, orte_process_binding, etc.
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p>On 10/15/2014 11:10 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 15, 2014, at 11:46 AM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you Ralph and Jeff for the help!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Glad to hear the segmentation fault is reproducible and will be fixed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In any case, one can just avoid the old parameter name
</span><br>
<span class="quotelev2">&gt;&gt; (rmaps_base_schedule_policy),
</span><br>
<span class="quotelev2">&gt;&gt; and use instead the new parameter name
</span><br>
<span class="quotelev2">&gt;&gt; (rmaps_base_mapping_policy)
</span><br>
<span class="quotelev2">&gt;&gt; without any problem in OMPI 1.8.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fix is in the nightly 1.8 tarball - I'll release a 1.8.4 soon to cover
</span><br>
<span class="quotelev1">&gt; the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Ralph for sending the new (OMPI 1.8)
</span><br>
<span class="quotelev2">&gt;&gt; parameter names for process binding.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My recollection is that sometime ago somebody (Jeff perhaps?)
</span><br>
<span class="quotelev2">&gt;&gt; posted here a link to a presentation (PDF or PPT) explaining the
</span><br>
<span class="quotelev2">&gt;&gt; new style of process binding, but I couldn't find it in the
</span><br>
<span class="quotelev2">&gt;&gt; list archives.
</span><br>
<span class="quotelev2">&gt;&gt; Maybe the link could be part of the FAQ (if not already there)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think it is, but I'll try to add it over the next day or so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Open MPI runtime environment is really great.
</span><br>
<span class="quotelev2">&gt;&gt; However, to take advantage of it one often has to do parameter guessing,
</span><br>
<span class="quotelev2">&gt;&gt; and to do time consuming tests by trial and error,
</span><br>
<span class="quotelev2">&gt;&gt; because the main sources of documentation are
</span><br>
<span class="quotelev2">&gt;&gt; the terse output of ompi_info, and several sparse
</span><br>
<span class="quotelev2">&gt;&gt; references in the FAQ.
</span><br>
<span class="quotelev2">&gt;&gt; (Some of them outdated?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In addition, the runtime environment has evolved over time,
</span><br>
<span class="quotelev2">&gt;&gt; which is certainly a good thing.
</span><br>
<span class="quotelev2">&gt;&gt; However, along with this evolution, several runtime parameters
</span><br>
<span class="quotelev2">&gt;&gt; changed both name and functionality, new ones were introduced,
</span><br>
<span class="quotelev2">&gt;&gt; old ones were deprecated, which can be somewhat confusing,
</span><br>
<span class="quotelev2">&gt;&gt; and can lead to an ineffective use of the runtime environment.
</span><br>
<span class="quotelev2">&gt;&gt; (In 1.8.3 I was using several deprecated parameters from 1.6.5
</span><br>
<span class="quotelev2">&gt;&gt; that seem to be silently ignored at runtime.
</span><br>
<span class="quotelev2">&gt;&gt; I only noticed the problem because that segmentation fault happened.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know asking for thorough documentation is foolish,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not really - it is something we need to get better about :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but I guess a simple table of runtime parameter names and valid values
</span><br>
<span class="quotelev2">&gt;&gt; in the FAQ, maybe sorted by their purpose/function, along with a few
</span><br>
<span class="quotelev2">&gt;&gt; examples of use, could help a lot.
</span><br>
<span class="quotelev2">&gt;&gt; Some of this material is now spread across several FAQ, but not so
</span><br>
<span class="quotelev2">&gt;&gt; easy to find/compare.
</span><br>
<span class="quotelev2">&gt;&gt; That doesn't need to be a comprehensive table, but commonly used
</span><br>
<span class="quotelev2">&gt;&gt; items like selecting the btl, selecting interfaces,
</span><br>
<span class="quotelev2">&gt;&gt; dealing with process binding,
</span><br>
<span class="quotelev2">&gt;&gt; modifying/enriching the stdout/sterr output
</span><br>
<span class="quotelev2">&gt;&gt; (tagging output, increasing verbosity, etc),
</span><br>
<span class="quotelev2">&gt;&gt; probably have their place there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah, we fell down on this one. The changes were announced with each
</span><br>
<span class="quotelev1">&gt; step in the 1.7 series, but if you step from 1.6 directly to 1.8, you'll
</span><br>
<span class="quotelev1">&gt; get caught flat-footed. We honestly didn't think of that case, and so we
</span><br>
<span class="quotelev1">&gt; mentally assumed that &quot;of course people have been following the series -
</span><br>
<span class="quotelev1">&gt; they know what happened&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You know what they say about those who &quot;assume&quot; :-/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try to get something into the FAQ about the entire new mapping,
</span><br>
<span class="quotelev1">&gt; ranking, and binding system. It is actually VERY powerful, allowing you
</span><br>
<span class="quotelev1">&gt; to specify pretty much any placement pattern you can imagine and bind it
</span><br>
<span class="quotelev1">&gt; to whatever level you desire. It was developed in response to requests
</span><br>
<span class="quotelev1">&gt; from researchers who wanted to explore application performance versus
</span><br>
<span class="quotelev1">&gt; placement strategies - but we provided some simplified options to
</span><br>
<span class="quotelev1">&gt; support more common usage patterns.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/15/2014 11:12 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We talked off-list -- fixed this on master and just filed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi-release/pull/33">https://github.com/open-mpi/ompi-release/pull/33</a> to get this into the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8 branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 14, 2014, at 7:39 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 14, 2014, at 5:32 PM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear Open MPI fans and experts
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is just a note in case other people run into the same problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I just built Open MPI 1.8.3.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As usual I put my old settings on openmpi-mca-params.conf,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with no further thinking.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Then I compiled the connectivity_c.c program and tried
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to run it with mpiexec.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That is a routine that never failed before.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Bummer!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've got a segmentation fault right away.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Strange  - it works fine from the cmd line:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 07:27:04  (v1.8) /home/common/openmpi/ompi-release$ mpirun -n 1 -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rmaps_base_schedule_policy core hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A deprecated MCA variable value was specified in the environment or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on the command line.  Deprecated MCA variables should be avoided;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; they may disappear in future releases.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Deprecated variable: rmaps_base_schedule_policy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  New variable:        rmaps_base_mapping_policy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bend001
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HOWEVER, I can replicate that behavior when it is in the default
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; params file! I don't see the immediate cause of the difference, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will investigate.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; After some head scratching, checking my environment, etc,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I thought I might have configured OMPI incorrectly.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hence, I tried to get information from ompi_info.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Oh well, ompi_info also segfaulted!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It took me a while to realize that the runtime parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configuration file was the culprit.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I inserted the runtime parameter settings one by one,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the segfault came with this one:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rmaps_base_schedule_policy = core
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ompi_info (when I got it to work) told me that the parameter above
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is now a deprecated synonym of:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rmaps_base_mapping_policy = core
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In any case, the old synonym doesn't work and makes ompi_info and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec segfault (and I'd guess anything else that requires the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI runtime components).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Only the new parameter name works.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That's because the segfault is happening in the printing of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; deprecation warning.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am also missing in the ompi_info output the following
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (OMPI 1.6.5) parameters (not reported by ompi_info --all --all):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) orte_process_binding  ===&gt; hwloc_base_binding_policy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) orte_report_bindings   ===&gt; hwloc_base_report_bindings
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3) opal_paffinity_alone  ===&gt; gone, use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc_base_binding_policy=none if you don't want any binding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Are they gone forever?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Are there replacements for them, with approximately the same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; functionality?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there a list comparing the new (1.8) vs. old (1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI runtime parameters, and/or any additional documentation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; about the new style of OMPI 1.8 runtime parameters?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Will try to add this to the web site
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Since there seems to have been a major revamping of the OMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; runtime parameters, that would be a great help.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25497.php">http://www.open-mpi.org/community/lists/users/2014/10/25497.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25498.php">http://www.open-mpi.org/community/lists/users/2014/10/25498.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this
</span><br>
<span class="quotelev2">&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2014/10/25501.php">http://www.open-mpi.org/community/lists/users/2014/10/25501.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25503.php">http://www.open-mpi.org/community/lists/users/2014/10/25503.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25509.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>Previous message:</strong> <a href="25507.php">Gus Correa: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>In reply to:</strong> <a href="25503.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25510.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Reply:</strong> <a href="25510.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Reply:</strong> <a href="25526.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
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
