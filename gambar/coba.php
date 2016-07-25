<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>adnimt</title>
<style type="text/css">
a:link {
	color:#FFFFFF;
	text-decoration:none;
	font-style: inherit
	}
<!--

.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
body {
	background-color: #000000;
}
.style5 {color: #EBEBEB}
.style9 {color: #FFFFFF; font-size: 18px; }
.style10 {color:#000000}
-->
</style>
</head>
<?php

mysql_connect("localhost","root","");
mysql_select_db("tipe_hp");
$tabel_hp=mysql_query("select * from jenis_hp");
$panggil_hp=mysql_fetch_assoc($tabel_hp);


?>
<body>
<form id="form1" name="form1" method="get" action="">
  <table width="957" height="675" border="0" align="center" cellpadding="0" cellspacing="0">
     <tr>
       <td height="203" colspan="5"><span class="style5"></span><img src="gambar/header/head1.png" width="954" height="210" />
  <tr>
       <td width="109" height="35"background="gambar/header/home.png"><div align="center"><a href="home.php">HOME</a>       </div>
      <td width="109" background="gambar/header/home.png"><div align="center"><a href="samsung.php"></a>      <a href="samsung.php" class="style10">SAMSUNG</a></div>
      <td width="109" background="gambar/header/home.png"><div align="center"><a href="aple.php">APLE</a>      </div>
      <td width="109" background="gambar/header/home.png"><div align="center"><a href="tabulet.php">TABULET</a>      </div>
      <td width="521" bgcolor="#000000"><table width="485" border="0" align="right" cellpadding="0" cellspacing="0">
         <tr>
           <td width="2" height="35"><a href="mailto:"></a></td>
           <td width="98"><div align="right"><span class="style4"><strong>searc</strong>h</span></div></td>
           <td width="10"><div align="right"><span class="style4">
             <label>:</label>
           </span></div></td>
           <td width="144"><span class="style4">
             <label>
             <input type="text" name="textfield" />
             </label>
           </span></td>
           <td width="55" bgcolor="#000000"><img src="gambar/header/cari.png" width="50" height="22" /></td>
           <td width="180"><table width="190" border="0" align="right">
             <tr>
               <td width="105"><div align="center"><span class="style4"><a href="registrasi.php">REGISTRASI</a></span></div></td>
               <td width="75"> <div align="center"><a href="login.php">LOGIN </a></div></td>
             </tr>
           </table></td>
         </tr>
       </table>
  <tr>
      <td height="376" colspan="7" bgcolor="#FFFFFF"><table width="944" height="370" border="0" align="center">
        <tr>
          <th width="160" valign="top" scope="col"><div align="left">KATEGORI : </div>
            </th>
          <th width="469" rowspan="6" scope="col">&nbsp;</th>
          <th width="301" rowspan="6" valign="top" scope="col"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="299" height="363" title="login">
            <param name="movie" value="flas/login.swf" />
            <param name="quality" value="high" />
            <embed src="flas/login.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="299" height="363"></embed>
          </object></th>
        </tr>
        <tr>
          <th valign="top" scope="col"><div align="left"><img src="gambar/header/tmbl3.png" width="99" height="108" border="0" usemap="#Map" /></div></th>
        </tr>
        <tr>
          <th valign="top" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <th valign="top" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <th valign="top" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <th valign="top" scope="col">&nbsp;</th>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="15" colspan="7" bgcolor="#FFFFFF"><img src="gambar/header/footer1.png" width="957" height="15" /></td>
  </tr>
            
            <tr>
              <td colspan="5" bordercolor="#000099" bgcolor="#000099"><div align="center"><span class="style9">:::elektronika.com</span></div></td>
            </tr>
  </table>
	  <p>&nbsp;</p></td>
      <td width="1" height="53">&nbsp;</td>
    </tr>
    <tr>
      <td height="123">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#000000">&nbsp;</td>
      <td width="10">&nbsp;</td>
    </tr>
  </table>
</form>

<map name="Map" id="Map">
<area shape="rect" coords="4,8,94,33" href="samsung.php" />
<area shape="rect" coords="5,41,94,70" href="aple.php" />
<area shape="rect" coords="7,77,94,103" href="tabulet.php" />
</map></body>
</html>
