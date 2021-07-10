 
<?php include "header.php"; ?>

	
	 <div class="container py-5 my-5">
        <div class="row py-5 justify-content-center">
          <div class="col-8">

          	<?php 
          	if (isset($_GET['edit'])) {

          		$eid = $_GET['edit'];
          	?> 

          	<?php 

          		$EmployeeInfo = mysqli_query($conn , "SELECT * FROM Employee WHERE Eid = '$eid' ");
          		while($EmployeeAllInfo = mysqli_fetch_assoc($EmployeeInfo)){

          			$Fullname =  $EmployeeAllInfo['Fullname'];
          			$Email =  $EmployeeAllInfo['Email'];
          			$Username =  $EmployeeAllInfo['Username'];
          			$Phone =  $EmployeeAllInfo['Phone'];
          			$Gender =  $EmployeeAllInfo['Gender'];
          			$Address =  $EmployeeAllInfo['Address'];
          			$Skill =  $EmployeeAllInfo['Skill'];
          			$Designation =  $EmployeeAllInfo['Designation'];
          			$Image =  $EmployeeAllInfo['Image']; 

          	?>


          	<form action="" method="POST" enctype="multipart/form-data"> 

              <input required type="text" name="fullname" value="<?php echo $Fullname; ?>" class="form-control mb-2">
              
              <input type="email" name="email" value="<?php echo $Email; ?>" class="form-control mb-2">

               <input type="number" name="phone" value="<?php echo $Phone; ?>" class="form-control mb-2"> 

              <textarea rows="6"  name="address" value="<?php echo $Address; ?>" class="form-control mb-2 mt-2"></textarea>

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
              
              <img class='userimg' src='images/<?php echo $Image; ?>'>
              <input type="file" name="image"  class="form-control mb-2">

              

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

              </form>

             <?php 
		         } 
		     } else { 
     		?> 

          	<?php 
          	echo "<h2>".$_SESSION['Eid']."</h2>" ;  		 
			echo "<h2>Fullname: ".$_SESSION['Fullname']."</h2>";  
			echo "<h2>Email: ".$_SESSION['Email']."</h2>" 	;	  
			echo "<img class='w-25' src='images/".$_SESSION['Image']."'>" ;

			if($_SESSION['Status'] == 1){
				echo "<h4 class='text-primary'>Status: Active </h4>" ;	
			}	else {

				echo "<h4 class='text-danger'>Status: Inactive </h4>" ;	
			}	 
			 

          	?>


          	<a href="profile.php?edit=<?php echo $_SESSION['Eid']; ?>">Edit</a>
          <?php } ?>


          </div>
      </div>
  </div>

<?php include "footer.php"; ?>