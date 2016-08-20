<html>

<head>
    <meta datatype="utf8">
<?php
$servername = "localhost";
$username = "bailey";
$password = "zhouli@2016";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(!empty($_POST[firstname])) {
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]')";
}
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        firstname:<input name="firstname" type="text"/><br>
        lastname:<input name="lastname" type="text"/><br>
        email:<input name="email" type="text"><input type="submit" name="submit" value="Submit">
    </form>

</body>
<html>
