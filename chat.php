<?php
$title = "Soufchat | Chat";
include_once "./includes/header.php";
if (!isset($_SESSION['user_id']) || !isset($_GET['user_id'])) {
  header("location: login");
}
include_once "./config/database.php";
$user_id = $_GET['user_id'];
$stmt = $db->prepare("select * from users where user_id = :user_id");
$stmt->bindParam(":user_id", $user_id);
$stmt->execute();
$row = $stmt->fetch();
?>
<div class="container pb">
  <div class="row  my-5  justify-content-center">
    <div class="col-lg-8 col-md-10">
      <div class="wrapper">
        <section class="chat-area">
          <header>


            <a href="users" class="back-icon"><i class="fas fa-arrow-left"></i></a>
            <img src="assets/images/<?php echo $row['image'] ?>" alt="">
            <div class="details">
              <span><?php echo $row['firstname'] . " " . $row['lastname']  ?></span>
              <p><?php echo $row['status'] ?></p>
            </div>
          </header>
          <div class="chat-box">

          </div>
          <form action="#" class="typing-area" autocomplete="off">
            <input type="text" name="outgoing_id" hidden value="<?php echo $_SESSION['user_id'] ?>">
            <input type="text" name="incoming_id" hidden value="<?php echo $user_id ?>">
            <input type="text" name="message" class="input-field" placeholder="Type a message here...">
            <button><i class="fab fa-telegram-plane"></i></button>
          </form>
        </section>
      </div>

      <script src="js/chat.js"></script>
    </div>
  </div>
</div>
<?php include_once "./includes/footer.php" ?>
