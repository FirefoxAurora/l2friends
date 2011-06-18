<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title><?php echo $htitle; ?></title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	background-color: #000000;
	margin-bottom: 0px;
}
body,td,th {
	color: #333333;
}
.style1 {
	color: #CCCCCC;
	font-size: 12px;
}
a:link {
	color: #663333;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #663333;
}
a:hover {
	text-decoration: none;
	color: #990000;
}
a:active {
	text-decoration: none;
	color: #666666;
}
.style2 {
	color: #663333;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
.style3 {color: #663333}
.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
.style5 {
        font-family:  "Times New Roman", Times, serif;
	font-size: 24px;
	color: #FF9933;
        font-weight: bold;
}
-->
</style></head>

<body>
<table width="100%" height="423" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="396" height="423"><img src="skins/interlude2/images/top-left.jpg" width="396" height="423" /></td>
    <td width="100%" background="skins/interlude2/images/top-bg.jpg"><p align="center"><img src="skins/interlude2/images/logo.jpg" width="170" height="133" /></p>
    <p align="center"><span class="style8 style1"><font style="font-weight: bold; font-size: 12px; font-family: Tahoma,Verdana,Century Gothic;">
	
      <?include "blocks/stats.php";?>
Login Server: <?php echo $loginonline; ?><br />
Game Server: <?php echo $gameonline; ?><br />
Online: <?php echo $playsonline; ?><br />
Accounts: <?php echo $accountsnum; ?><br />
Characters: <?php echo $charnum; ?><br />
Clan: <?php echo $clannum; ?><br />
GameMasters: <?php echo $gmnum; ?> </font></strong></span></p>

    </td>
    <td width="515"><img src="skins/interlude2/images/top-rigth.jpg" /></td>
  </tr>
</table>
<table width="100%" height="479" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="12" height="479" background="skins/interlude2/images/left-border.jpg">&nbsp;</td>
    <td width="1000" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="231" height="243" valign="top">
          <table width="231" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="278" background="skins/interlude2/images/menu.jpg"><div align="left" class="style6 style2" id="menu" style="padding-left:55px; padding-right:10px; padding-top:0px"><span class="style4"><a href="index.php" class="style3">» Trang chủ</a><br>
                    <a href="index.php?id=library">» Luật chơi</a><br>
                    <a href="index.php?id=reg">» Đăng kí</a><br><a href="index.php?id=stat ">» Thống kê</a><br><a href="index.php?id=news">» Tin tức</a><br><a href="module/galereya/photoalbum.php">» Hình ảnh</a><br><a href="forum/index.html"target= \"_blank\">» Diễn đàn Sky</a><br><a href="index.php?id=start_lk ">» Tải về</a></span></div></td>
            </tr>

          </table>

          <table width="231" height="421" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td background="skins/interlude2/images/flag1.jpg"><div align="left" class="style6" id="div" style="padding-left:65px; padding-right:50px; padding-top:0px">
                <p align="center" class="style5">Top 10                   </p>
                <p>
                  <?php include("config/config.php"); include("blocks/top10.php");?>
                </p>
                </div>              </td>
            </tr>
          </table></td>
        <td width="77%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="49" height="66"><img src="skins/interlude2/images/main1.jpg" width="49" height="94" /></td>
            <td width="100%" background="skins/interlude2/images/main2.jpg">&nbsp;</td>
            <td width="41"><img src="skins/interlude2/images/main3.jpg" width="41" height="94" /></td>
          </tr>
          <tr>
            <td height="488" background="skins/interlude2/images/main4.jpg">&nbsp;</td>
            <td valign="top" background="skins/interlude2/images/main5.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
              <center><ul><? include("blocks/time.php");?></ul></center>
                <td><span class="content">
                  <?
if ($id != '')
include('module/'.$id . '.php');
else
{
include('modle/eror.php');
}
?>
                </span></td>
              </tr>
            </table></td>
            <td background="skins/interlude2/images/main6.jpg">&nbsp;</td>
          </tr>
          <tr>
            <td height="76"><img src="skins/interlude2/images/main7.jpg" width="49" height="76" /></td>
            <td background="skins/interlude2/images/main8.jpg">&nbsp;</td>
            <td><img src="skins/interlude2/images/main9.jpg" width="41" height="76" /></td>
          </tr>
        </table></td>
        </tr>
    </table></td>
    <td width="12" background="skins/interlude2/images/rigth-border.jpg">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="17"><img src="skins/interlude2/images/button1.jpg" width="17" height="350" /></td>
    <td width="398"><img src="skins/interlude2/images/button2.jpg" width="398" height="350" /></td>
    <td width="100%
	" background="skins/interlude2/images/button3.jpg"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center"><?php echo $fut; ?></p></td>
    <td width="291"><img src="skins/interlude2/images/button4.jpg" width="420" height="350" /></td>
    <td width="12"><img src="skins/interlude2/images/button5.jpg" width="15" height="350" /></td>
  </tr>
</table>
</body>
</html>
