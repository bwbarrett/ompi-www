<?
$subject_val = "Re: [hwloc-users] Zero cache line size on Power7?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  4 08:48:04 2013" -->
<!-- isoreceived="20130304134804" -->
<!-- sent="Mon, 4 Mar 2013 08:47:59 -0500" -->
<!-- isosent="20130304134759" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Zero cache line size on Power7?" -->
<!-- id="CADKQjjc2_1jz3yzmZs6yohxAPJehk-6DLANBybBSOyXU8J5GZg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="512E8688.1030708_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Zero cache line size on Power7?<br>
<strong>From:</strong> Erik Schnetter (<em>schnetter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-04 08:47:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0880.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/02/0878.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/02/0878.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0880.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<li><strong>Reply:</strong> <a href="0880.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice
<br>
<p>bash-3.2$
<br>
configs/sim-debug/scratch/build/hwloc/hwloc-1.7a1r5312/tests/linux/hwloc-gather-topology
<br>
configs/sim-debug/scratch/build/hwloc/hwloc-1.7a1r5312/tests/linux/hwloc-gather-topology[37]:
<br>
shift: bad number
<br>
<p>No tarball is generated.
<br>
<p>-erik
<br>
<p><p><p>On Wed, Feb 27, 2013 at 5:19 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  I think I've seen cases where the device-tree contains 0 for such line
</span><br>
<span class="quotelev1">&gt; sizes.
</span><br>
<span class="quotelev1">&gt; I guess we should document that the line size is 0 means unknown.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send the tarball generated by hwloc-gather-topology ? (send it
</span><br>
<span class="quotelev1">&gt; only to, in a private email)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 27/02/2013 23:11, Erik Schnetter a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am running hwloc 1.7a1r5312 on a Power7 architecture. I find there a
</span><br>
<span class="quotelev1">&gt; level 2 cache with a cacheline size of 0. Is this to be expected? The
</span><br>
<span class="quotelev1">&gt; documentation doesn't say that determining the cacheline size may fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I query the cache parameters from my application with these results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Cache (unknown name) has type &quot;data&quot; depth 1
</span><br>
<span class="quotelev1">&gt;    size 32768 linesize 128 associativity 8 stride 4096
</span><br>
<span class="quotelev1">&gt; Cache (unknown name) has type &quot;unified&quot; depth 2
</span><br>
<span class="quotelev1">&gt;    size 262144 linesize 0 associativity 8 stride 32768
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing listhwloc-users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Erik Schnetter &lt;schnetter_at_[hidden]&gt;
<a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0879/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0880.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/02/0878.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/02/0878.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0880.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<li><strong>Reply:</strong> <a href="0880.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
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
