<?php

        include_once 'dbh1.inc.php';
         
         $first = mysqli_real_escape_string($conn, $_POST['username']);
          
         $email = mysqli_real_escape_string($conn, $_POST['email']);
         $comment = mysqli_real_escape_string($conn, $_POST['comment']);
        


         $sql = "INSERT INTO tbl_comment (comment_sender_name, email_id, comment)
                 VALUES (?, ?, ?);";

        
         $stmt = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($stmt, $sql)) {
             echo "SQL error";
         }else{
            mysqli_stmt_bind_param($stmt, "sss", $first, $email,$comment);
            mysqli_stmt_execute($stmt);
         }
         
         header("Location: ../fetch12.php?submit=success");
         
     ?>