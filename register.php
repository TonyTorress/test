<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'database.php';


    $sql = "INSERT INTO users (fname, lname, username,pw,email)
          VALUES ('" . $_POST['fname'] . "','"
        . $_POST['lname'] . "','"
        . $_POST['username'] . "','"
        . $_POST['pw'] . "','"
        . $_POST['email'] . "')";

    $results = mysqli_query($conn, $sql);

    if ($results === false) {

        echo mysqli_error($conn);

    } else {

        $id = mysqli_insert_id($conn);
        echo "Inserted record with ID: $id";

    }

}

?>

<?php require 'pheader.php';?>
<?php session_start()?>
<?php var_dump($_SESSION); ?>
<h2>New User Registration</h2>

<form method="post">

    <div>
        <label for="fname">First Name</label>
        <input name="fname" id="fname">
    </div>

    <div>
        <label for="lname">Last Name</label>
        <input name="lname" id="lname">
    </div>

    <div>
        <label for="username">Username</label>
        <input name="username" id="username">
    </div>

    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw">
    </div>

    <div>
        <label for="email">Email</label>
        <input name="email" id="email">
    </div>

    <input type="submit" name = "submit" id="sub">

</form>

<?php require 'pfooter.php'; ?>
<?php
if(isset($_POST['submit'])){
        header("location:planapan_php.html");
        exit();

}
?>
