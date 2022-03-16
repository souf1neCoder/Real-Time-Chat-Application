<?php include_once "./includes/header.php" ?>
<div class="container pb">
    <div class="row mt-5">
        <div class="col-lg-7 mt-5">
            <div class="bg_home p-2">
                <img src="./assets/bg-home.png" alt="">
            </div>
        </div>
        <div class="col-lg-5 mt-5">
            <div class="main-home p-2">
                <h2>real time chat application</h2>
                <h1><span><i class="fab fa-rocketchat"></i> Souf</span>chat <br> for you</h1>
                <h3>talk With all your freedom.</h3>
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <a class="btn btn-signin mt-3" href="users">Chat Now</a>
                <?php else : ?>
                    <a class="btn btn-signin mt-3" href="registre">Sign Up Now</a>
                <?php endif; ?>
                
            </div>
        </div>

    </div>
    <div class="ligne"></div>
    <div class="row padding mt-5">
        <div class="col-lg-4 mt-5">
            <div class="main-home">
                <h2>hi<br>angela How<br>Are you?</h2>
                <h2 class="left_msg">All right, and you?</h2>
                <h2>I'm fine</h2>
                <h2 class="left_msg">see you later</h2>

            </div>
        </div>
        <div class="col-lg-8">
            <div class="bg_home p-2">
                <img src="./assets/bg-home1.png" alt="">
            </div>
        </div>
    </div>
    <div class="ligne"></div>
    <div class="row padding mt-5">
        
        <div class="col-lg-8">
            <div class="bg_home p-2">
                <img src="./assets/bg-home3.png" alt="">
            </div>
        </div>
        <div class="col-lg-4 mt-5">
            <div class="main-home">
                <h2>What about<br>ideas?</h2>
                <h2 class="left_msg">keys of futur</h2>
                <h2>absolutely</h2>
                

            </div>
        </div>
    </div>

</div>
<footer class="footer-main text-center">
        <p><a href="index.php"><span><i class="fab fa-rocketchat"></i> Souf</span>chat</a> created by Soufiane m'channa with &#10084;</p>
    </footer>
<?php include_once "./includes/footer.php" ?>
