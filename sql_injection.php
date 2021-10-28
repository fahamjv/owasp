<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    $mysqli = new mysqli("172.19.0.1", "root", "root", "ctf");
    
    // Check connection
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    if ( isset($_POST['uname']) and isset($_POST['psw']) ) {
        $username = $_POST['uname'];
        $password = $_POST['psw'];

        $query = "SELECT * FROM users where username = '".$username."' and password = '".$password."'";

        $result = $mysqli->query($query);

        if ($result->num_rows >= 1) {
            $result = $result->fetch_row();
            echo "User found!!! <br/>";
            var_dump($result);
        } else {
            echo "Unknown username or password";
        }
    }
?>

<pre>
for SQL injection test send these valuse to the backend:
    username = ' or '1'='1
    password = ' or '1'='1
</pre>
<hr>

<form action="" method="post" autocomplete="off">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <br>
    <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <br>
    <br>

    <button type="submit">Login</button>
  </div>
</form>

