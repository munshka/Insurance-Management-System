<?php

include 'connection.php';

if(isset($_POST['submit'])){ //if sumbit is used then isset will get 1

   $agent_id = mysqli_real_escape_string($conn, $_POST['agent_id']);
   $agent_password = mysqli_real_escape_string($conn, $_POST['agent_password']);
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $branch = mysqli_real_escape_string($conn, $_POST['branch']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);

   //mysqli_query gives a bool value
   $select_users = mysqli_query($conn, "SELECT * FROM `agent` WHERE agent_id = '$agent_id' AND agent_password = '$agent_password'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      mysqli_query($conn, "INSERT INTO `agent`(agent_id,agent_password,name,branch,phone) VALUES('$agent_id','$agent_password', '$name', '$branch','$phone')") or die('query failed');
      $message[] = 'registration complete!';
      header('location:index.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>



<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" postion="relati" onclick="this.parentElement.remove();"></i>  
      </div>
      ';
   }
}
?>
   


<div class="form-box">
   <form action="" method="post">
      <h3>register now</h3>
      <input type="text" name="agent_id" placeholder="enter your id" required class="box">
      <input type="text" name="name" placeholder="enter your name" required class="box">
      <input type="text" name="branch" placeholder="enter your branch" required class="box">
      <input type="phone" name="phone" placeholder="enter your phone" required class="box">
      <input type="password" name="agent_password" placeholder="enter your password" required class="box">
      <input type="submit" name="submit" value="register now" class="btn">
      <p>Already have an account? <a href="login.php">login now</a></p>
   </form>
</div>



</body>
</html>