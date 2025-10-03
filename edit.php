<?php  include ('db.php');
 include ('header.php'); ?>
<?php 
      if(isset($_GET['update'])){
        $theUpdateId = $_GET['update'];
        $sql = "SELECT * FROM st_project WHERE id = '$theUpdateId'";
        $allstd = mysqli_query($db,$sql);
        while($row = mysqli_fetch_assoc($allstd)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $address = $row['address'];
            $department = $row['department'];
        }
      } ?>
<!-- update table -->
<div class="container ">
    <div class="row">
      <div class="col-md-6 offset-md-3">
         <h1 class="mt-5 fst-italic"> Edit Student Info</h1>
       <form method= "POST" action="" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label" >Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1"
           aria-describedby="emailHelp" value="<?php echo $name ?>">
        </div>
       
         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">ID no. </label>
          <input type="text" name="phone" class="form-control"  value="<?php echo 
          $phone ?>" id="exampleInputPassword1">
        </div>
         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email </label>
          <input type="email" name="email" class="form-control"  value="<?php echo 
          $email ?>" id="exampleInputPassword1">
        </div>
         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Address </label>
           <textarea class="form-control" name="address"   id="exampleFormControlTextarea1"
            value="<?php echo $address ?>"  rows="3"><?php echo $address ?></textarea>
        </div>
         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Department </label>
           <textarea class="form-control" name="department"   id="exampleFormControlTextarea1
           " value="<?php echo $department ?>"  rows="3"><?php echo $department ?></textarea>
        </div>
        <button type="submit" name="updated" class="btn btn-primary mb-5">Submit</button>
  </form>
<!-- updated data inserted in table -->
 <?php
      if (isset($_POST['updated'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $department = $_POST['department'];
        $my_data = "UPDATE st_project SET name='$name' , email='$email', phone='$phone',address='$address'
         , department =  '$department' WHERE id='$theUpdateId'";
        $new_student = mysqli_query($db,$my_data);
        if($new_student){
           header("location:class-1.php");   
        }      
        else{
          die("mysqli connection failed" . mysqli_error($db));
        }
      } ?> 
    </div>
  </div>
</div>
<?php include('footer.php'); ?>