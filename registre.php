<?php
$title = "Soufchat | Register";
include_once "./includes/header.php";
?>
<div class="container pb mt-5">
    <div class="row  justify-content-center">
        <div class="col-lg-6">
          
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div class="alert_msg"></div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
           
            <form method="POST" class="form-register" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" placeholder="first  name" name="firstname" id="firstname">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" placeholder="last name" class="form-control" name="lastname" id="lastname">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" placeholder="username" class="form-control" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" placeholder="email" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" placeholder="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-group upload-btn-wrapper">
                    <button class="btn_file">Upload Image</button>
                    <input type="file" class="file" name="image" id="image">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-register">Sign Up</button>
                </div>
            </form>
            <a href="login" class="btn btn-link">Already Have an Account</a>
        </div>
    </div>
    <script src="js/signup.js"></script>
</div>

<?php include_once "./includes/footer.php" ?>
