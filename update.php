<?php 

// 	include("config/config.php");


//  if(isset($_POST['upId']) && !empty($_POST['upId'])){

// 	$id = $_POST['upId'];


// 	$sql = "SELECT * FROM student WHERE stdid='$id'";

// 	$result = mysqli_query($con,$sql);

// 	if(mysqli_num_rows($result)>0){

// 		while ($row = mysqli_fetch_assoc($result)) {
			
// 			echo '<h1>Update Student</h1>
				
// 				<b id="feedback" class="alert-success"></b>

// 			    <form target="" method="post" id="update_student">
			
// 			  <div class="form-row" novalidate>
// 			    <div class="col-md-6 mb-3">
// 			      <label for="validationDefault01">Name</label>
// 			      <input type="text" class="form-control" id="validationDefault01" name="name" placeholder="Name" value='.$row["name"].' required>
// 			    </div>
// 			    <div class="col-md-6 mb-3">
// 			      <label for="validationDefaultUsername">Class</label>
// 			      <div class="input-group">
// 			        <input type="text" class="form-control" id="validationDefaultUsername" name="class" placeholder="Username" aria-describedby="inputGroupPrepend2"  value='.$row["class"].' required>
// 			      </div>
// 			    </div>
// 			  </div>
// 			  <div class="form-row">
// 			    <div class="col-md-6 mb-3">
// 			      <label for="validationDefault03">City</label>
// 			      <input type="text" class="form-control" id="validationDefault03" placeholder="City" name="city" value='.$row["city"].' required>
// 			    </div>
// 			    <div class="col-md-6 mb-3">
// 			      <label for="validationDefault04">Phone</label>
// 			      <input type="text" class="form-control" id="validationDefault04" name="phone" placeholder="State" value='.$row["phone"].' required>
// 			    </div>
// 			  </div>
			 
// 			 <input type="hidden" name="std_id" value='.$row["stdid"].'>	
			 
// 			 <button class="btn btn-primary" type="submit" name="submit">Update Student</button>
			  
// 			<span class="btn btn-primary" id="cancel">Cancel</span>
// 			</form>
			
// 			';
			
// 		}

// 	}else{
// 		echo"<tr><td>No Record Found</td></tr>";
// 	}

// }
?>