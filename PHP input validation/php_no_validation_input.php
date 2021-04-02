<!DOCTYPE html>
<html>
<head>
  <title>PHP no validation input</title>
</head>
<body>

    <?php
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $website = $_POST["website"];
      $comment = $_POST["comment"];
      $gender = $_POST["gender"];
  }

  ?>

  <h3>PHP</h3>

  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <h4>htmlspecialchars() is not stated. enter in any field without spaces and submit: /< script>alert('hacked') < / script> </h4>
    <h4>stripslashes() is not stated. </h4>
    <h4>trim() is not stated. </h4>
    Name: <input type="text" name="name" /><br>
    E-mail: <input type="text" name="email" /><br>
    Website: <input type="text" name="website" /><br>
    Message: <textarea name="message" rows="5" cols="40"></textarea><br>

    Gender:<br>
    <input type="radio" name="gender" value="female">Female<br>
    <input type="radio" name="gender" value="male">Male<br>
    <input type="radio" name="gender" value="other">Other<br>
    <button type="submit">submit</button>
</form>

<?php
echo "<h2>Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>