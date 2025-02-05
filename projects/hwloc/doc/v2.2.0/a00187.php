<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.8.17 -->
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
$(function() {
  initMenu('',false,false,'search.php','Search');
});
/* @license-end */</script>
<div id="main-nav"></div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#typedef-members">Typedefs</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Components and Plugins: Core functions to be used by components</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr class="memitem:ga1ac8191022b0d3b1bf0070e11d1f1155"><td class="memItemLeft" align="right" valign="top">typedef void(*&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00187.php#ga1ac8191022b0d3b1bf0070e11d1f1155">hwloc_report_error_t</a>) (const char *msg, int line)</td></tr>
<tr class="separator:ga1ac8191022b0d3b1bf0070e11d1f1155"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:gafd853fd67e12c32916201d8303ef39d2"><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="a00195.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00187.php#gafd853fd67e12c32916201d8303ef39d2">hwloc_insert_object_by_cpuset</a> (struct hwloc_topology *topology, <a class="el" href="a00146.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj)</td></tr>
<tr class="separator:gafd853fd67e12c32916201d8303ef39d2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga3ae154590328522a864f4a7fb453b562"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00187.php#ga3ae154590328522a864f4a7fb453b562">hwloc_report_os_error</a> (const char *msg, int line)</td></tr>
<tr class="separator:ga3ae154590328522a864f4a7fb453b562"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gab527c1e0f243f057d31a724794ad9f88"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00187.php#gab527c1e0f243f057d31a724794ad9f88">hwloc_hide_errors</a> (void)</td></tr>
<tr class="separator:gab527c1e0f243f057d31a724794ad9f88"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga9f789a1bd5d5d45e1c0e26305164248b"><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="a00195.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00187.php#ga9f789a1bd5d5d45e1c0e26305164248b">hwloc__insert_object_by_cpuset</a> (struct hwloc_topology *topology, <a class="el" href="a00146.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> root, <a class="el" href="a00146.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj, <a class="el" href="a00187.php#ga1ac8191022b0d3b1bf0070e11d1f1155">hwloc_report_error_t</a> report_error)</td></tr>
<tr class="separator:ga9f789a1bd5d5d45e1c0e26305164248b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga0ef97debde503b56367689b07bb3e901"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00187.php#ga0ef97debde503b56367689b07bb3e901">hwloc_insert_object_by_parent</a> (struct hwloc_topology *topology, <a class="el" href="a00146.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> parent, <a class="el" href="a00146.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj)</td></tr>
<tr class="separator:ga0ef97debde503b56367689b07bb3e901"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga0b5c75b2dc37cea2e8a29c4812baf4b3"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00146.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00187.php#ga0b5c75b2dc37cea2e8a29c4812baf4b3">hwloc_alloc_setup_object</a> (<a class="el" href="a00147.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00145.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, unsigned os_index)</td></tr>
<tr class="separator:ga0b5c75b2dc37cea2e8a29c4812baf4b3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga754b61041ceee9685534a2c5d3cd0156"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00187.php#ga754b61041ceee9685534a2c5d3cd0156">hwloc_obj_add_children_sets</a> (<a class="el" href="a00146.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj)</td></tr>
<tr class="separator:ga754b61041ceee9685534a2c5d3cd0156"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga120d8bd74922e1030b621409a6b0be61"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00187.php#ga120d8bd74922e1030b621409a6b0be61">hwloc_topology_reconnect</a> (<a class="el" href="a00147.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned long flags)</td></tr>
<tr class="separator:ga120d8bd74922e1030b621409a6b0be61"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gac2eaed287bb215cf0bd33014e9e1d374"><td class="memItemLeft" align="right" valign="top">static int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00187.php#gac2eaed287bb215cf0bd33014e9e1d374">hwloc_plugin_check_namespace</a> (const char *pluginname, const char *symbol)</td></tr>
<tr class="separator:gac2eaed287bb215cf0bd33014e9e1d374"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Typedef Documentation</h2>
<a id="ga1ac8191022b0d3b1bf0070e11d1f1155"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ga1ac8191022b0d3b1bf0070e11d1f1155">&#9670;&nbsp;</a></span>hwloc_report_error_t</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">typedef void(* hwloc_report_error_t) (const char *msg, int line)</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Type of error callbacks during object insertion. </p>

</div>
</div>
<h2 class="groupheader">Function Documentation</h2>
<a id="ga9f789a1bd5d5d45e1c0e26305164248b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ga9f789a1bd5d5d45e1c0e26305164248b">&#9670;&nbsp;</a></span>hwloc__insert_object_by_cpuset()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00195.php">hwloc_obj</a>* hwloc__insert_object_by_cpuset </td>
          <td>(</td>
          <td class="paramtype">struct hwloc_topology *&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00146.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>root</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00146.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00187.php#ga1ac8191022b0d3b1bf0070e11d1f1155">hwloc_report_error_t</a>&#160;</td>
          <td class="paramname"><em>report_error</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Add an object to the topology and specify which error callback to use. </p>
<p>This function is similar to <a class="el" href="a00187.php#gafd853fd67e12c32916201d8303ef39d2" title="Add an object to the topology.">hwloc_insert_object_by_cpuset()</a> but it allows specifying where to start insertion from (if <code>root</code> is NULL, the topology root object is used), and specifying the error callback. </p>

</div>
</div>
<a id="ga0b5c75b2dc37cea2e8a29c4812baf4b3"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ga0b5c75b2dc37cea2e8a29c4812baf4b3">&#9670;&nbsp;</a></span>hwloc_alloc_setup_object()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00146.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_alloc_setup_object </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00147.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00145.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>os_index</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Allocate and initialize an object of the given type and physical index. </p>
<p>If <code>os_index</code> is unknown or irrelevant, use <code>HWLOC_UNKNOWN_INDEX</code>. </p>

</div>
</div>
<a id="gab527c1e0f243f057d31a724794ad9f88"></a>
<h2 class="memtitle"><span class="permalink"><a href="#gab527c1e0f243f057d31a724794ad9f88">&#9670;&nbsp;</a></span>hwloc_hide_errors()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_hide_errors </td>
          <td>(</td>
          <td class="paramtype">void&#160;</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Check whether insertion errors are hidden. </p>

</div>
</div>
<a id="gafd853fd67e12c32916201d8303ef39d2"></a>
<h2 class="memtitle"><span class="permalink"><a href="#gafd853fd67e12c32916201d8303ef39d2">&#9670;&nbsp;</a></span>hwloc_insert_object_by_cpuset()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00195.php">hwloc_obj</a>* hwloc_insert_object_by_cpuset </td>
          <td>(</td>
          <td class="paramtype">struct hwloc_topology *&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00146.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Add an object to the topology. </p>
<p>It is sorted along the tree of other objects according to the inclusion of cpusets, to eventually be added as a child of the smallest object including this object.</p>
<p>If the cpuset is empty, the type of the object (and maybe some attributes) must be enough to find where to insert the object. This is especially true for NUMA nodes with memory and no CPUs.</p>
<p>The given object should not have children.</p>
<p>This shall only be called before levels are built.</p>
<p>In case of error, <a class="el" href="a00187.php#ga3ae154590328522a864f4a7fb453b562" title="Report an insertion error from a backend.">hwloc_report_os_error()</a> is called.</p>
<p>The caller should check whether the object type is filtered-out before calling this function.</p>
<p>The topology cpuset/nodesets will be enlarged to include the object sets.</p>
<p>Returns the object on success. Returns NULL and frees obj on error. Returns another object and frees obj if it was merged with an identical pre-existing object. </p>

</div>
</div>
<a id="ga0ef97debde503b56367689b07bb3e901"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ga0ef97debde503b56367689b07bb3e901">&#9670;&nbsp;</a></span>hwloc_insert_object_by_parent()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void hwloc_insert_object_by_parent </td>
          <td>(</td>
          <td class="paramtype">struct hwloc_topology *&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00146.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>parent</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00146.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Insert an object somewhere in the topology. </p>
<p>It is added as the last child of the given parent. The cpuset is completely ignored, so strange objects such as I/O devices should preferably be inserted with this.</p>
<p>When used for "normal" children with cpusets (when importing from XML when duplicating a topology), the caller should make sure that:</p><ul>
<li>children are inserted in order,</li>
<li>children cpusets do not intersect.</li>
</ul>
<p>The given object may have normal, I/O or Misc children, as long as they are in order as well. These children must have valid parent and next_sibling pointers.</p>
<p>The caller should check whether the object type is filtered-out before calling this function. </p>

</div>
</div>
<a id="ga754b61041ceee9685534a2c5d3cd0156"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ga754b61041ceee9685534a2c5d3cd0156">&#9670;&nbsp;</a></span>hwloc_obj_add_children_sets()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_obj_add_children_sets </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00146.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Setup object cpusets/nodesets by OR'ing its children. </p>
<p>Used when adding an object late in the topology. Will update the new object by OR'ing all its new children sets.</p>
<p>Used when PCI backend adds a hostbridge parent, when distances add a new Group, etc. </p>

</div>
</div>
<a id="gac2eaed287bb215cf0bd33014e9e1d374"></a>
<h2 class="memtitle"><span class="permalink"><a href="#gac2eaed287bb215cf0bd33014e9e1d374">&#9670;&nbsp;</a></span>hwloc_plugin_check_namespace()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static int hwloc_plugin_check_namespace </td>
          <td>(</td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>pluginname</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>symbol</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Make sure that plugins can lookup core symbols. </p>
<p>This is a sanity check to avoid lazy-lookup failures when libhwloc is loaded within a plugin, and later tries to load its own plugins. This may fail (and abort the program) if libhwloc symbols are in a private namespace.</p>
<dl class="section return"><dt>Returns</dt><dd>0 on success. </dd>
<dd>
-1 if the plugin cannot be successfully loaded. The caller plugin init() callback should return a negative error code as well.</dd></dl>
<p>Plugins should call this function in their init() callback to avoid later crashes if lazy symbol resolution is used by the upper layer that loaded hwloc (e.g. OpenCL implementations using dlopen with RTLD_LAZY).</p>
<dl class="section note"><dt>Note</dt><dd>The build system must define HWLOC_INSIDE_PLUGIN if and only if building the caller as a plugin.</dd>
<dd>
This function should remain inline so plugins can call it even when they cannot find libhwloc symbols. </dd></dl>

</div>
</div>
<a id="ga3ae154590328522a864f4a7fb453b562"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ga3ae154590328522a864f4a7fb453b562">&#9670;&nbsp;</a></span>hwloc_report_os_error()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void hwloc_report_os_error </td>
          <td>(</td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>msg</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>line</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Report an insertion error from a backend. </p>

</div>
</div>
<a id="ga120d8bd74922e1030b621409a6b0be61"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ga120d8bd74922e1030b621409a6b0be61">&#9670;&nbsp;</a></span>hwloc_topology_reconnect()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_topology_reconnect </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00147.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned long&#160;</td>
          <td class="paramname"><em>flags</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Request a reconnection of children and levels in the topology. </p>
<p>May be used by backends during discovery if they need arrays or lists of object within levels or children to be fully connected.</p>
<p><code>flags</code> is currently unused, must 0. </p>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
