<body onload="StartClock24()"  >
<script language="JavaScript">
<!--
function showFilled(Value) {
return (Value > 9) ? "" + Value : "0" + Value;
}
function StartClock24() {
  TheTime = new Date;
  document.clock.showTime.value = showFilled(TheTime.getHours()) + ":" + showFilled(TheTime.getMinutes()) + ":" + showFilled(TheTime.getSeconds());
  setTimeout("StartClock24()",1000)
}
//-->
</script>
  <form name="clock">
  <input name="showTime" size="12" style="border-style: none; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 12pt; background-color: transparent; color: rgb(255, 153, 0);" disabled="disabled" type="text">
 </form></body>  