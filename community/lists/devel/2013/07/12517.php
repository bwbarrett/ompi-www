<?
$subject_val = "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  1 13:01:39 2013" -->
<!-- isoreceived="20130701170139" -->
<!-- sent="Mon, 1 Jul 2013 17:01:31 +0000" -->
<!-- isosent="20130701170131" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A1AC33511_at_MTIDAG02.mtl.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAHYyVz7VXETRSUBTZLfsrmoJWtcQi-krSoH6f1skqAxc+q3LdQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-01 13:01:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12518.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Previous message:</strong> <a href="12516.php">Vasiliy: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>In reply to:</strong> <a href="12516.php">Vasiliy: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12513.php">Joshua Ladd: "Re: [OMPI devel] aclocal-1.14: error:	../../config/autogen_found_items.m4:274: file	'opal/mca/backtrace/configure.m4' does not exist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vasily, I am not able to reproduce this at all. I just did a fresh checkout of the trunk. As explained, it was truncated. I did as Jeff and Brian suggested and did 'svn up .' a couple of times (had to do 'svn cleanup' first to unlock some files apparently). I did a vpath build as you describe, and have no problems building and installing the entire project - no m4 hacks necessary. 
<br>
<p>Josh
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Vasiliy
<br>
Sent: Monday, July 01, 2013 12:42 PM
<br>
To: Jeff Squyres (jsquyres)
<br>
Cc: Open MPI Developers
<br>
Subject: Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist
<br>
<p>Thank you, Jeff. However, I've got it working by rewriting 'include'
<br>
strings in 'autogen_found_items.m4' from relative to absolute paths.
<br>
As the M4 file is being, actually, generated rather than it exists in the svn tree, one has a short temporal window, just few seconds before it's getting executed, to rewrite again the M4 file. Interestingly enough, the relative paths in 'autogen_found_items.m4' work ok at some first point of configuring, while they do not upon its second use (what is that second operational directory?). Here's what I've finally
<br>
got:
<br>
<p>config.status: executing libtool commands CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0 &amp;&amp; /bin/sh /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/config/missing
<br>
aclocal-1.14 -I config
<br>
CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0 &amp;&amp; /bin/sh /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/config/missing
<br>
autoconf
<br>
&nbsp;cd /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0
<br>
&amp;&amp; /bin/sh /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/config/missing
<br>
automake-1.14 --foreign
<br>
/bin/sh ./config.status --recheck
<br>
<p>The issue pops up while using option &quot;2&quot; VPATH as described here:
<br>
<a href="http://svn.open-mpi.org/svn/ompi/trunk/HACKING">http://svn.open-mpi.org/svn/ompi/trunk/HACKING</a>
<br>
<p>On Mon, Jul 1, 2013 at 5:51 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; If it helps, here's the output from when I run autogen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 1, 2013, at 10:57 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...well, I'm not sure what I can do to help. I have to agree with 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff that something has gotten really messed up in your checkout or 
</span><br>
<span class="quotelev2">&gt;&gt; system. You might check to ensure you are picking up the right 
</span><br>
<span class="quotelev2">&gt;&gt; autotools, and perhaps re-checkout the trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All I can tell you is that it is building just fine on both my Mac 
</span><br>
<span class="quotelev2">&gt;&gt; and Linux boxes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 1, 2013, at 7:41 AM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Ralph, I believe I have run autogen.pl after a fresh full 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkout, and not yet after an update:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI autogen (buckle up!)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Checking tool versions
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Searching for autoconf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;stripped&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - from my log
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How ../../config/autogen_found_items.m4:274 is supposed to find 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'opal/mca/backtrace/configure.m4' if it operates in 'opal/libltdl' ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vasiliy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Jul 1, 2013 at 4:07 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Or you might try rerunning autogen.pl in case you updated and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; didn't catch that something requiring autogen changed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 1, 2013, at 7:02 AM, &quot;Jeff Squyres (jsquyres)&quot; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sounds like you have a busted SVN checkout -- that file exists for me:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [10:02] jsquyres-mac:~/s/ompi3 &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; svnversion .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 28688
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [10:02] jsquyres-mac:~/s/ompi3 &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; svn info
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal/mca/backtrace/configure.m4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Path: opal/mca/backtrace/configure.m4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Name: configure.m4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Working Copy Root Path: /Users/jsquyres/dev/svn/ompi3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; URL:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/svn/ompi/trunk/opal/mca/backtrace/configu">https://svn.open-mpi.org/svn/ompi/trunk/opal/mca/backtrace/configu</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; re.m4 Repository Root: <a href="https://svn.open-mpi.org/svn/ompi">https://svn.open-mpi.org/svn/ompi</a> 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Repository UUID: 63e3feb5-37d5-0310-a306-e8a459e722fe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Revision: 28688
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Node Kind: file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Schedule: normal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Last Changed Author: rhc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Last Changed Rev: 23764
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Last Changed Date: 2010-09-17 19:04:06 -0400 (Fri, 17 Sep 2010) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Text Last Updated: 2013-05-24 11:39:52 -0400 (Fri, 24 May 2013)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Checksum: a6d3741b6c9ab47daf2a6af6c812c148f91793a2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 1, 2013, at 9:58 AM, Vasiliy
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; There is an error while configuring OpenMPI from the svn checkout 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with aclocal not being able to find 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 'opal/mca/backtrace/configure.m4',
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; which, in fact, does exist there. What changes are needed to fix that?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Note: it has stepped in the 'opal/libltdl' directory just before 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** GNU libltdl setup
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; checking location of libltdl... internal copy
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; configure: OMPI configuring in opal/libltdl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; configure: running /bin/sh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/libltdl/configure'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '--prefix=/usr' '--exec-prefix=/usr' '--bindir=/usr/bin'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '--sbindir=/usr/sbin' '--libexecdir=/usr/lib' '--datadir=/usr/share'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '--localstatedir=/var' '--sysconfdir=/etc' '--datarootdir=/usr/share'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '--docdir=/usr/share/doc/openmpi' 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 'LDFLAGS=-Wl,--export-all-symbols -Wl,-no-undefined' '--disable-mca-dso' '--disable-sysv-shmem'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '--without-udapl' '--enable-cxx-exceptions' '--with-threads=posix'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '--without-cs-fs' '--enable-heterogeneous'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '--with-mpi-param_check=always'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '--enable-contrib-no-build=vt,libompitrace'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '--enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 'CC=gcc' 'CFLAGS=-ggdb -march=native -mtune=native -Ofast 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -fomit-frame-pointer -pipe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1/build=/usr/src/debug/openmpi-1.9.0-a1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0=/usr/src/debug/openmpi-1.9.0-a1'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 'LIBS=' 'CPPFLAGS=' 'CXX=g++' 'CXXFLAGS=-ggdb -march=native 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -mtune=native -Ofast -fomit-frame-pointer -pipe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1/build=/usr/src/debug/openmpi-1.9.0-a1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0=/usr/src/debug/openmpi-1.9.0-a1'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 'FC=gfortran' 'FCFLAGS=-ggdb -march=native -mtune=native -Ofast 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -fomit-frame-pointer -pipe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1/build=/usr/src/debug/openmpi-1.9.0-a1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0=/usr/src/debug/openmpi-1.9.0-a1'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --enable-ltdl-convenience --disable-ltdl-install --enable-shared 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --disable-static --cache-file=/dev/null
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --srcdir=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/open
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpi-1.9.0/opal/libltdl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --disable-option-checking
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; checking for a BSD-compatible install... /usr/bin/install -c 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;stripped&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** Final output
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; checking that generated files are newer than configure... done 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;stripped&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: executing libtool commands Making all in config
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/config'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Nothing to be done for 'all'.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/config'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Making all in contrib
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/contrib'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Nothing to be done for 'all'.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/contrib'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Making all in opal
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Making all in include
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/include'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make  all-am
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[3]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/include'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/include'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/include'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Making all in libltdl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/libltdl'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /opal/libltdl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &amp;&amp; /bin/sh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /config/missing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; aclocal-1.14 -I ../../config
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; aclocal-1.14: error: ../../config/autogen_found_items.m4:274: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file 'opal/mca/backtrace/configure.m4' does not exist
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Makefile:527: recipe for target
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/libltdl/aclocal.m4'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; failed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[2]: ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0/opal/libltdl/aclocal.m4]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/libltdl'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Makefile:2070: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Makefile:1578: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** ERROR: make failed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12518.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Previous message:</strong> <a href="12516.php">Vasiliy: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>In reply to:</strong> <a href="12516.php">Vasiliy: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12513.php">Joshua Ladd: "Re: [OMPI devel] aclocal-1.14: error:	../../config/autogen_found_items.m4:274: file	'opal/mca/backtrace/configure.m4' does not exist"</a>
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