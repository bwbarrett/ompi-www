<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 20 11:06:11 2013" -->
<!-- isoreceived="20130820150611" -->
<!-- sent="Tue, 20 Aug 2013 10:06:14 -0500" -->
<!-- isosent="20130820150614" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC" -->
<!-- id="002201ce9db6$d02509a0$706f1ce0$_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="001201ce9db1$11b12f80$35138e80$_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-20 11:06:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12771.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<li><strong>In reply to:</strong> <a href="12770.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So is this the correct fix?
<br>
<p>[root_at_r9 ompi-trunk]# svn diff
<br>
Index: ompi/mca/btl/openib/btl_openib_component.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/btl_openib_component.c  (revision 29050)
<br>
+++ ompi/mca/btl/openib/btl_openib_component.c  (working copy)
<br>
@@ -716,7 +716,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERR_NOT_FOUND;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
<br>
+#if defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (IBV_LINK_LAYER_ETHERNET == ib_port_attr-&gt;link_layer) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subnet_id = mca_btl_openib_get_ip_subnet_id(device-&gt;ib_dev,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_num);
<br>
Index: ompi/mca/btl/openib/btl_openib.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/btl_openib.c    (revision 29050)
<br>
+++ ompi/mca/btl/openib/btl_openib.c    (working copy)
<br>
@@ -444,7 +444,7 @@
<br>
&nbsp;#ifdef HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch(openib_btl-&gt;device-&gt;ib_dev-&gt;transport_type) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case IBV_TRANSPORT_IB:
<br>
-#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
<br>
+#if defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch(openib_btl-&gt;ib_port_attr.link_layer) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case IBV_LINK_LAYER_ETHERNET:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return MCA_BTL_OPENIB_TRANSPORT_RDMAOE;
<br>
Index: ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c       (revision 29050)
<br>
+++ ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c       (working copy)
<br>
@@ -389,7 +389,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* If we do not have struct ibv_device.transport_device, then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;we're in an old version of OFED that is IB only (i.e., no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iWarp), so we can safely assume that we can use this CPC. */
<br>
-#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp; defined(HAVE_IBV_LINK_LAYER_ETHERNET)
<br>
+#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp; defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_VERBOSE((&quot;UD CPC only supported on InfiniBand; skipped on %s:%d&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
<br>
Index: ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/connect/btl_openib_connect_oob.c        (revision 29050)
<br>
+++ ompi/mca/btl/openib/connect/btl_openib_connect_oob.c        (working copy)
<br>
@@ -127,7 +127,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IB (this CPC will not work with iWarp).  If we do not have the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport_type member, then we must be &lt; OFED v1.2, and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;therefore we must be IB. */
<br>
-#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp; defined(HAVE_IBV_LINK_LAYER_ETHERNET)
<br>
+#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp; defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output_verbose(5, ompi_btl_base_framework.framework_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;openib BTL: oob CPC only supported on InfiniBand; skipped on  %s:%d&quot;,
<br>
Index: ompi/mca/common/verbs/common_verbs_find_ports.c
<br>
===================================================================
<br>
--- ompi/mca/common/verbs/common_verbs_find_ports.c     (revision 29050)
<br>
+++ ompi/mca/common/verbs/common_verbs_find_ports.c     (working copy)
<br>
@@ -170,7 +170,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;}
<br>
<p>-#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
<br>
+#if defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
<br>
&nbsp;static const char *link_layer_to_str(int link_type)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch(link_type) {
<br>
@@ -417,7 +417,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* If they specified neither link layer, then we want this port */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;want = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
<br>
+#if defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if (flags &amp; OMPI_COMMON_VERBS_FLAGS_LINK_LAYER_IB) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (IBV_LINK_LAYER_INFINIBAND == port_attr.link_layer) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;want = true;
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Steve Wise
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, August 20, 2013 9:25 AM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Developers'; 'Jeff Squyres (jsquyres)'
</span><br>
<span class="quotelev1">&gt; Cc: 'Indranil Choudhury'
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the config.log:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:133950: checking whether IBV_LINK_LAYER_ETHERNET is declared
</span><br>
<span class="quotelev1">&gt; configure:133950: gcc -std=gnu99 -c -g -Wall -Wundef -Wno-long-long -Wsign-compare
</span><br>
<span class="quotelev1">&gt; -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-declaration
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt; -I/usr/local/src/ompi-trunk/opal/mca/hwloc/hwloc152/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/usr/local/src/ompi-trunk/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev1">&gt; -I/usr/local/src/ompi-trunk/opal/mca/event/libevent2021/libevent/include  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c:611: warning: function declaration isn't a prototype
</span><br>
<span class="quotelev1">&gt; configure:133950: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:133950: result: yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And I see it in opal_config.h:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Define to 1 if you have the declaration of `IBV_LINK_LAYER_ETHERNET', and
</span><br>
<span class="quotelev1">&gt;    to 0 if you don't. */
</span><br>
<span class="quotelev1">&gt; #define HAVE_DECL_IBV_LINK_LAYER_ETHERNET 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note the #define is HAVE_DECL_IBV_LINK_LAYER_ETHERNET but the code is checking for
</span><br>
<span class="quotelev1">&gt; HAVE_IBV_LINK_LAYER_ETHERNET!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No _DECL_...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Steve Wise
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Tuesday, August 20, 2013 9:07 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: 'Jeff Squyres (jsquyres)'
</span><br>
<span class="quotelev2">&gt; &gt; Cc: 'Open MPI Developers'; 'Indranil Choudhury'
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sent: Tuesday, August 20, 2013 8:59 AM
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: Steve Wise
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Cc: Open MPI Developers; Indranil Choudhury
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Aug 20, 2013, at 9:51 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I checked in the correct fix,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Er, no.  Please re-read my email -- your fix was incorrect (you're overriding the output of an
</span><br>
<span class="quotelev1">&gt; AC
</span><br>
<span class="quotelev2">&gt; &gt; macro).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; :-)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What is the correct fix then?  I've never worked with any of this AC stuff...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With the existing code (prior to my broken fix), HAVE_IBV_LINK_LAYER_ETHERNET does not get
</span><br>
<span class="quotelev1">&gt; defined.
</span><br>
<span class="quotelev2">&gt; &gt; Yet the enum and the link_type field are in verbs.h...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12771.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<li><strong>In reply to:</strong> <a href="12770.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
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
