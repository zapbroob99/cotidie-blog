<!DOCTYPE html> 
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cotidie</title>
</head>
<body>
    <!-- Header Section -->
    <header  style="background-color:#1a1a1b;">       
        <div class="menu">
            
        <div class="menu">
    <div class="menu-log">
    <div onclick="location.href='index.php';" class="head1">
        Cotidie
        </div>
        </div>
        <a href=filmler.php>sinema</a>
        <a href=muhendislik.php>mühendislik</a>
        <a href=bilim.php>bilim</a>
        <a href=kultur.php>felsefe-kültür</a>
        
        
    </div>
    </header>      
    
    
    <?php
    if($_GET)
    {
        $id= $_GET["id"];
    }
   
   include("database.php");   
  $icerik=$conn->query("select * from article  WHERE article_id='$id' ");
    $icerik->execute();
    while($veriler=$icerik->fetch(PDO::FETCH_ASSOC))
    {
     $article_id=$veriler['article_id'];
     $article_text=$veriler['article_text'];
     $article_title=$veriler['article_title']; 
     ?>
   
     <?php
   }  
   ?>

<body style="  text-align: center;">
<h1> 
     <?php
           
     ?>  
 </h1>

</body>      
    <div class = "article_sec">   
        <section id="Content">  
            <h1>
            <?php
            echo $article_title;
            ?> 
            </h1>
             <p>
            <?php
            echo $article_text;
            ?>      
            
            
        </section>
    </div>
      
    
  
</body>
</html>  