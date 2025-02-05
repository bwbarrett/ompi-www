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
<!-- Generated by Doxygen 1.7.3 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#nested-classes">Data Structures</a> &#124;
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<h1>hwloc_obj_attr_u Union Reference<div class="ingroups"><a class="el" href="group__hwlocality__objects.php">Topology Objects</a></div></h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="hwloc_obj_attr_u" -->
<p>Object type-specific Attributes.  
<a href="#_details">More...</a></p>

<p><code>#include &lt;<a class="el" href="hwloc_8h_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="nested-classes"></a>
Data Structures</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__cache__attr__s.php">hwloc_cache_attr_s</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Cache-specific Object Attributes.  <a href="structhwloc__obj__attr__u_1_1hwloc__cache__attr__s.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__group__attr__s.php">hwloc_group_attr_s</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Group-specific Object Attributes.  <a href="structhwloc__obj__attr__u_1_1hwloc__group__attr__s.php#_details">More...</a><br/></td></tr>
<tr><td colspan="2"><h2><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak"/>
<a class="el" href="structhwloc__obj__attr__u_1_1hwloc__cache__attr__s.php">hwloc_obj_attr_u::hwloc_cache_attr_s</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="unionhwloc__obj__attr__u.php#ab5a8ae3bf490e6b1071fea53f7382836">cache</a></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak"/>
<a class="el" href="structhwloc__obj__attr__u_1_1hwloc__group__attr__s.php">hwloc_obj_attr_u::hwloc_group_attr_s</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="unionhwloc__obj__attr__u.php#ae4ba157cc313e2cdd9a82f1c1df7aaa6">group</a></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<div class="textblock"><p>Object type-specific Attributes. </p>
</div><hr/><h2>Field Documentation</h2>
<a class="anchor" id="ab5a8ae3bf490e6b1071fea53f7382836"></a><!-- doxytag: member="hwloc_obj_attr_u::cache" ref="ab5a8ae3bf490e6b1071fea53f7382836" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__cache__attr__s.php">hwloc_obj_attr_u::hwloc_cache_attr_s</a>  <a class="el" href="unionhwloc__obj__attr__u.php#ab5a8ae3bf490e6b1071fea53f7382836">hwloc_obj_attr_u::cache</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

</div>
</div>
<a class="anchor" id="ae4ba157cc313e2cdd9a82f1c1df7aaa6"></a><!-- doxytag: member="hwloc_obj_attr_u::group" ref="ae4ba157cc313e2cdd9a82f1c1df7aaa6" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__group__attr__s.php">hwloc_obj_attr_u::hwloc_group_attr_s</a>  <a class="el" href="unionhwloc__obj__attr__u.php#ae4ba157cc313e2cdd9a82f1c1df7aaa6">hwloc_obj_attr_u::group</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

</div>
</div>
<hr/>The documentation for this union was generated from the following file:<ul>
<li><a class="el" href="hwloc_8h_source.php">hwloc.h</a></li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");
