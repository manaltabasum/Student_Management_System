<?php
include 'header.php';
include 'db.php';
?>
<div class="container ">
   <div class="row">
    <h2 class="mt-5 mb-5 ms-5 fst-italic ">Add new student info:</h2>
      <div class="col-md-6 offset-md-3 border border_secondary p-4 crud"
       style="background-color: rgba(127, 182, 244, 0.54)
        ;box-shadow: 2px 1px 8px gray;">
        <form method="POST" action="" enctype="multipart/form-data">
          <div class="mb-3">
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" 
            id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ID Number</label>
            <input type="text" class="form-control" name="phone" 
            id="exampleInputPassword1">
          </div>
          
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email"
             id="exampleInputEmail1" aria-describedby="emailHelp">
          <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Address</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" 
          name="address" rows="3"></textarea>
          </div>
           <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Department</label>
          <input class="form-control" id="exampleInputPassword1" name="department" 
          rows="3"></input>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
   </div>
</div>
<?php
if(isset($_POST["submit"])){
   $name = $_POST["name"];
   $email = $_POST["email"];
   $phone = $_POST["phone"];
   $address = $_POST["address"];
   $department = $_POST["department"];
   $my_data = "INSERT INTO `st_project` ( `name` , `email` , `phone`, `address`,
   `department`) 
    VALUES ('$name', '$email','$phone', '$address','$department')";
   $sql =  mysqli_query($db, $my_data);
   if($sql){
      // echo "Data inserted Successfully .";
      header("location:class-1.php");
      exit(); 
    }
   else{
      die("mysqli connection failed ") . mysqli_error($db);
   }
  } ?> <?php include('footer.php'); ?>
