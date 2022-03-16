<?php
$title = "Soufchat | Login";
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
           
            <form method="POST" class="form-login">
               
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" placeholder="email" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" placeholder="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-login">Sign Up</button>
                </div>
            </form>
            <a href="registre" class="btn btn-link">Need create An Account</a>
            <script src="js/login.js"></script>
        </div>
    </div>
</div>
<?php include_once "./includes/footer.php" ?>

