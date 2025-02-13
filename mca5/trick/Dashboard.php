<?php
session_start();
if($_SESSION["usernm"]=="")
header("Location:index.php");
?>
<HTML>
<BODY>
<h1 align="center">ADMIN DASHBOARD</h1>
<HR>
<TABLE BORDER="0" WIDTH="100%" HEIGHT="600">
<TR>
<TD WIDTH="30%" VALIGN="TOP">
COURSE
<UL>
<LI><A HREF="frm5.php" target="cont">ADD</A></LI>
<LI><A HREF="db7.php" target="cont">LIST</A></LI>
</UL>
STUDENT
<UL>
<LI><A HREF="studFrmIns.php" target="cont">ADD</a></LI>
<LI><A HREF="studList.php" target="cont">LIST</a></LI>
</UL>
<A HREF="mytrick.php?mych=5">LOGOUT</A>
</TD>
<TD WIDTH="70%" valign="top">
<iframe name="cont" width="100%" height="400" frameborder="0"></iframe>
</TD>
</TR>
</TABLE>
</BODY>
</HTML>