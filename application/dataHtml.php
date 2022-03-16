<?php
while($row = $list->fetch(PDO::FETCH_ASSOC)){
    // 
    $stmt = $db->prepare("select * from messages where (coming = :user_id or going = :user_id) and (going = :going or coming = :going) order by msg_id desc limit 1");
    $stmt->bindParam(":user_id",$row['user_id']);

    $stmt->bindParam(":going",$going);
    $stmt->execute();
    $row2 = $stmt->fetch();
    if($stmt->rowCount() > 0){
        $result = $row2["msg"];
    }else{
        $result = "No message available";
    }
    (strlen($result) > 28) ? $msg = substr($result, 0, 28) . '...' : $msg = $result;
    // 
    if (isset($row2['going'])) {
        ($going == $row2['going']) ? $you = "You: " : $you = "";
      } else {
        $you = "";
      }
    // 
    ($row['status'] == "Offline now") ? $offline = "offline" : $offline="";
    // 
    $output .= '
    
    <a href="chat?user_id=' . $row['user_id'] . '">
    <div class="content">
      <img src="assets/images/' . $row['image'] . '" alt="">
      <div class="details">
          <span>' . $row['firstname'] . " " . $row['lastname'] . '</span>
          <p>' . $you . $msg . '</p>
      </div>
    </div>
  </div>
  <div class="status-dot ' . $offline . '"><i class="fas fa-circle"></i></div>
</a>
    
    ';
}