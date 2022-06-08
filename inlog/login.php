<?php
// start de sessie
session_start();

// check of de user al ingelogd is, zoja naar we welcome.php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}

// bevat connect pagina
require_once "connect.php";

// defineer de variabele en hou het leeg
$username = $password = "";
$username_err = $password_err = "";

// data naar database
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check of de username leeg is
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check of het wachtwoord leeg is
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
// cookies
$cookie_name = "user";
setcookie($cookie_name, time() + (86400 * 30), "/"); // 86400 = 1 dag

    // check invoer
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
global $link;
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // parameters
            $param_username = $username;

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                // Check of de username bestaat, zo ja verifieer wachtwoord
                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, dus start een nieuwe sessie
                            session_start();

                            // zet data in sessie variabele
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // stuur naar welcome.php
                            header("location: welcome.php");
                        } else{
                            // laat zien als het wachtwoord fout is
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // laat zien als de username fout is
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // sluit statement
            mysqli_stmt_close($stmt);
        }
    }

    // sluit connectie
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div class="wrapper">
    <h2>Login</h2>
    <p>Please fill in your credentials to login.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <label>Username</label>
            <label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
            </label>
            <span class="help-block"><?php echo $username_err; ?></span>
        </div>
        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <label>Password</label>
            <label>
                <input type="password" name="password" class="form-control">
            </label>
            <span class="help-block"><?php echo $password_err; ?></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
        <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
    </form>
</div>
</body>
</html>