<?
$subject_val = "Re: [OMPI devel] Why is floating point number used for locality";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 28 14:26:49 2016" -->
<!-- isoreceived="20160428182649" -->
<!-- sent="Thu, 28 Apr 2016 20:26:46 +0200" -->
<!-- isosent="20160428182646" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Why is floating point number used for locality" -->
<!-- id="572255E6.4050906_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDiO3Ej24Z65nk=mPq_Z7HC8y9X5hkz9OJGv+pZQOAsSsA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Why is floating point number used for locality<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-28 14:26:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18832.php">Jeff Squyres (jsquyres): "[OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<li><strong>Previous message:</strong> <a href="18830.php">dpchoudh .: "[OMPI devel] Why is floating point number used for locality"</a>
<li><strong>In reply to:</strong> <a href="18830.php">dpchoudh .: "[OMPI devel] Why is floating point number used for locality"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It comes from the hwloc API. It doesn't use integers because some users
<br>
want to provide their own distance matrix that was generated by
<br>
benchmarks. Also we normalize the matrix to have latency 1 on the
<br>
diagonal (for local memory access latency ) and that causes non-diagonal
<br>
items not to be integers anymore (Linux and ACPI SLIT report 10 for
<br>
local memory latency and custom values &gt; 10 for non-local latency).
<br>
<p>I am actually revisiting that hwloc API right now. I am open to comments
<br>
and suggestion about all this.
<br>
<p>By the way, I talked to Jeff about this recently: the BTL should use the
<br>
distance in the hwloc tree first, instead of these latency values. I'll
<br>
try to send patches one day.
<br>
<p>Brice
<br>
<p><p><p>Le 28/04/2016 20:00, dpchoudh . a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am wondering about the rationale of using floating point numbers for
</span><br>
<span class="quotelev1">&gt; calculating 'distances' in the openib BTL. Is it because some
</span><br>
<span class="quotelev1">&gt; distances can be infinite and there is no (conventional) way to
</span><br>
<span class="quotelev1">&gt; represent infinity using integers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your comments
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev1">&gt; quit ageing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18830.php">http://www.open-mpi.org/community/lists/devel/2016/04/18830.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18831/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18832.php">Jeff Squyres (jsquyres): "[OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<li><strong>Previous message:</strong> <a href="18830.php">dpchoudh .: "[OMPI devel] Why is floating point number used for locality"</a>
<li><strong>In reply to:</strong> <a href="18830.php">dpchoudh .: "[OMPI devel] Why is floating point number used for locality"</a>
<!-- nextthread="start" -->
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