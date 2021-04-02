<!DOCTYPE html>
<html>
<head>
  <title>PHP validation input</title>
</head>
<body>

    <?php
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $website = test_input($_POST["website"]);
      $comment = test_input($_POST["comment"]);
      $gender = test_input($_POST["gender"]);
  }

  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
  ?>

  <h3>PHP</h3>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h4></h4>
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