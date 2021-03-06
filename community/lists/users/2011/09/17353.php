<?
$subject_val = "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 20 08:25:30 2011" -->
<!-- isoreceived="20110920122530" -->
<!-- sent="Tue, 20 Sep 2011 14:25:09 +0200" -->
<!-- isosent="20110920122509" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?" -->
<!-- id="01FAE7A2-F1A2-410A-8CEE-D84E91449189_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4E787E89.5090205_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-20 08:25:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17354.php">Rolf vandeVaart: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17352.php">Yevgeny Kliteynik: "Re: [OMPI users] Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>In reply to:</strong> <a href="17349.php">Tim Prince: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17356.php">Samuel K. Gutierrez: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Reply:</strong> <a href="17356.php">Samuel K. Gutierrez: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Reply:</strong> <a href="17357.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect	floating-point results?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 20.09.2011 um 13:52 schrieb Tim Prince:
<br>
<p><span class="quotelev1">&gt; On 9/20/2011 7:25 AM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 20.09.2011 um 00:41 schrieb Blosch, Edwin L:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am observing differences in floating-point results from an application program that appear to be related to whether I link with OpenMPI 1.4.3 or MVAPICH 1.2.0.  Both packages were built with the same installation of Intel 11.1, as well as the application program; identical flags passed to the compiler in each case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;ve tracked down some differences in a compute-only routine where I&#146;ve printed out the inputs to the routine (to 18 digits) ; the inputs are identical.  The output numbers are different in the 16th place (perhaps a few in the 15th place).  These differences only show up for optimized code, not for &#150;O0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My assumption is that some optimized math intrinsic is being replaced dynamically, but I do not know how to confirm this.  Anyone have guidance to offer? Or similar experience?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; yes, I face it often but always at a magnitude where it's not of any concern (and not related to any MPI). Due to the limited precision in computers, a simple reordering of operation (although being equivalent in a mathematical sense) can lead to different results. Removing the anomalies with -O0 could proof that.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The other point I heard especially for the x86 instruction set is, that the internal FPU has still 80 bits, while the presentation in memory is only 64 bit. Hence when all can be done in the registers, the result can be different compared to the case when some interim results need to be stored to RAM. For the Portland compiler there is a switch -Kieee -pc64 to force it to stay always in 64 bit, and a similar one for Intel is -mp (now -fltconsistency) and -mp1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Diagnostics below indicate that ifort 11.1 64-bit is in use.  The options aren't the same as Reuti's &quot;now&quot; version (a 32-bit compiler which hasn't been supported for 3 years or more?).
</span><br>
<p>In the 11.1 documentation they are also still listed:
<br>
<p><a href="http://software.intel.com/sites/products/documentation/hpc/compilerpro/en-us/fortran/lin/compiler_f/index.htm">http://software.intel.com/sites/products/documentation/hpc/compilerpro/en-us/fortran/lin/compiler_f/index.htm</a>
<br>
<p>I read it in the way, that -mp is deprecated syntax (therefore listed under &quot;Alternate Options&quot;), but -fltconsistency is still a valid and supported option.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; With ifort 10.1 and more recent, you would set at least
</span><br>
<span class="quotelev1">&gt; -assume protect_parens -prec-div -prec-sqrt
</span><br>
<span class="quotelev1">&gt; if you are interested in numerical consistency.  If you don't want auto-vectorization of sum reductions, you would use instead
</span><br>
<span class="quotelev1">&gt; -fp-model source -ftz
</span><br>
<span class="quotelev1">&gt; (ftz sets underflow mode back to abrupt, while &quot;source&quot; sets gradual).
</span><br>
<span class="quotelev1">&gt; It may be possible to expose 80-bit x87 by setting the ancient -mp option, but such a course can't be recommended without additional cautions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Quoted comment from OP seem to show a somewhat different question: Does OpenMPI implement any operations in a different way from MVAPICH?  I would think it probable that the answer could be affirmative for operations such as allreduce, but this leads well outside my expertise with respect to specific MPI implementations.  It isn't out of the question to suspect that such differences might be aggravated when using excessively aggressive ifort options such as -fast.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         libifport.so.5 =&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libifport.so.5 (0x00002b6e7e081000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         libifcoremt.so.5 =&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libifcoremt.so.5 (0x00002b6e7e1ba000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         libimf.so =&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libimf.so (0x00002b6e7e45f000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         libsvml.so =&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libsvml.so (0x00002b6e7e7f4000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         libintlc.so.5 =&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libintlc.so.5 (0x00002b6e7ea0a000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Prince
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17354.php">Rolf vandeVaart: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17352.php">Yevgeny Kliteynik: "Re: [OMPI users] Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>In reply to:</strong> <a href="17349.php">Tim Prince: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17356.php">Samuel K. Gutierrez: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Reply:</strong> <a href="17356.php">Samuel K. Gutierrez: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Reply:</strong> <a href="17357.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect	floating-point results?"</a>
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
