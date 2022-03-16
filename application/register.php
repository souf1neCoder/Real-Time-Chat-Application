<?php
session_start();
include_once "../config/database.php";
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$uname = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
if (!empty($fname) && !empty($lname) && !empty($email) && !empty($uname) && !empty($password)) {
    if (preg_match('/^[a-zA-Z][0-9a-zA-Z_]{2,23}[0-9a-zA-Z]$/', $uname)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $stmt = $db->prepare("select email from users where email = :email");
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                echo "This Email Already Exist";
            } else {
                // 
                if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
                    $image_name = $_FILES['image']['name'];
                    $image_type = $_FILES['image']['type'];
                    $image_tmp_name = $_FILES['image']['tmp_name'];
                    $image_explode = explode('.', $image_name);
                    $ext = end($image_explode);
                    $exts = ['png', 'jpeg', 'jpg'];
                    if(in_array($ext,$exts)){
                        $time = time();
                        $new_name_image = $time.$image_name;
                        if(move_uploaded_file($image_tmp_name,"../assets/images/".$new_name_image)){
                            $status = "Active Now";
                            $user_id = rand(time(),10000000);
                            $register = $db->prepare("insert into users (user_id,firstname,lastname,username,email,password,image,status) values(:user_id,:firstname,:lastname,:username,:email,:password,:image,:status)");

                            $register->bindParam(":user_id", $user_id);
                            $register->bindParam(":firstname", $fname);
                            $register->bindParam(":lastname", $lname);
                            $register->bindParam(":username", $uname);
                            $register->bindParam(":password", $password);
                            $register->bindParam(":image", $new_name_image);
                            $register->bindParam(":status", $status);
                            
                            $register->bindParam(":email", $email);
                            $register->execute();
                            // if(){
                                $stm = $db->prepare("select * from users where email = :email");
                                $stm->bindParam(":email", $email);
                                $stm->execute();
                                if ($stm->rowCount() > 0) {
                                   $user = $stm->fetch(PDO::FETCH_ASSOC);
                                   $_SESSION["user_id"] = $user["user_id"];
                                   echo "success";
                                }else{
                                    echo "Something wrong Please try Again";
                                }
                            // }

                        } 
                    }else {
                        echo "Image extention must be Jpeg,jpg,png";
                    }
                } else {
                    echo "Please Select an image";
                }
            }
        } else {
            echo "Email is Invalid";
        }
    } else {
        echo "Username must Contain Numbers & characters & Underscore(not in the end) and between 2-23 length";
    }
} else {
    echo "Please Fill all Fields";
}
