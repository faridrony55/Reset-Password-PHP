 


<?php ob_start(); ?>

<?php include "header.php"; ?>

      <div class="container py-5 my-5">
        <div class="row py-5 justify-content-center">
          <div class="col-5">

          		<?php 
          			$error = "";
          			if(isset($_POST['signin'])){

          				$username = trim($_POST['username']);
          				$password = trim($_POST['password']);

          				if($username == "" || $password == ""){

          					$error = 'border-danger';

          				} else {

          					$password = sha1($password);

          					$signIn =  mysqli_query( $conn ,"SELECT * FROM Employee WHERE Username = '$username' AND Password = '$password' ");

          					while($signInInfo = mysqli_fetch_array($signIn)){

          						$_SESSION['Eid']   		= $signInInfo['Eid'];
          						$_SESSION['Fullname'] 	= $signInInfo['Fullname'];
          						$_SESSION['Email'] 		= $signInInfo['Email'];
                      $_SESSION['Username']   = $signInInfo['Username']; 
                      $_SESSION['Password']   = $signInInfo['Password']; 
          						$_SESSION['Image'] 		= $signInInfo['Image'];
          						$_SESSION['Status'] 	= $signInInfo['Status'];




          						if($_SESSION['Username'] == $username && $_SESSION['Password'] == $password) {

          							 header('Location: checkin.php'); 
          						} else {
          							//header('Location: index.php');  
          						}


          					}

          				}


          			}
          		?>


          	<form class="" action="" method="POST"> 
          		<input type="text" name="username" placeholder="Enter Username" class=" <?php echo $error; ?> form-control mb-2">
              	<input type="password" name="password" placeholder="Password" class=" <?php echo $error; ?>  form-control mb-2">

              	<input type="submit" name="signin"  class="btn btn-danger d-block" value="Sign In">
              	
              	<a href="/e_management/reset.php">Forget Password!</a>

          	</form>
          </div>
      </div>
  </div>

<?php include "footer.php"; ?>