<?
$subject_val = "Re: [OMPI devel] segmentation fault on an accumulate-fence test";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 19 04:50:25 2015" -->
<!-- isoreceived="20150119095025" -->
<!-- sent="Mon, 19 Jan 2015 11:50:24 +0200" -->
<!-- isosent="20150119095024" -->
<!-- name="Alina Sklarevich" -->
<!-- email="alinas_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] segmentation fault on an accumulate-fence test" -->
<!-- id="CADGp0BQufAt+xKsLaH+REN0taSiZxDRJ4G7m_uSZnmKfEU27Mw_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CADGp0BT5ED0Z6eRBFaROk4sp4pr5cLRx_u8zyKf7umBOdqMrmQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] segmentation fault on an accumulate-fence test<br>
<strong>From:</strong> Alina Sklarevich (<em>alinas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-19 04:50:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16804.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<li><strong>Previous message:</strong> <a href="16802.php">Alina Sklarevich: "[OMPI devel] segmentation fault on an accumulate-fence test"</a>
<li><strong>In reply to:</strong> <a href="16802.php">Alina Sklarevich: "[OMPI devel] segmentation fault on an accumulate-fence test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16867.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
<li><strong>Reply:</strong> <a href="16867.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attaching the test for reproduction.
<br>
<p>On Mon, Jan 19, 2015 at 11:48 AM, Alina Sklarevich &lt;
<br>
alinas_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear OMPI community,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We observe a segmentation fault in our regression testing. Our initial
</span><br>
<span class="quotelev1">&gt; investigation shows that It happens for any 1.8.x release and with any
</span><br>
<span class="quotelev1">&gt; PML/BTL/MTL combo on two processes, when running the MPICH one-sided test,
</span><br>
<span class="quotelev1">&gt; accumulate-fence test, attached to this report with the following command
</span><br>
<span class="quotelev1">&gt; line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $mpirun -np 2 --bind-to core --display-map --map-by node -mca pml ob1 -mca
</span><br>
<span class="quotelev1">&gt; btl self,openib ../test/mpi/rma/accfence1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The initial trace is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Data for JOB [16088,1] offset 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Data for node: vegas15 Num slots: 16     Max slots: 0        Num procs: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Process OMPI jobid: [16088,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Data for node: vegas16 Num slots: 16     Max slots: 0        Num procs: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Process OMPI jobid: [16088,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] Failing at address: 0x34
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] [ 0] /lib64/libpthread.so.0[0x3f6e80f710]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] [ 1]
</span><br>
<span class="quotelev1">&gt; /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libopen-pal.so.6(opal_memory_ptmalloc2_int_free+0x188)[0x7ffff772baa2]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] [ 2]
</span><br>
<span class="quotelev1">&gt; /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libopen-pal.so.6(opal_memory_ptmalloc2_free+0x98)[0x7ffff772a1f5]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] [ 3]
</span><br>
<span class="quotelev1">&gt; /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libopen-pal.so.6(+0xd6f59)[0x7ffff7728f59]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] [ 4]
</span><br>
<span class="quotelev1">&gt; /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libmpi.so.1(+0x2f884)[0x7ffff7c92884]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] [ 5]
</span><br>
<span class="quotelev1">&gt; /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libmpi.so.1(ompi_attr_delete_all+0x2eb)[0x7ffff7c92dbe]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] [ 6]
</span><br>
<span class="quotelev1">&gt; /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libmpi.so.1(ompi_comm_free+0x6a)[0x7ffff7c99336]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] [ 7]
</span><br>
<span class="quotelev1">&gt; /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/openmpi/mca_osc_rdma.so(ompi_osc_rdma_free+0x921)[0x7ffff32ab3bc]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] [ 8]
</span><br>
<span class="quotelev1">&gt; /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libmpi.so.1(ompi_win_free+0x24)[0x7ffff7cc0c87]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] [ 9]
</span><br>
<span class="quotelev1">&gt; /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libmpi.so.1(MPI_Win_free+0xb8)[0x7ffff7d2b702]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] [10]
</span><br>
<span class="quotelev1">&gt; /labhome/alinas/workspace/mpich/mpich-mellanox/test/mpi/rma/accfence1[0x402447]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] [11] /lib64/libc.so.6(__libc_start_main+0xfd)[0x3f6e41ed1d]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] [12]
</span><br>
<span class="quotelev1">&gt; /labhome/alinas/workspace/mpich/mpich-mellanox/test/mpi/rma/accfence1[0x402119]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vegas16:22098] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And subsequent investigation of the core file generates the following
</span><br>
<span class="quotelev1">&gt; hints:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x00007ffff7722a96 in opal_memory_ptmalloc2_int_free
</span><br>
<span class="quotelev1">&gt; (av=0x7ffff796b320, mem=0x7125a0) at malloc.c:4402
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #1  0x00007ffff77211f5 in opal_memory_ptmalloc2_free (mem=0x7125a0) at
</span><br>
<span class="quotelev1">&gt; malloc.c:3511
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #2  0x00007ffff771ff59 in opal_memory_linux_free_hook (__ptr=0x7125a0,
</span><br>
<span class="quotelev1">&gt; caller=0x7ffff769a8f6) at hooks.c:709
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #3  0x00007ffff769a8f6 in opal_datatype_destruct (datatype=0x7123b0) at
</span><br>
<span class="quotelev1">&gt; opal_datatype_create.c:59
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #4  0x00007ffff3346ad0 in opal_obj_run_destructors (object=0x7123b0) at
</span><br>
<span class="quotelev1">&gt; ../../../../opal/class/opal_object.h:448
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #5  0x00007ffff334af68 in process_acc (module=0x70e370, source=0,
</span><br>
<span class="quotelev1">&gt; acc_header=0x70fef0) at osc_rdma_data_move.c:1184
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #6  0x00007ffff334c752 in process_frag (module=0x70e370, frag=0x70fee0) at
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c:1576
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #7  0x00007ffff334cafb in ompi_osc_rdma_callback (request=0x700b80) at
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c:1656
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #8  0x00007ffff3db3770 in ompi_request_complete (request=0x700b80,
</span><br>
<span class="quotelev1">&gt; with_signal=true) at ../../../../ompi/request/request.h:402
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #9  0x00007ffff3db3f11 in recv_request_pml_complete (recvreq=0x700b80) at
</span><br>
<span class="quotelev1">&gt; pml_ob1_recvreq.h:181
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #10 0x00007ffff3db5019 in mca_pml_ob1_recv_frag_callback_match
</span><br>
<span class="quotelev1">&gt; (btl=0x7ffff41d9c20, tag=65 'A', des=0x7fffffffd210, cbdata=0x0) at
</span><br>
<span class="quotelev1">&gt; pml_ob1_recvfrag.c:243
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #11 0x00007ffff3fd6c4b in mca_btl_sm_component_progress () at
</span><br>
<span class="quotelev1">&gt; btl_sm_component.c:1087
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #12 0x00007ffff7678d66 in opal_progress () at runtime/opal_progress.c:187
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #13 0x00007ffff3dabb44 in opal_condition_wait (c=0x7ffff7ffa120,
</span><br>
<span class="quotelev1">&gt; m=0x7ffff7ffa160) at ../../../../opal/threads/condition.h:78
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #14 0x00007ffff3dabcc6 in ompi_request_wait_completion
</span><br>
<span class="quotelev1">&gt; (req=0x7fffffffd410) at ../../../../ompi/request/request.h:381
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #15 0x00007ffff3dac9da in mca_pml_ob1_recv (addr=0x7fffffffd9ec, count=1,
</span><br>
<span class="quotelev1">&gt; datatype=0x7ffff7fe25c0, src=0, tag=-24, comm=0x70dac0, status=0x0) at
</span><br>
<span class="quotelev1">&gt; pml_ob1_irecv.c:109
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #16 0x00007ffff2cd2868 in ompi_coll_tuned_scatter_intra_basic_linear
</span><br>
<span class="quotelev1">&gt; (sbuf=0x0, scount=1, sdtype=0x7ffff7fe25c0, rbuf=0x7fffffffd9ec, rcount=1,
</span><br>
<span class="quotelev1">&gt; rdtype=0x7ffff7fe25c0, root=0, comm=0x70dac0, module=0x70fa20)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     at coll_tuned_scatter.c:231
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #17 0x00007ffff2cbbd75 in ompi_coll_tuned_scatter_intra_dec_fixed
</span><br>
<span class="quotelev1">&gt; (sbuf=0x0, scount=1, sdtype=0x7ffff7fe25c0, rbuf=0x7fffffffd9ec, rcount=1,
</span><br>
<span class="quotelev1">&gt; rdtype=0x7ffff7fe25c0, root=0, comm=0x70dac0, module=0x70fa20)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     at coll_tuned_decision_fixed.c:769
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #18 0x00007ffff3b9c16e in mca_coll_basic_reduce_scatter_block_intra
</span><br>
<span class="quotelev1">&gt; (sbuf=0x70e220, rbuf=0x7fffffffd9ec, rcount=1, dtype=0x7ffff7fe25c0,
</span><br>
<span class="quotelev1">&gt; op=0x60d180, comm=0x70dac0, module=0x70f230)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     at coll_basic_reduce_scatter_block.c:102
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #19 0x00007ffff334eecc in ompi_osc_rdma_fence (assert=0, win=0x70e260) at
</span><br>
<span class="quotelev1">&gt; osc_rdma_active_target.c:140
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #20 0x00007ffff7d2a1b5 in PMPI_Win_fence (assert=0, win=0x70e260) at
</span><br>
<span class="quotelev1">&gt; pwin_fence.c:59
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #21 0x0000000000402405 in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks to be a clear case of memory corruption hidden somewhere in the
</span><br>
<span class="quotelev1">&gt; OSC code. Nathan, can you please have a look?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alina.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16803/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16803/accfence1.c">accfence1.c</a>
</ul>
<!-- attachment="accfence1.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16804.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<li><strong>Previous message:</strong> <a href="16802.php">Alina Sklarevich: "[OMPI devel] segmentation fault on an accumulate-fence test"</a>
<li><strong>In reply to:</strong> <a href="16802.php">Alina Sklarevich: "[OMPI devel] segmentation fault on an accumulate-fence test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16867.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
<li><strong>Reply:</strong> <a href="16867.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
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
