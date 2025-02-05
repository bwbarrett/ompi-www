<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 06:10:20 2016" -->
<!-- isoreceived="20160506101020" -->
<!-- sent="Fri, 6 May 2016 03:10:15 -0700" -->
<!-- isosent="20160506101015" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)" -->
<!-- id="CAAvDA16HSVZ7HwMvtoEvjBhSnZ8wuiSVgJ8wCkDpfED4UCNzag_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="458107f4-1e25-6937-bbb5-e8f0e2fb79ba_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 06:10:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18927.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18925.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)"</a>
<li><strong>In reply to:</strong> <a href="18925.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>I am testing and will follow-up in the PR.
<br>
<p>-Paul
<br>
<p>On Thu, May 5, 2016 at 11:02 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you please give a try to
</span><br>
<span class="quotelev1">&gt; <a href="https://patch-diff.githubusercontent.com/raw/open-mpi/ompi/pull/1643.patch">https://patch-diff.githubusercontent.com/raw/open-mpi/ompi/pull/1643.patch</a>
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/3/2016 2:21 PM, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is NOT a new issue, but I wanted to mention it explicitly once again
</span><br>
<span class="quotelev1">&gt; since no progress has been made since I first reported to problem in
</span><br>
<span class="quotelev1">&gt; 1.8.6rc1 (about 1 year ago).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Though the directory name and line numbers have changed, the error
</span><br>
<span class="quotelev1">&gt; reported in
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/devel/2015/05/17449.php">https://www.open-mpi.org/community/lists/devel/2015/05/17449.php</a> is still
</span><br>
<span class="quotelev1">&gt; present in the 2.0.0rc2 tarball, and prevents building on OpenBSD-5.7
</span><br>
<span class="quotelev1">&gt; unless one configures with --disable-io-romio:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio
</span><br>
<span class="quotelev1">&gt; -I./adio/include -DOMPI_BUILDING=1
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/../../../../..
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/../../../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I./../../../../../opal/include -I./../../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/adio/include
</span><br>
<span class="quotelev1">&gt; -I./include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/include
</span><br>
<span class="quotelev1">&gt; -I./mpi-io
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/mpi-io
</span><br>
<span class="quotelev1">&gt; -I./adio/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/adio/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/BLD/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt; -g -finline-functions -fno-strict-aliasing -pthread -D__EXTENSIONS__
</span><br>
<span class="quotelev1">&gt; -DHAVE_ROMIOCONF_H -I./include -MT adio/common/ad_fstype.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; adio/common/.deps/ad_fstype.Tpo -c
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/adio/common/ad_fstype.c
</span><br>
<span class="quotelev1">&gt;  -fPIC -DPIC -o adio/common/.libs/ad_fstype.o
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/adio/common/ad_fstype.c:
</span><br>
<span class="quotelev1">&gt; In function 'ADIO_FileSysType_fncall':
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/adio/common/ad_fstype.c:358:
</span><br>
<span class="quotelev1">&gt; error: 'struct statfs' has no member named 'f_type'
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/adio/common/ad_fstype.c:382:
</span><br>
<span class="quotelev1">&gt; error: 'struct statfs' has no member named 'f_type'
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/adio/common/ad_fstype.c:403:
</span><br>
<span class="quotelev1">&gt; error: 'struct statfs' has no member named 'f_type'
</span><br>
<span class="quotelev1">&gt; *** Error 1 in ompi/mca/io/romio314/romio (Makefile:3548
</span><br>
<span class="quotelev1">&gt; 'adio/common/ad_fstype.lo')
</span><br>
<span class="quotelev1">&gt; *** Error 1 in ompi/mca/io/romio314/romio (Makefile:4409 'all-recursive')
</span><br>
<span class="quotelev1">&gt; *** Error 1 in ompi/mca/io/romio314 (Makefile:1954 'all-recursive')
</span><br>
<span class="quotelev1">&gt; *** Error 1 in ompi (Makefile:3352 'all-recursive')
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                           &lt;PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18891.php">http://www.open-mpi.org/community/lists/devel/2016/05/18891.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18925.php">http://www.open-mpi.org/community/lists/devel/2016/05/18925.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18926/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18927.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18925.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)"</a>
<li><strong>In reply to:</strong> <a href="18925.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)"</a>
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
