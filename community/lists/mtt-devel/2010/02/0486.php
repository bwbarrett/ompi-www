<?
$subject_val = "Re: [MTT devel] GDS errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 11:01:53 2010" -->
<!-- isoreceived="20100212160153" -->
<!-- sent="Fri, 12 Feb 2010 11:01:47 -0500" -->
<!-- isosent="20100212160147" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GDS errors" -->
<!-- id="9E5AAA9F-CB47-4F06-888A-1B28AD8B95D7_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4B75698A.6010106_at_argus-cv.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] GDS errors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-12 11:01:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0487.php">Jeff Squyres: "Re: [MTT devel] More GDS questions"</a>
<li><strong>Previous message:</strong> <a href="0485.php">Jeff Squyres: "[MTT devel] extracting mca params"</a>
<li><strong>In reply to:</strong> <a href="0483.php">Igor Ivanov: "Re: [MTT devel] GDS errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0494.php">Igor Ivanov: "Re: [MTT devel] GDS errors"</a>
<li><strong>Reply:</strong> <a href="0494.php">Igor Ivanov: "Re: [MTT devel] GDS errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 12, 2010, at 9:45 AM, Igor Ivanov wrote:
<br>
<p><span class="quotelev1">&gt; Look at message string.
</span><br>
<span class="quotelev1">&gt; BadValueError: Property data_message_size is 667 bytes long; it must be 500 or less. Consider Text instead, which can store strings of any length.
</span><br>
<p>Ah, ok.
<br>
<p>What is data_message_size, and why would my submits have a value that would be 667 bytes long?  From the variable name, I would assume that it's a number, in which case I can't imagine that it should be more than a few bytes long...?
<br>
<p><span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Igor
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Looking in the appspot dashboard, I see a bunch of errors when Cisco tried to submit test run data.  There's a few random errors, but a bunch that look like what I pasted below.  How do I diagnose this further?  Clearly, some field is too long -- how do I find out which one?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 	&#149; 128.107.241.170 - - [11/Feb/2010:00:51:21 -0800] &quot;POST /client HTTP/1.1&quot; 500 1972 - &quot;MPI Test MTTGDS Reporter,gzip(gfe)&quot; &quot;open-mpi-mtt.appspot.com&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 	&#149; E02-11 12:51AM 21.241
</span><br>
<span class="quotelev2">&gt;&gt; Property data_message_size is 667 bytes long; it must be 500 or less. Consider Text instead, which can store strings of any length.
</span><br>
<span class="quotelev2">&gt;&gt; Traceback (most recent call last):
</span><br>
<span class="quotelev2">&gt;&gt;   File &quot;/base/python_lib/versions/1/google/appengine/ext/webapp/__init__.py&quot;, line 509, in __call__
</span><br>
<span class="quotelev2">&gt;&gt;     handler.post(*groups)
</span><br>
<span class="quotelev2">&gt;&gt;   File &quot;/base/data/home/apps/open-mpi-mtt/1.337140739868725607/main.py&quot;, line 961, in post
</span><br>
<span class="quotelev2">&gt;&gt;     status = self._submit();
</span><br>
<span class="quotelev2">&gt;&gt;   File &quot;/base/data/home/apps/open-mpi-mtt/1.337140739868725607/main.py&quot;, line 485, in _submit
</span><br>
<span class="quotelev2">&gt;&gt;     test_run_phase.put()
</span><br>
<span class="quotelev2">&gt;&gt;   File &quot;/base/python_lib/versions/1/google/appengine/ext/db/__init__.py&quot;, line 801, in put
</span><br>
<span class="quotelev2">&gt;&gt;     self._populate_internal_entity()
</span><br>
<span class="quotelev2">&gt;&gt;   File &quot;/base/python_lib/versions/1/google/appengine/ext/db/__init__.py&quot;, line 779, in _populate_internal_entity
</span><br>
<span class="quotelev2">&gt;&gt;     self._entity = self._populate_entity(_entity_class=_entity_class)
</span><br>
<span class="quotelev2">&gt;&gt;   File &quot;/base/python_lib/versions/1/google/appengine/ext/db/__init__.py&quot;, line 839, in _populate_entity
</span><br>
<span class="quotelev2">&gt;&gt;     self._to_entity(entity)
</span><br>
<span class="quotelev2">&gt;&gt;   File &quot;/base/python_lib/versions/1/google/appengine/ext/db/__init__.py&quot;, line 1465, in _to_entity
</span><br>
<span class="quotelev2">&gt;&gt;     entity[key] = value
</span><br>
<span class="quotelev2">&gt;&gt;   File &quot;/base/python_lib/versions/1/google/appengine/api/datastore.py&quot;, line 492, in __setitem__
</span><br>
<span class="quotelev2">&gt;&gt;     datastore_types.ValidateProperty(name, value)
</span><br>
<span class="quotelev2">&gt;&gt;   File &quot;/base/python_lib/versions/1/google/appengine/api/datastore_types.py&quot;, line 1290, in ValidateProperty
</span><br>
<span class="quotelev2">&gt;&gt;     prop_validator(name, v)
</span><br>
<span class="quotelev2">&gt;&gt;   File &quot;/base/python_lib/versions/1/google/appengine/api/datastore_types.py&quot;, line 1181, in ValidatePropertyString
</span><br>
<span class="quotelev2">&gt;&gt;     ValidateStringLength(name, value, max_len=_MAX_STRING_LENGTH)
</span><br>
<span class="quotelev2">&gt;&gt;   File &quot;/base/python_lib/versions/1/google/appengine/api/datastore_types.py&quot;, line 1171, in ValidateStringLength
</span><br>
<span class="quotelev2">&gt;&gt;     (name, len(value), max_len))
</span><br>
<span class="quotelev2">&gt;&gt; BadValueError: Property data_message_size is 667 bytes long; it must be 500 or less. Consider Text instead, which can store strings of any length.
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; __________ Information from ESET NOD32 Antivirus, version of virus signature database 4861 (20100212) __________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The message was checked by ESET NOD32 Antivirus.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.esetnod32.ru">http://www.esetnod32.ru</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0487.php">Jeff Squyres: "Re: [MTT devel] More GDS questions"</a>
<li><strong>Previous message:</strong> <a href="0485.php">Jeff Squyres: "[MTT devel] extracting mca params"</a>
<li><strong>In reply to:</strong> <a href="0483.php">Igor Ivanov: "Re: [MTT devel] GDS errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0494.php">Igor Ivanov: "Re: [MTT devel] GDS errors"</a>
<li><strong>Reply:</strong> <a href="0494.php">Igor Ivanov: "Re: [MTT devel] GDS errors"</a>
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
