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
<!-- Generated by Doxygen 1.8.8 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Finding Objects covering at least CPU set</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga0e66aa2dc6b2527cfd10723af646c9d7"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00090.php#ga0e66aa2dc6b2527cfd10723af646c9d7">hwloc_get_child_covering_cpuset</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00075.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> parent)</td></tr>
<tr class="separator:ga0e66aa2dc6b2527cfd10723af646c9d7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga41acdcdbb8b95d70ecf6c572a3f67dca"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00090.php#ga41acdcdbb8b95d70ecf6c572a3f67dca">hwloc_get_obj_covering_cpuset</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00075.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set)</td></tr>
<tr class="separator:ga41acdcdbb8b95d70ecf6c572a3f67dca"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gaeea0d93522c85c3ef0acfbb00733a69c"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00090.php#gaeea0d93522c85c3ef0acfbb00733a69c">hwloc_get_next_obj_covering_cpuset_by_depth</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00075.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, unsigned depth, <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> prev)</td></tr>
<tr class="separator:gaeea0d93522c85c3ef0acfbb00733a69c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga91cfae08b092e7966002e15d1e987213"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00090.php#ga91cfae08b092e7966002e15d1e987213">hwloc_get_next_obj_covering_cpuset_by_type</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00075.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, <a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> prev)</td></tr>
<tr class="separator:ga91cfae08b092e7966002e15d1e987213"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="ga0e66aa2dc6b2527cfd10723af646c9d7"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_child_covering_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00075.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>parent</em>&#160;</td>
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

<p>Get the child covering at least CPU set <code>set</code>. </p>
<dl class="section return"><dt>Returns</dt><dd><code>NULL</code> if no child matches or if <code>set</code> is empty.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>This function cannot work if parent does not have a CPU set. </dd></dl>

</div>
</div>
<a class="anchor" id="gaeea0d93522c85c3ef0acfbb00733a69c"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_next_obj_covering_cpuset_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00075.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>depth</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>prev</em>&#160;</td>
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

<p>Iterate through same-depth objects covering at least CPU set <code>set</code>. </p>
<p>If object <code>prev</code> is <code>NULL</code>, return the first object at depth <code>depth</code> covering at least part of CPU set <code>set</code>. The next invokation should pass the previous return value in <code>prev</code> so as to obtain the next object covering at least another part of <code>set</code>.</p>
<dl class="section note"><dt>Note</dt><dd>This function cannot work if objects at the given depth do not have CPU sets or if the topology is made of different machines. </dd></dl>

</div>
</div>
<a class="anchor" id="ga91cfae08b092e7966002e15d1e987213"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_next_obj_covering_cpuset_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00075.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>prev</em>&#160;</td>
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

<p>Iterate through same-type objects covering at least CPU set <code>set</code>. </p>
<p>If object <code>prev</code> is <code>NULL</code>, return the first object of type <code>type</code> covering at least part of CPU set <code>set</code>. The next invokation should pass the previous return value in <code>prev</code> so as to obtain the next object of type <code>type</code> covering at least another part of <code>set</code>.</p>
<p>If there are no or multiple depths for type <code>type</code>, <code>NULL</code> is returned. The caller may fallback to <a class="el" href="a00090.php#gaeea0d93522c85c3ef0acfbb00733a69c" title="Iterate through same-depth objects covering at least CPU set set. ">hwloc_get_next_obj_covering_cpuset_by_depth()</a> for each depth.</p>
<dl class="section note"><dt>Note</dt><dd>This function cannot work if objects of the given type do not have CPU sets or if the topology is made of different machines. </dd></dl>

</div>
</div>
<a class="anchor" id="ga41acdcdbb8b95d70ecf6c572a3f67dca"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_obj_covering_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00075.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>&#160;</td>
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

<p>Get the lowest object covering at least CPU set <code>set</code>. </p>
<dl class="section return"><dt>Returns</dt><dd><code>NULL</code> if no object matches or if <code>set</code> is empty.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>This function cannot work if the root object does not have a CPU set, e.g. if the topology is made of different machines. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");