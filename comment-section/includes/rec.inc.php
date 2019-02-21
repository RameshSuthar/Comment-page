<?php

      function getcomments($conn)
       {
        $sql = "SELECT * FROM tbl_comment";
         $result = $conn->query($sql);
         
         	while ($row = $result->fetch_assoc()) {
         		echo "<div class='comment-box'><p>";
         		    echo $row['comment_sender_name']."<br>";
         		    echo $row['date']."<br>";
         		    echo $row['email_id']."<br>";
         		    echo nl2br($row['comment']);
         		echo "</p></div>";
         	}
         
      }