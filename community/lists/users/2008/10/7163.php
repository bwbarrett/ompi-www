<?
$subject_val = "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 13:53:09 2008" -->
<!-- isoreceived="20081031175309" -->
<!-- sent="Fri, 31 Oct 2008 13:53:00 -0400" -->
<!-- isosent="20081031175300" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)" -->
<!-- id="134D3F33-F765-4AA4-BEC8-519301D4AEF6_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C748A77FEFA44370B30AA463BC5CAB6E_at_exstream.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 13:53:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7164.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7162.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>In reply to:</strong> <a href="7160.php">Rajesh Ramaya: "[OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7165.php">Rajesh Ramaya: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Reply:</strong> <a href="7165.php">Rajesh Ramaya: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 31, 2008, at 11:57 AM, Rajesh Ramaya wrote:
<br>
<p><span class="quotelev1">&gt;     I am completely new to MPI. I have a basic question concerning  
</span><br>
<span class="quotelev1">&gt; MPI and mixed language coding. I hope any of you could help me out.  
</span><br>
<span class="quotelev1">&gt; Is it possible to access FORTRAN common blocks in C++ in a MPI  
</span><br>
<span class="quotelev1">&gt; compiled code. It works without MPI but as soon I switch to MPI the  
</span><br>
<span class="quotelev1">&gt; access of common block does not work anymore.
</span><br>
<span class="quotelev1">&gt; I have a Linux MPI executable which loads a shared library at  
</span><br>
<span class="quotelev1">&gt; runtime and resolves all undefined symbols etc  The shared library  
</span><br>
<span class="quotelev1">&gt; is written in C++ and the MPI executable in written in FORTRAN. Some  
</span><br>
<span class="quotelev1">&gt; of the input that the shared library looking for are in the Fortran  
</span><br>
<span class="quotelev1">&gt; common blocks. As I access those common blocks during runtime the  
</span><br>
<span class="quotelev1">&gt; values are not  initialized.  I would like to know if what I am  
</span><br>
<span class="quotelev1">&gt; doing is possible ?I hope that my problem is clear&#133;&#133;&#133;&#133;..
</span><br>
<p><p>Generally, MPI should not get in the way of sharing common blocks  
<br>
between Fortran and C/C++.  Indeed, in Open MPI itself, we share a few  
<br>
common blocks between Fortran and the main C Open MPI implementation.
<br>
<p>What is the exact symptom that you are seeing?  Is the application  
<br>
failing to resolve symbols at run-time, possibly indicating that  
<br>
something hasn't instantiated a common block?  Or are you able to  
<br>
successfully access the data from the common block, but it doesn't  
<br>
have the values you expect (e.g., perhaps you're seeing all zeros)?
<br>
<p>If the former, you might want to check your build procedure.  You  
<br>
*should* be able to simply replace your C++ / F90 compilers with  
<br>
mpicxx and mpif90, respectively, and be able to build an MPI version  
<br>
of your app.  If the latter, you might need to make your parallel  
<br>
algorithm aware of what data is available in which MPI process --  
<br>
perhaps not all the data is filled in on each MPI process...?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7164.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7162.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>In reply to:</strong> <a href="7160.php">Rajesh Ramaya: "[OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7165.php">Rajesh Ramaya: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Reply:</strong> <a href="7165.php">Rajesh Ramaya: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
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
