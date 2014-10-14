<!DOCTYPE html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title><?php
echo "انتقال دهنده فایل";
?></title>
<script src="help.js">
</script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
 
<style type="text/css"> 
#panel,#flip
{
padding:5px;
text-align:center;
background-color:#e5eecc;
border:solid 1px #c3c3c3;
}
#panel
{
padding:50px;
display:none;
}
</style>
</head>
<body>
<img class="logo" src="http://www.xscript.ir/wp-content/themes/xscriptv1/logo.png"><br><br>
<div class="sib">
<?php
if ($_GET[upload]) {
if ($_POST[from] == "") {
print "یادتان رفته لینک را وارد کنید";
} else {
copy("$_POST[from]", "$_POST[to]");
$size = round((filesize($_POST[to])/1000000), 3);
print "انتقال با موفقیت به پایان رسید<br>
<a><a href=\"$_POST[from]\">$_POST[from]</a><br>
<a><a href=\"$_POST[to]\">$_POST[to]</a> : $size MB";
}
} else {
print "<form action=\"$PHP_SELF?upload=true\" method=post>
ادرس  فایل مورد نظر: <input name=from><br>
نام فایل مورد نظر: <input name=to><br>
<input type=submit value=\"انتقال بده !\">";
}
?>
<br>
<a href="#panel"> <div id="flip">اگر نیاز به اموزش دارید اینجا را کلیک کنید</div></a>
<div id="panel">در قسمت ادرس فایل مورد نظر ادرس فایلی که می خواهید به سایت شما منتقل شود را وارد کنید <br><br><p style="color:red;"> در قسمت نام فایل مورد نظر نام فایل را وارد کنید مثلا  شما دوست دارید نام فایل XScript شود در کادر دوم انرا وارد کنید تا با این نام در هاست شما وارد شود</div></p>
</div>
<center><b> Script By : <a href="http://xscript.ir"> Xscript.ir </a> </b> </center>
</body>
</html>
<!-- Script by : Www.xscript.ir -->