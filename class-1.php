<?php include 'db.php'; ?>
<!doctype html>
<html lang="en">
<?php
include 'header.php';
?>
<body>
    <h1 class="mt-3 mb-1 ms-5">Student Management System :</h1>
<?php
if(isset($_POST["submit"])){
   $name = $_POST["name"];
   $email = $_POST["email"];
   $phone = $_POST["phone"];
   $address = $_POST["address"];
   $department =  $_POST["department"];

   $my_data = "INSERT INTO `st_project` ( `name` , `email` , `phone`, `address`,`department`) 
    VALUES ('$name', '$email','$phone', '$address','$department')";
   $sql =  mysqli_query($db, $my_data);
   if($sql){
       echo "Data inserted Successfully .";
      header("Location: " . $_SERVER['PHP_SELF']);
      exit(); }
   else{
      die("mysqli connection failed ") . mysqli_error($db);
   } }?>
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3 mt-5">
         <table class="table table-bordered border-dark p-4 ">
            <thead>
                <tr class="bg-info p-4  border border-dark" >
                  <th scope="col">SI</th>
                  <th scope="col">Name</th>
                  <th scope="col">ID no.</th>
                  <th scope="col">Email Address</th>
                  <th scope="col">Address</th>
                  <th scope="col">Department</th>
                  <th scope="col">Action</th>
                </tr>
            </thead>
          <tbody >
            <?php 
            $sql = "SELECT * FROM st_project";
            $all_student = mysqli_query($db, $sql);
            $i = 0;
            while ($row = mysqli_fetch_assoc($all_student)){
              $id = $row['id'];
              $name = $row['name'];
              $phone = $row['phone'];
              $email = $row['email'];
              $address = $row['address'];
              $department = $row['department'];
              $i++; ?>
            <tr>
                <th scope="row" >  <?php echo $i ?>  </th>
                <td>  <?php echo $name ?>  </td>
                <td>  <?php echo $phone ?>  </td>
                <td>  <?php echo $email ?>  </td>
                <td>  <?php echo $address ?>  </td>
                <td>  <?php echo $department ?>  </td>
                <td>
                    <div class="action">
                        <ul>
                          <li><a href="edit.php?update=<?php echo $id; ?>"><i class="fa fa-edit "> </i></a></li>
                          <li><a href="class-1.php?delete=<?php echo $id; ?> "><i class="fa fa-trash"> </i></a></li>
                        </ul>
                    </div>
                </td>
              </tr>
              <?php } ?>
           </tbody>
          </table>
      </div>
          <div class="col-md-3 offset-md-3">
          <a href="upload.php" class="btn btn-primary"> Add New Info </a>
          </div>
      <?php  ?>
  </div>
</div>
<?php
  if (isset($_GET['delete'])){
    $dltitem = $_GET['delete'];
    $sqldelete = "DELETE FROM st_project WHERE id = '$dltitem'";
    $querydelete = mysqli_query($db,$sqldelete);
    if($querydelete){
      // header("location:class-1.php");      
    }
    else{
      die("Operation falied . " . mysqli_error($db));
    }
  }?> 
  <?php include('footer.php'); ?>
  </body>
</html>