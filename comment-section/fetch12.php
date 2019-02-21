<?php
    include 'includes/rec.inc.php';
    include_once 'includes/dbh1.inc.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>FEEDBACK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="commentstyle.css">
  </head>
  <body>
       <h1>FEEDBACK</h1>
       <div class="container">
    <form action='includes/fetch.inc.php' method='POST' class='imp'>
         

        <input type='text' name='username' placeholder='username' required>
        <br>
       
        <input type='text' name='email' placeholder='E-mail' required>
        <br>
        <textarea type='text' name='comment' class='abc' placeholder='comment...' required></textarea>
        <br>
       
        <button type='submit' name='commentsubmit'>Submit</button>
  	 </form>
     
    <div class="sub">
    <?php
      getcomments($conn);
      ?>
    </div>
  </div>
    

  </body>
</html>