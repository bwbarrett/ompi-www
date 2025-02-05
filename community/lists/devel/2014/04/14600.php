<?
$subject_val = "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 18:35:07 2014" -->
<!-- isoreceived="20140424223507" -->
<!-- sent="Thu, 24 Apr 2014 18:35:05 -0400" -->
<!-- isosent="20140424223505" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk" -->
<!-- id="CAMJJpkWc0ZxNu8LJuZQ90uvSi_DoLHiW1vxySUgCAMydgFfQow_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B584560D-B5F8-4380-BE6E-37A8A02995BB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-24 18:35:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14601.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Previous message:</strong> <a href="14599.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<li><strong>In reply to:</strong> <a href="14599.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15072.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem was not in the start but in the wait (hint: the status is
<br>
set in the wait). The difference I guess is r27880, which seems not to
<br>
be in the 1.8.
<br>
<p>So, the 1.8 is not returning the correct status for persistent
<br>
inactive requests, but it does the right thing for MPI_PROC_NULL bound
<br>
requests.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, Apr 24, 2014 at 6:19 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; George --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea why it isn't failing on the v1.8 branch?  The only major difference I see between mpi/c/start.c between trunk and v1.8 is your change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 24, 2014, at 2:08 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r31524 is fixing this corner case. The problem was that persistent
</span><br>
<span class="quotelev2">&gt;&gt; request with MPI_RPOC_NULL were never activated, so the wait* function
</span><br>
<span class="quotelev2">&gt;&gt; was taking the if corresponding to inactive requests.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Apr 24, 2014 at 12:14 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is attached an oversimplified version of the MPI_Recv_init_null_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intel test suite.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the test works fine with v1.6, v1.7 and v1.8 branches but fails with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i wonder wether the bug is in OpenMPI or the test itself.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on one hand, we could consider there is a bug in OpenMPI :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; status.MPI_SOURCE should be MPI_PROC_NULL since we explicitly posted a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recv request with MPI_PROC_NULL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the other hand, (mpi specs, chapter 3.7.3 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/3475">https://svn.open-mpi.org/trac/ompi/ticket/3475</a>)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we could consider the returned value is not significant, and hence
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Wait should return an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; empty status (and empty status has source=MPI_ANY_SOURCE per the MPI specs).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for what it's worth, this test is a success with mpich (e.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; status.MPI_SOURCE is MPI_PROC_NULL).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what is the correct interpretation of the MPI specs and what should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g. fix OpenMPI or fix/skip the test ?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14589.php">http://www.open-mpi.org/community/lists/devel/2014/04/14589.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14596.php">http://www.open-mpi.org/community/lists/devel/2014/04/14596.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14599.php">http://www.open-mpi.org/community/lists/devel/2014/04/14599.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14601.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Previous message:</strong> <a href="14599.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<li><strong>In reply to:</strong> <a href="14599.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15072.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
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
