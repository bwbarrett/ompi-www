<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 11:46:21 2015" -->
<!-- isoreceived="20150903154621" -->
<!-- sent="Thu, 3 Sep 2015 15:46:18 +0000" -->
<!-- isosent="20150903154618" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="8CCB4EE2-6093-4CC0-B6E2-61639A2F16A1_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5tierTA4---50ZQpVR4AqVVEjpCRBobkx5kHRHw6PtvOg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0 issue<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 11:46:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17940.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17938.php">Ralph Castain: "[OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>In reply to:</strong> <a href="17937.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17940.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17940.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and I just chatted about this on the phone.  I think I understand his position better now.
<br>

<br>
Just to be clear/put some context in this conversation:
<br>

<br>
1. PSM (aka &quot;PSM1&quot;) supports TrueScale Intel networks
<br>
2. PSM2 supports OmniScale Intel networks
<br>

<br>
------
<br>

<br>
The following three solutions are more-or-less equivalent:
<br>

<br>
a. add &quot;mtl=^psm2&quot; in the mca-params.conf file (George's proposal)
<br>
b. configure --without-psm2 (similar to George's proposal)
<br>
c. we release 10.0.1 with no PSM2 MTL (Ralph's proposal)
<br>

<br>
In all 3 cases, the OmniScale end user will not have support for their network (and will likely fall back to TCP?).  TrueScale users are unaffected.
<br>

<br>
Technically, there's a 4th solution (proposed by Red Hat): the distro provides 2 different Open MPI installations -- one for (everything+PSM1), another for (everything+PSM2).  I agree that this is (very) undesirable.  In this case, *all* users are penalized -- not just TrueScale/OmniScale users -- because all users will now wonder &quot;Which Open MPI should I use?&quot; (even if they're not TS/OS users, and it doesn't matter which one they use, they still have to expend unnecessary mental energy trying to understand why there are two, and which they should use).  Meh.
<br>

<br>
Hence, we're back to the three possible &quot;more-or-less equivalent&quot; solutions: a, b, or c.  I say &quot;more-or-less&quot; because there *is* a semantic difference between a/b and c:
<br>

<br>
1. For a/b: packagers are responsible for the solution, and also responsible for *documenting* the solution (so that Omniscale users can figure out why they are getting lousy performance).
<br>
2. For c: Open MPI is responsible for the solution; we'll likely note in NEWS that PSM2 support was removed.
<br>

<br>
Hence, for the &quot;let's release 1.10.1 without PSM2&quot; solution, users have a (potentially) easier way of figuring out why they're not getting good performance.
<br>

<br>
That being said:
<br>

<br>
1. I'm not 100% convinced that users will go to the NEWS file to figure out why they're not getting good performance.  True, it's our officially-sanctioned method for publishing information to users, but I don't think that it's the first place that comes to mind when you're diagnosing a performance problem.
<br>

<br>
2. It seems like we have handled this kind of situation differently in the past.  
<br>

<br>
2a. E.g., when we had the hcol/ml conflict, we asked Mellanox for a solution.  They promised to release a new libhcol that fixed the problem, and in the meantime, told their customers to get Mellanox Open MPI from mellanox.com that immediately fixed the problem.
<br>

<br>
2b. Similarly, Cisco distributed its own Cisco Open MPI when we wanted to have libfabric support in the Open MPI v1.8.x series.
<br>

<br>
2c. This case is not entirely the same as the above two examples, but I think it's similar in spirit: a distro is trying to be all-inclusive with other freely-distributed software in that distro (i.e., both PSM1 and PSM2), and a vendor-specific issue is causing a problem with that plan.
<br>

<br>
3. I therefore think we should take the same approach that we have taken with other vendors in the past:
<br>

<br>
3a. Red Hat (and other packagers) can do whatever they need to do to package Open MPI 1.10.0.  In this case, Red Hat is asking our advice as to how to package it (because they include both PSM1 and PSM2 support in their distro, and this creates a conflict in Open MPI).
<br>

<br>
==&gt; My $0.02: we should tell Red Hat to build --without-psm2, because then users can see that &quot;ompi_info | grep psm2&quot; will be empty.  That's a dead giveaway that that Open MPI installation has no PSM2 support.
<br>

<br>
3b. Intel can support its customers by having an &quot;Intel Open MPI&quot; distribution (or whatever they want to name it, just as long as it is not named plan/vanilla &quot;Open MPI&quot;) that is configured/built to support both PSM1/PSM2 via their normal software distribution mechanism.
<br>

<br>
3c. If there's some solution Intel would like to push upstream to the Open MPI community, great -- it can go through the normal review process and be accepted upstream (i.e., just like we work every day).  That solution can then be included in future releases.
<br>

<br>
How does that sound?
<br>

<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; On Sep 3, 2015, at 10:48 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if I correctly read between the lines of your second point, omnipath (PSM2) is working out of the box. I am not sure this is the case, and/or my extrapolation might be incorrect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if I understood correctly, psm2 is a new feature.
</span><br>
<span class="quotelev1">&gt; from a distro point of view, that could be a new package (known not to support PSM), or a mpirun-psm2 wrapper, or a release note (e.g. use --mca mtl ^psm or a psm2 param file)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I still do not get how removing PSM2 makes things better
</span><br>
<span class="quotelev1">&gt; (and the same result can be achieved by configuring with --without-psm2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday, September 3, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I guess I didn&#226;&#128;&#153;t make it clear in my prior comment, so let me try again. I understand about dlopen and the fix that George proposed - we had internally discussed this as well. However, the questions that raises are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. how does the distro (Michal) decide which PSM module to disable by default in their package?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. how does the user &#226;&#128;&#156;discover&#226;&#128;&#157; that their fabric has automatically been disabled, especially since this has never been the case before?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ll raise the procedural question at our next telecon. I certainly take no pleasure out of generating releases, so if we have a better solution, I&#226;&#128;&#153;m all for it!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 3, 2015, at 5:55 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I agree with what George says.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; AFAIK, Red Hat builds Open MPI support for dlopen, so the config file option is probably suitable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, I have to admit that I resent the fact that PSM's poor upgrade path design is forcing both the Open MPI and libfabric communities to have similar confusing conversations (e.g., see <a href="https://github.com/ofiwg/libfabric/issues/1258#issuecomment-137426271">https://github.com/ofiwg/libfabric/issues/1258#issuecomment-137426271</a>).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Specifically: because of the design of PSM1/PSM2, both Open MPI and libfabric will have to adjust their configury and use dlopen/function pointer indirection to &quot;solve&quot; the problem of supporting both PSM1 and PSM2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does that seem weird to anyone else?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; IMNSHO, if you have to have extremely confusing conversations in multiple software communities explaining your configury, function-pointer-indirection code (i.e., PR <a href="https://github.com/ofiwg/libfabric/pull/1259">https://github.com/ofiwg/libfabric/pull/1259</a>), compilation, and linking scheme to upgrade to a new library, you're doing it wrong.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Sep 3, 2015, at 7:19 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Michael,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I might have missed some context when proposing this solution. As Gilles suggested if you build Open MPI without support for dlopen (configure option --disable-dlopen) this simple solution will not work because the symbol conflict issue is generated deep inside the constructors of the 2 libraries.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yes, the &quot;mtl = ^psm&quot; (or ^psm2 depending on which one you want to disable) should go in the openmpi-mca-params.conf that gets installed in the $(sysconfigdir).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; George.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Thu, Sep 3, 2015 at 5:14 AM, Michal Schmidt &lt;mschmidt_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [I apologize for not threading the email properly. I was not subscribed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; before and found the conversation in the web archive.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am the one who discovered the PSM vs. PSM2 library conflict and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; proposed the temporary workaround of having two builds of the openmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; package.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 3. Except if the distro builds OMPI statically, I see no reason to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; have 2 build of OMPI due to conflicting symbols between two shared
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; libraries that OMPI MCA load willingly. Why a simple &quot;mtl = ^psm&quot; in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the OMPI system wide configuration file is not enough to solve the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; issue?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you for this suggestion. It would go into openmpi-mca-params.conf,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; right? I will try it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Michal
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17927.php">http://www.open-mpi.org/community/lists/devel/2015/09/17927.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17928.php">http://www.open-mpi.org/community/lists/devel/2015/09/17928.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17931.php">http://www.open-mpi.org/community/lists/devel/2015/09/17931.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17933.php">http://www.open-mpi.org/community/lists/devel/2015/09/17933.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17937.php">http://www.open-mpi.org/community/lists/devel/2015/09/17937.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17940.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17938.php">Ralph Castain: "[OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>In reply to:</strong> <a href="17937.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17940.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17940.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
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
