<?php
  if (isset($_GET['lib']) || isset($_POST['lib'])) {
$lib = trim(isset($_POST['lib']) ? $_POST['lib'] : $_GET['lib']);
if (preg_match("/[^a-zA-Z0-9_]/", $lib)) { Header();exit;}}  
  if ($lib == "")
  { ?><ul>
 
 
<center><table  width="800" height="600" border="1" >
<tr><td width="25%" valign="center">
<center><script language="JavaScript1.2">
function reapply(){
setTimeout("slideit()",2000)
return true
}
window.onerror=reapply
</script>
<script language="JavaScript1.1">
<!--
var image1=new Image()
image1.src="1.jpg"
var image2=new Image()
image2.src="2.jpg"
var image3=new Image()
image3.src="3.jpg"
var image3=new Image()
image3.src="4.jpg"
//-->
</script>
</head>

<body onLoad="slideit()">
<a href="javascript:slidelink()"
onMouseover="window.status='Slide anh !';return true"
onMouseout="window.status=''">

<p><img src="3.jpg" name="slide" border="0" style="filter:blendTrans(duration=3)"></a> <script>
<!--

//Thay doi Tong so anh
var number_of_images=50
//Thay doi toc do (in seconds)
var speed=3
var step=1
var whichimage=1
function slideit(){
if (!document.images)
return
if (document.all)
slide.filters.blendTrans.apply()
document.images.slide.src=eval("image"+step+".src")
if (document.all)
slide.filters.blendTrans.play()
whichimage=step
if (step<number_of_images)
step++
else
step=1
if (document.all)
setTimeout("slideit()",speed*1000+3000)
else
setTimeout("slideit()",speed*1000)
}
function slidelink(){
if (whichimage==1)
window.location="http://localhost/"
else if (whichimage==2)
window.location="http://localhost/"
else if (whichimage==3)
window.location="http://localhost/"
}
//-->
</script></center></table></center>



</ul>
  <? } 
  else  
    {
	  include('module/library/' . $lib . '.php');	
	}

?>