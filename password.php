 


<?php ob_start(); ?>

<?php include "header.php"; ?>

      <div class="container py-5 my-5">
        <div class="row py-5 justify-content-center">
          <div class="col-5">

          		<?php 
          			 if($_GET['reset']){
          			     $token = $_GET['reset'];
          			     
          			    
          			     
          			     if($_POST['resetpassword']){
          			         
          			         $password = $_POST['password'];
          			         $retype = $_POST['retype'];
          			         
          			         if($password == "" || $password != $retype ){
          			             echo  "password is not correct";
          			         } else {
          			              $password = sha1($password);
          			             
          			           $passwordUpdate =  mysqli_query($conn,"UPDATE employee SET `password`='$password', `reset` = ''  WHERE  reset  = '$token'");
          			           
          			           if($passwordUpdate){
          			               echo "password is now updated <a href='http://dailydhaka24.com/e_management/singin.php'>Now Sign In</a>";
          			               
          			               header('Location: http://dailydhaka24.com/e_management/password.php'); 
          			               
          			               
          			           }
          			             
          			         }
          			         
          			         
          			         
          			         
          			     }
          			     
          			     
          			     
          			 }
          		?>


          	<form class="" action="" method="POST"> 
          		<input type="password" name="password" placeholder="Enter your password" class=" form-control mb-2"> 
          		<input type="password" name="retype" placeholder="retype password" class=" form-control mb-2"> 

              	<input type="submit" name="resetpassword"  class="btn btn-danger d-block" value="update password">
              	 

          	</form>
          </div>
      </div>
  </div>

<?php include "footer.php"; ?>