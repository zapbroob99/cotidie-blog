<html>
<body>
</a> 
</body>
</html>
<?php 
function check_category($input,$ttl,$id) {
  if ($input=='sinema'and basename($_SERVER['PHP_SELF'])=='filmler.php') {
    ?>
    <a  href="article.php?id=<?php echo $id ?>" > 
    <div class="head3"><?php echo" $ttl";  ?></div>  
    <?php   
  }  
  if ($input=='mühendislik'and basename($_SERVER['PHP_SELF'])=='muhendislik.php') {
    ?>
    <a  href="article.php?id=<?php echo $id ?>" > 
    <div class="head3"><?php echo" $ttl";  ?></div>  
    <?php   
  }  
} 
?>
<?php 
 include("database.php");   
$icerik=$conn->query("select * from article");
    $icerik->execute();
    while($veriler=$icerik->fetch(PDO::FETCH_ASSOC))
    {
     $article_id=$veriler['article_id'];
     $article_text=$veriler['article_text'];
     $article_title=$veriler['article_title']; 
     $article_topic=$veriler['article_topic']; 
     check_category( $article_topic,$article_title,$article_id);
   }  
   ?>


    

