

<?php include "header.php"; ?>

      <div class="container py-5 my-5">


      
        <div class="row py-5 justify-content-center">
          <div class="col-8">

            <?php 

              $fileError = '';

              if(isset($_POST['next']) && isset($_POST['skill']) && isset($_POST['phone'])){

                  $fullname     = $_POST['fullname'];
                  $email        = $_POST['email'];
                  $phone        = $_POST['phone'];
                  $gender       = $_POST['gender'];
                  $address      = $_POST['address'];
                  $designation  = $_POST['designation'];

                  $skill = '';

                  $skills        = $_POST['skill']; 
                  foreach ($skills as  $skillList) {
                    $skill .= $skillList.' ';
                  }; 
                   
                  $status       = 0;  
                  $image_temp        = $_FILES['image']['tmp_name']; 
                  $imageName    = $_FILES['image']['name'];  
                  $imageSize =  $_FILES['image']['size'];
                  $imageType = array('png','jpg','jpeg'); 

                  $explode = explode('.', $imageName)  ; 

                  $imageName = $phone.'.'.end($explode);


                  if(in_array(end($explode), $imageType) ){


                    if($imageSize <= 2097152 ){


                       move_uploaded_file($image_temp, __DIR__.'/images/'. $imageName); 

                      $signupData = "INSERT INTO employee (`Fullname`, `Email`, `Username`, `Password`, `Phone`, `Gender`, `Address`, `Skill`, `Designation`, `Image`, `Status`) VALUES ('$fullname','$email','','','$phone','$gender','$address', '$skill','$designation','$imageName','$status')";

                      $signupDataInserted = mysqli_query($conn,$signupData);

                      if($signupDataInserted){
                         header('Location: index.php?next=do&email='.$email);
                      }


                    } else {

                      $fileError = "Please upload maximum size 2MB";
                    }



                  

                   } else {

                    $fileError =  "this file is not uploadable";

                  }



              }

            ?>
 
            
            <form action="" method="POST" enctype="multipart/form-data">

              <?php  
                  if(isset($_GET['signup'])){
                    $action  = $_GET['signup'];

                    if( $action == "do"){
              ?>

              <input required type="text" name="fullname" placeholder="Full Name" class="form-control mb-2">
              
              <input type="email" name="email" placeholder="Email Address" class="form-control mb-2">

               <input type="number" name="phone" placeholder="Phone Number" class="form-control mb-2"> 

              <textarea rows="6"  name="address" placeholder="Your Address" class="form-control mb-2 mt-2"></textarea>

              <strong>Designation</strong>
              <select name="designation" class="form-control mb-2 mt-2" >  

              <?php 
 
                  $designation =  mysqli_query($conn , "SELECT * FROM designation" );
                  while ( $designationList =  mysqli_fetch_assoc($designation)) {
              ?>
               <option value="<?php echo  $designationList['D_name']; ?>"><?php echo  $designationList['D_name']; ?></option> 
              <?php 
                  }

              ?>
              </select>

              <strong>Select your Skills</strong>

                <?php 

                  $skill =  mysqli_query($conn , "SELECT * FROM skill" );
                  while ( $skillList =  mysqli_fetch_assoc($skill)) {
                ?>
     
                <div class="form-check">
                  <input class="form-check-input" name="skill[]" type="checkbox" value="<?php echo $skillList['S_name'];?>" id="<?php echo $skillList['S_name'];?>">
                  <label class="form-check-label" for="<?php echo $skillList['S_name'];?>">
                    <?php echo $skillList['S_name'];?>
                  </label>
                </div>

                <?php 

                  }

                   ?>
 

              <input type="file" name="image"  class="form-control mb-2">
              <?php echo  '<span class="text-danger">'.$fileError.'</span>';?>

              <strong class="d-block">Select Your Gender</strong>
              <div class="form-check  form-check-inline">
                <input value="male" class="form-check-input" type="radio" name="gender" id="male">
                <label class="form-check-label" for="male">
                  Male
                </label>
              </div>
              <div class="form-check  form-check-inline">
                <input value="female" class="form-check-input" type="radio" name="gender" id="female" checked>
                <label class="form-check-label" for="female">
                  Female
                </label>
              </div>


               
               
              <input type="submit" name="next"  class="btn btn-success d-block" value="Next">


              <?php

                    }
                  } 


                ?>
 

                 <?php  
                  if(isset($_GET['next'])){
                    $action  = $_GET['next'];

                    if( $action == "do"){

              ?>

              <?php 

                $error = ''; 


                if(isset($_POST['signup']) && isset($_POST['checked'])){

                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $repassword = $_POST['repassword'];

                    $email = $_GET['email'];




                    if(strlen($username) < 11){

                      if($password != "" && $password ==  $repassword ){

                        $password = sha1($password);

                       $update =  "UPDATE employee SET `Username`='$username', `Password`='$password' WHERE Email = '$email'";
                      $done =  mysqli_query($conn,$update);

                        if($done){
                          header('Location: index.php');
                        }
                      } else {

                        $error = "border-danger";
                      }




                    } else { 
                      $error = "border-danger";
                    }

                  
                    
                }

             ?>

              <input type="text" name="username" placeholder="Enter Username" class=" <?php echo $error; ?> form-control mb-2">
              <input type="password" name="password" placeholder="Password" class=" <?php echo $error; ?>  form-control mb-2">
              <input type="password" name="repassword" placeholder="Retype Password" class=" <?php echo $error; ?>  form-control mb-2">
             
              <div class="form-check">
                <input class="form-check-input" name="checked" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  I Agreed all the <a href="#">Terms & Conditions</a> of the company
                </label>
              </div> 

              <input type="submit" name="signup"  class="btn btn-danger d-block" value="Sign Up">

              <?php 
            }
          }
          ?>

               

            </form>

            

          </div>
        </div>
      </div>







<?php include "footer.php"; ?>
