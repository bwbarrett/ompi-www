<?
$subject_val = "Re: [OMPI devel] pointer_array";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 11:54:17 2007" -->
<!-- isoreceived="20071217165417" -->
<!-- sent="Mon, 17 Dec 2007 11:54:10 -0500" -->
<!-- isosent="20071217165410" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pointer_array" -->
<!-- id="ea86ce220712170854l7aee0f0et99ec85290f1cfddc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C38BD35D.B9BD%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] pointer_array<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 11:54:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2874.php">Ralph H Castain: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Previous message:</strong> <a href="2872.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16969"</a>
<li><strong>In reply to:</strong> <a href="2870.php">Ralph H Castain: "Re: [OMPI devel] pointer_array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2874.php">Ralph H Castain: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Reply:</strong> <a href="2874.php">Ralph H Castain: "Re: [OMPI devel] pointer_array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about this as a suggested compromise.
<br>
George, could you just do half the patch... where you leave orte alone,
<br>
and just move the ompi pointer array implementation down into opal.
<br>
That way, any new code can make use of it from opal, and only orte
<br>
would need to be adjusted later, after Ralph is done with his changes.
<br>
<p>On Dec 17, 2007 9:18 AM, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; It would require extensive modification as use of the pointer array has
</span><br>
<span class="quotelev1">&gt; spread over a wide range of the code base. I would really appreciate it if
</span><br>
<span class="quotelev1">&gt; we didn't do this right now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The differences are historic in nature - several years ago, the folks
</span><br>
<span class="quotelev1">&gt; working on the OMPI layer needed to insert some Fortran-specific limits and
</span><br>
<span class="quotelev1">&gt; type definitions into the opal_pointer_array code. Unfortunately, that
</span><br>
<span class="quotelev1">&gt; caused type conflicts across a swath of the ORTE code. After a ton of
</span><br>
<span class="quotelev1">&gt; discussion and debate, there was no way the OMPI folks could guarantee that
</span><br>
<span class="quotelev1">&gt; they wouldn't need to change those definitions again at some time into the
</span><br>
<span class="quotelev1">&gt; future - which would again force the ORTE layer to make major changes to
</span><br>
<span class="quotelev1">&gt; their code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition, the use of an int as the array index in the opal_pointer_array
</span><br>
<span class="quotelev1">&gt; raised concerns in the ORTE world as we really didn't want to pass generic
</span><br>
<span class="quotelev1">&gt; variable types between processes. At the time, we weren't sure if the index
</span><br>
<span class="quotelev1">&gt; in a pointer array was going to need to be passed somewhere in the future -
</span><br>
<span class="quotelev1">&gt; in fact, the code did pass it at the time in several cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we agreed to simply create separate code that, even though it duplicated
</span><br>
<span class="quotelev1">&gt; the functionality, ensured that the two could operate semi-independently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the intervening time, the OMPI folks seem to have been able to leave the
</span><br>
<span class="quotelev1">&gt; opal_pointer_array definitions pretty much alone. There have been a few
</span><br>
<span class="quotelev1">&gt; changes along the way, but nothing overwhelming. In addition, we have found
</span><br>
<span class="quotelev1">&gt; that the ORTE code no longer needs to pass the array index when sending an
</span><br>
<span class="quotelev1">&gt; object's data to a remote process - at least, this is true at the moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So making the change might be reasonable. If we are going to do that,
</span><br>
<span class="quotelev1">&gt; though, we need to ensure that all the functionality is replicated (there
</span><br>
<span class="quotelev1">&gt; are, I believe, a couple of extensions in the orte_pointer_array class), and
</span><br>
<span class="quotelev1">&gt; we should similarly review the other orte/opal class overlaps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, doing all this right now would be a disaster on the tmp branch
</span><br>
<span class="quotelev1">&gt; where we are revising ORTE. It would be much better to do it after that
</span><br>
<span class="quotelev1">&gt; branch merges to the trunk, or just make the change in the tmp branch first.
</span><br>
<span class="quotelev1">&gt; That branch makes much more extensive use of the orte_pointer_array object
</span><br>
<span class="quotelev1">&gt; than is in the trunk, and it would be a royal pain of conflicts to resolve
</span><br>
<span class="quotelev1">&gt; it - all for little, if any, gain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/17/07 6:35 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Adding RHC to the thread...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm guessing that the patch will have to be modified for the ORTE tmp
</span><br>
<span class="quotelev2">&gt; &gt; branch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 16, 2007, at 6:18 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Right, I wonder why it didn't show in the patch file. Anyway, it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; completely remove the orte_pointer_array.[ch] as well as the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi_pointer_array.[ch] file.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    george.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Dec 16, 2007, at 12:01 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The patch looks good to my eyeballs, though I've not done any
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; testing with it.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I presume a follow on patch would remove the orte_pointer_array.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [ch] files?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Dec 15, 2007 4:01 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I have a patch that unify the pointer array implementations into
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; just
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; one. Right now, we have 2 pointer array implementations: one for
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ORTE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; and one for OMPI. The differences are small and mostly insignificant
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (there is no way to add more than 2^31 elements in the pointer array
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; anyway). The following patch propose to merge these two pointer
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; array
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; into one, implemented in OPAL (and called opal_pointer_array).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; If nobody has complained before Wednesday noon I'll commit the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; patch.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    george.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2874.php">Ralph H Castain: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Previous message:</strong> <a href="2872.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16969"</a>
<li><strong>In reply to:</strong> <a href="2870.php">Ralph H Castain: "Re: [OMPI devel] pointer_array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2874.php">Ralph H Castain: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Reply:</strong> <a href="2874.php">Ralph H Castain: "Re: [OMPI devel] pointer_array"</a>
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
