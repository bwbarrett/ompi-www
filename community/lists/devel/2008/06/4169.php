<?
$subject_val = "Re: [OMPI devel] autogen error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 11:19:00 2008" -->
<!-- isoreceived="20080619151900" -->
<!-- sent="Thu, 19 Jun 2008 17:21:28 +0200" -->
<!-- isosent="20080619152128" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autogen error" -->
<!-- id="485A7978.5090304_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="485A7715.8020200_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autogen error<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 11:21:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4170.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<li><strong>Previous message:</strong> <a href="4168.php">Leonardo Fialho: "Re: [OMPI devel] autogen error"</a>
<li><strong>In reply to:</strong> <a href="4168.php">Leonardo Fialho: "Re: [OMPI devel] autogen error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4170.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is the versions that I'm using:
<br>
<p>$ aclocal --version
<br>
aclocal (GNU automake) 1.10.1
<br>
...
<br>
$ autoheader --version
<br>
autoheader (GNU Autoconf) 2.62
<br>
...
<br>
$ autoconf --version
<br>
autoconf (GNU Autoconf) 2.62
<br>
...
<br>
$ autom4te --version
<br>
autom4te (GNU Autoconf) 2.62
<br>
...
<br>
$ libtoolize --version
<br>
libtoolize (GNU libtool) 2.2.4
<br>
...
<br>
$ automake --version
<br>
automake (GNU automake) 1.10.1
<br>
...
<br>
<p>Leonardo
<br>
<p>Leonardo Fialho escribi&#243;:
<br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, with a fresh checkout... well, it can be some error in my aclocal 
</span><br>
<span class="quotelev1">&gt; files, I just updated it today, but I think I did it correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leonardo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt; That's a weird one -- that file (mca_no_configure_components.m4) is 
</span><br>
<span class="quotelev2">&gt;&gt; automatically generated by autogen.sh.  I can't think offhand of how 
</span><br>
<span class="quotelev2">&gt;&gt; it could be bogus.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you have a fresh tree checkout and run autogen, is the problem 
</span><br>
<span class="quotelev2">&gt;&gt; repeatable?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 19, 2008, at 10:29 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anybody knows what is this error?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I think that I'm using last version of M4, autoconf, automake 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and libtool, I think...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Running GNU tools
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] autom4te --language=m4sh ompi_get_version.m4sh -o 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_get_version.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] libtoolize --automake --copy --ltdl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** Adjusting libltdl for OMPI :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ++ patching for argz bugfix in libtool 1.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -- your libtool doesn't need this! yay!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ++ patching 64-bit OS X bug in ltmain.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -- your libtool doesn't need this! yay!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ++ RTLD_GLOBAL in libltdl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -- your libltdl doesn't need this! yay!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grep: configure: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ++ patching for ifort (LT 2.2.0-4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] aclocal -I config
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/bin/m4:config/mca_no_configure_components.m4:9: ERROR: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; end of file in string
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autom4te: /usr/local/bin/m4 failed with exit status: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aclocal: autom4te failed with exit status: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that the execution of &quot;aclocal -I config&quot; has failed.  See 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; above for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the specific error message that caused it to abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax: +34-93-581-2478
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4170.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<li><strong>Previous message:</strong> <a href="4168.php">Leonardo Fialho: "Re: [OMPI devel] autogen error"</a>
<li><strong>In reply to:</strong> <a href="4168.php">Leonardo Fialho: "Re: [OMPI devel] autogen error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4170.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
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