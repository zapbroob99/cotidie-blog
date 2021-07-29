<?php
session_start();
?>

<form action="" method="post">    
<input type="text" id="ttl" name="title" required>
  <textarea name="txtMessage"></textarea>
  <input type="radio" name="radio" value="sinema">sinema 
    <input type="radio" name="radio" value="mühendislik">mühendislik
    <input type="radio" name="radio" value="bilim">bilim
    <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" name="yolla">
</form>
<?php
if(isset($_POST['yolla'])) //gets inputs from form to send user.php
{
  $entry = $_POST['txtMessage']; 
  $slct = $_POST['radio']; 
  $ttl = $_POST['title']; 
  $_SESSION["data"] = $entry ;
  $_SESSION["s_slct"] = $slct ;
  $_SESSION["s_ttl"] = $ttl ;
  header("Location: user.php");
exit();
}
?>

         