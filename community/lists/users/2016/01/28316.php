<?
$subject_val = "Re: [OMPI users] MPI hangs on poll_device() with rdma";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 03:25:42 2016" -->
<!-- isoreceived="20160121082542" -->
<!-- sent="Thu, 21 Jan 2016 16:25:40 +0800" -->
<!-- isosent="20160121082540" -->
<!-- name="Eva" -->
<!-- email="wuzhh01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI hangs on poll_device() with rdma" -->
<!-- id="CAHgSaRQ0=Htqsq6gTUWNanocCccGQYQsU+u1e0t-9rqFQnv14g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHgSaRSzRUzcO4ei4KVLn36ZcMmotsnfDBBRKkBJoOVvmqg1wQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI hangs on poll_device() with rdma<br>
<strong>From:</strong> Eva (<em>wuzhh01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-21 03:25:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28317.php">Gilles Gouaillardet: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>Previous message:</strong> <a href="28315.php">Gilles Gouaillardet: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>In reply to:</strong> <a href="28313.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28317.php">Gilles Gouaillardet: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>Reply:</strong> <a href="28317.php">Gilles Gouaillardet: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>Reply:</strong> <a href="28318.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Gilles.
<br>
it works fine on tcp
<br>
So I use this to disable eager:
<br>
&nbsp;-mca btl_openib_use_eager_rdma 0 -mca btl_openib_max_eager_rdma 0
<br>
<p>2016-01-21 13:10 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; I run with two machines, 2 process per node: process0, process1, process2,
</span><br>
<span class="quotelev1">&gt; process3.
</span><br>
<span class="quotelev1">&gt; After some random rounds of communications, the communication hangs. When
</span><br>
<span class="quotelev1">&gt; I debug into the program, I found:
</span><br>
<span class="quotelev1">&gt; process1 sent a message to process2;
</span><br>
<span class="quotelev1">&gt; process2 received the message from process1 and then start to receive
</span><br>
<span class="quotelev1">&gt; messages from other processes.
</span><br>
<span class="quotelev1">&gt; But process1 doesn't get notice: process2 has received its message and
</span><br>
<span class="quotelev1">&gt; then hang on MPI_Send-&gt;...-&gt;poll_device() of rdmav2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x00007f6ba95f03e5 in ?? () from /usr/lib64/libmlx4-rdmav2.so
</span><br>
<span class="quotelev1">&gt; #1  0x00007f6bacf1ed93 in poll_device () from
</span><br>
<span class="quotelev1">&gt; /home/openmpi-1.8.5-gcc4.8/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; #2  0x00007f6bacf1f7ed in btl_openib_component_progress () from
</span><br>
<span class="quotelev1">&gt; /home/openmpi-1.8.5-gcc4.8/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; #3  0x00007f6bb06539da in opal_progress () from
</span><br>
<span class="quotelev1">&gt; /home/openmpi-1.8.5-gcc4.8/lib/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x00007f6bab831f55 in mca_pml_ob1_send () from
</span><br>
<span class="quotelev1">&gt; /home/openmpi-1.8.5-gcc4.8/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #5  0x00007f6bb0df33c2 in PMPI_Send () from
</span><br>
<span class="quotelev1">&gt; /home/openmpi-1.8.5-gcc4.8/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some experiments I have tried:
</span><br>
<span class="quotelev1">&gt; 1. compile openmpi without multi-thread enable
</span><br>
<span class="quotelev1">&gt; 2. --mca pml_ob1_use_early_completion 0
</span><br>
<span class="quotelev1">&gt; 3. disable eager mode
</span><br>
<span class="quotelev1">&gt; 4. ssend, Bsend
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but it still hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same program works fine on TCP for more than one year. After I move it
</span><br>
<span class="quotelev1">&gt; onto rdma, it starts to hang. And I can't debug into any rdma details
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-01-21 11:24 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Run MPI_Send on MPI1.8.5 without multithread enabled:
</span><br>
<span class="quotelev2">&gt;&gt; it hangs on mca_pml_ob1_send() -&gt; opal_progreses() -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_component_progress() -&gt; poll_device() -&gt; libmlx4-rdmav2.so -&gt; cq
</span><br>
<span class="quotelev2">&gt;&gt; -&gt; phread_spin_unlock
</span><br>
<span class="quotelev2">&gt;&gt; The program can run on TCP with no error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28316/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28317.php">Gilles Gouaillardet: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>Previous message:</strong> <a href="28315.php">Gilles Gouaillardet: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>In reply to:</strong> <a href="28313.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28317.php">Gilles Gouaillardet: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>Reply:</strong> <a href="28317.php">Gilles Gouaillardet: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>Reply:</strong> <a href="28318.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
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
