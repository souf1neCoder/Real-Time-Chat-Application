<?php
    $title = "Soufchat | Users";
    include_once "./includes/header.php";
if(!isset($_SESSION['user_id'])){
    header("location:login.php");
}

include_once "./config/database.php";
$stmt = $db->prepare("select * from users where user_id = :user_id");
$stmt->bindParam(":user_id", $_SESSION['user_id']);
$stmt->execute();
$row = $stmt->fetch();
?>
<div class="container pb ">
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="wrapper">
                <div class="users">
                    <header>
                        <div class="content">
                            <img src="./assets/images/<?php echo $row['image'] ?>" alt="image user">
                            <div class="details">
                                <span><?php echo $row['firstname'] . " " . $row['lastname']  ?></span>
                                <p><?php echo $row['status'] ?></p>
                            </div>
                        </div>
                        <a class="btn btn-dark" href="logout?logout_id=<?php echo $row['user_id'] ?>">Logout</a>
                    </header>
                    <div class="search">
                        <span class="text">
                           Start discussing with users
                        </span>
                        <input type="text" placeholder="Enter name to search...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                    <div class="users-list">

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<script src="js/users.js"></script>
<?php include_once "./includes/footer.php" ?>
