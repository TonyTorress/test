<?php


        ?>
<?php require 'pheader.php';?>

    <h2>Login</h2>

    <form method="post" >
        <br>
        <div id="username">
            <label for = "username">Username</label>
            <input name="username" id="username">
        </div>
        <br>
        <div id="pw">
            <label for="pw">Password</label>
            <input type = "password" name = "password" id="pw">
        </div>
        <br>
        <div>
            <input type="submit" name="submit" id="sub">
        </div>


    </form>
    <?php require 'pfooter.php'; ?>
    <?php
        if(isset($_POST['submit'])){
            $un=$_POST['username'];
            $pw=$_POST['password'];

            if($un =='username' && $pw=='password'){
                header("location:planapan_php.html");
                exit();
            }
        }

    ?>




