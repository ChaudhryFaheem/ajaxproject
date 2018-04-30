<?php include('header.php'); ?>

  


  <div id="container">

    <h1>Add Student</h1>

    <form target="" method="post" id="add_student">

  <div class="form-row" novalidate>
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Name</label>
      <input type="text" class="form-control" id="validationDefault01" name="name" placeholder="Name"  required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefaultUsername">Class</label>
      <div class="input-group">
        <input type="text" class="form-control" id="validationDefaultUsername" name="class" placeholder="Class" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">City</label>
      <input type="text" class="form-control" id="validationDefault03" placeholder="City" name="city" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault04">Phone</label>
      <input type="text" class="form-control" id="validationDefault04" name="phone" placeholder="Phone" required>
    </div>
  </div>
 
  <button class="btn btn-primary" type="submit" name="submit">Add Student</button>
</form>
<span id="submitMsg"></span>
<br>

  <div id="updateData">
      

</div>
  <br>
  
    <table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Class</th>
        <th>City</th>
        <th>Phone</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <tbody id="showStudents">
      
    </tbody>


  </table>


    

  </div>



<?php include('footer.php'); ?>