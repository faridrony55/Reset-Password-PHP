 


<?php ob_start(); ?>

<?php include "header.php"; ?>

      <div class="container py-5 my-5">
        <div class="row py-5 justify-content-center">
          <div class="col-5">

          		<?php 
          			$message = "";
          			if(isset($_POST['resetpassword'])){

          			    $Email = $_POST['resetemail'];
          			    
          			    $query_email = mysqli_query($conn, "SELECT * FROM employee WHERE Email = '$Email'");
          			    
          			    while( $emailData =  mysqli_fetch_array($query_email)){
          			            
          			           $valid_mail =  $emailData['Email'];
          			           
          			           if($valid_mail == $Email){
          			                
          			                $ticket = sha1($valid_mail).rand(786,98794898);
          			                
          			               $ticketing = mysqli_query($conn,"UPDATE employee SET `reset`='$ticket'  WHERE  Email  = '$valid_mail'");
          			               
          			               if($ticketing){
          			                   
          			                   $msg = 'To reset your password please click this link  <a href="http://dailydhaka24.com/e_management/password.php?reset='.$ticket.'">'.$ticket.'</a>';
          			                   
          			                    mail($valid_mail,"reset password",$msg);
          			                   
          			                   
          			                   
                                		
		
          			               }
          			               
          			           }  
          			        
          			        
          			    }
          			    
          			    
          			    
          			    
                        
          			 


          			}
          		?>


          	<form class="" action="" method="POST"> 
          		<input type="email" name="resetemail" placeholder="Enter your email address" class=" form-control mb-2"> 

              	<input type="submit" name="resetpassword"  class="btn btn-danger d-block" value="Request a Password">
              	
              	<a href="/e_management/signin.php">I have Password</a>

          	</form>
          </div>
      </div>
  </div>

<?php include "footer.php"; ?>