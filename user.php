<?php // gets username and password from database
  include("database.php");    
   ob_start();
   session_start();
   $icerik=$conn->query("select * from user");
    $icerik->execute();
    while($veriler=$icerik->fetch(PDO::FETCH_ASSOC))
    {
     $username=$veriler['user_name'];
     $userpassword=$veriler['user_password'];
   
    }
?>
<?php //getting the entry from entry.php
$articlecontent=  $_SESSION['data'] ;
$articleselected=  $_SESSION['s_slct'] ;
$articletitle=  $_SESSION['s_ttl'] ;
echo $articlecontent;

?>

<?

   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

  

<html lang = "en">

   
   <head>
      <title>Admin Login</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: white;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: black;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h2{
            text-align: center;
            color: black;
         }
      </style>
      
   </head>
	
   <body>
      
      <h2>Add Entry</h2> 
      <div class = "container form-signin">
         
         <?php // checks if the username and password is correct
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == $username && 
                  $_POST['password'] == $userpassword) {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'session';
                  include("insert_entry.php");
                  echo "Success";
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">

      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username " 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password " required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Enter</button>	     
               
               

         </form>
         </div>                       
   </body>
</html>

