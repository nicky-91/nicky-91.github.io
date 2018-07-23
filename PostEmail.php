<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Post Email</title>
  </head>

  <body>
      
    <?php
          $myEmailAddress = "nixonochieng91@gmail.com";
          $subject = "Question form My Web Page";

          $name = $_POST['Name'];
          $email = $-POST['Email'];
          $message = $_POST['Message'];
          $header = "from: $name <$email>";

          mail($myEmailAddress, $subject, $message, $header);

    ?> 
      <p>Thanks for Sending.</p> 

  </body>

</html>