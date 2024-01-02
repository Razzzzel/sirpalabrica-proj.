<?php
session_start();    
include('includes/header.php');
?>  

    <div class="container">

    <div class="row justify-content-center">
    <div class="col-xl-6 col-lg-16 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="code.php" method="POST">
        <div class="modal-body">
            

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
            <div class="modal-footer">
            <button type="submit" name="registeracbtn" class="btn btn-primary">Register</button>
        </div>
                                </a>
                                <hr>
                                <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                            </form>
                            <hr>

                            <div class="card-body">

  <?php
  if(isset($_SESSION['success']) && $_SESSION['success'] !='')
  {
    echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].' </h2>';
    unset( $_SESSION['success']);
  }

  if(isset($_SESSION['status']) && $_SESSION['status'] !='')
  {
    echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
    unset( $_SESSION['status']);
  }
  ?>

<div class="table-responsive"> 

<?php
$connection = mysqli_connect("localhost","root","","adminpanel");

$query = "SELECT * FROM register";
$query_run = mysqli_query($connection,$query);  

?>
                            
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php
include('includes/scripts.php');
?>