<?php
$topdir = "../../..";
$title = "MPI_File_get_group(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_get_group</B>  -  Returns  a  duplicate  of the process group of a
       file.

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_get_group(MPI_File <I>fh</I>, MPI_Group <I>*group</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_GET_GROUP(<I>FH</I>, <I>GROUP</I>,  <I>IERROR</I>)
                  INTEGER    FH, GROUP, IERROR

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Group MPI::File::Get_group() const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       fh        File handle (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       group     Group that opened the file (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_get_group returns a duplicate of the group of the communicator
       used  to  open  the  file associated with <I>fh.</I>  The group is returned in
       <I>group.</I>   The   user   is   responsible   for   freeing   <I>group,</I>   using
       <a href="../man3/MPI_Group_free.3.php">MPI_Group_free</a>.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. For MPI I/O function errors, the default error handler  is  set
       to   MPI_ERRORS_RETURN.   The   error   handler  may  be  changed  with
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;     the     predefined      error      handler
       MPI_ERRORS_ARE_FATAL  may  be  used to make I/O errors fatal. Note that
       MPI does not guarantee that an MPI program can continue past an  error.

Open MPI 1.2                    September 2006    MPI_File_get_group(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
