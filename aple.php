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
.style7 {color: #FFFFFF}
.style8 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>
<?php

mysql_connect("localhost","root","");
mysql_select_db("tipe_hp");
$tabel_hp=mysql_query("select * from jenis_hp where nama_hp='APPLE'");
$panggil_hp=mysql_fetch_assoc($tabel_hp);


?>
<body>
<form id="form1" name="form1" method="get" action="">
  <table width="1093" height="468" border="0" align="center" cellpadding="0" cellspacing="0">
     <tr>
       <td height="203" colspan="5" background="gambar/header/header6.png" bgcolor="#99FF66"><span class="style5"></span>
     <tr>
       <td width="101" height="35"background="gambar/header/home.png"><div align="center"><a href="home.php">HOME</a>       </div>
      <td width="101" background="gambar/header/home.png"><div align="center"><a href="samsung.php">SAMSUNG</a>      </div>
      <td width="101" background="gambar/header/home.png"><div align="center"><a href="aple.php">APLE</a>      </div>
      <td width="101" background="gambar/header/home.png"><div align="center"><a href="tabulet.php">TABULET</a>      </div>
      <td width="689" bgcolor="#000000"><table width="485" border="0" align="right" cellpadding="0" cellspacing="0">
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
      <td height="199" colspan="7" bgcolor="#666666"><table width="1128" border="0">
          <tr>
            <td height="982" class="style7">
              <p align="left" class="style8">APPLE</p>
              <p>&nbsp;</p>
              <table width="1117" height="326" border="0">
                <? do {?>
                <tr>
                  <td width="207" height="115" rowspan="3"><div align="center"><? echo("$panggil_hp[nama_hp]"); ?></div></td>
                  <td width="1" height="10" rowspan="6">&nbsp;</td>
                  <td width="895">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="center"></div></td>
                </tr>
                <tr>
                  <td width="207" height="21"><div align="center"><? echo("$panggil_hp[tipe]"); ?></div></td>
                  <td>speksifikasi :</td>
                </tr>
                <tr>
                  <td height="22"><div align="center"><img src="gambar/png/<? echo("$panggil_hp[gambar]"); ?>" alt="1" width="191" height="204" /></div></td>
                  <td><? echo("$panggil_hp[spesifikasi]"); ?></td>
                </tr>
                
                <tr>
                  <td height="22"><div align="center"><? echo("$panggil_hp[harga]"); ?></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="22" colspan="3" bgcolor="#0000B0">&nbsp;</td>
                </tr>
                <? } while ($panggil_hp=mysql_fetch_assoc($tabel_hp)) ?>
              </table>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            <p>&nbsp;</p>              <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>            <p>&nbsp;</p></td>
          </tr>
        </table>
        <span class="style7">:</span></td>
    </tr>
            
            <tr>
              <td colspan="5">:::</td>
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
</body>
</html>
