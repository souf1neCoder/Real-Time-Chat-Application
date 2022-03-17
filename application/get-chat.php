<?php
session_start();
if (isset($_SESSION['user_id'])) {
    include_once "../config/database.php";
    $going = $_SESSION['user_id'];
    $coming = $_POST['incoming_id'];
    $output = "";
    $stmt = $db->prepare("select * from messages
   left join users on users.user_id = messages.going
   where (going = :going and coming = :coming) or (going = :coming and coming = :going) order by msg_id");
    $stmt->bindParam(":coming", $coming);
    $stmt->bindParam(":going", $going);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch()) {
            if ($row['going'] === $going) {
                $output .= '<div class="chat outgoing">
            <div class="details">
                <p>' . $row['msg'] . '</p>
            </div>
        </div>';
            } else {
                $output .= '<div class="chat incoming">
            <img src = "assets/images/' . $row['image'] . '">
            <div class="details">
                <p>' . $row['msg'] . '</p>
            </div>
        </div>';
            }
        }
        echo $output;
    }
} else {
    header("../login");
}
