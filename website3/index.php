<?php
//check for the submit
$msg = "";
$msgClass = "";

if (filter_has_var(INPUT_POST, 'submit')) {
    //get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    // check required field
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Paased
        // check email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            //Failed
            $msg = "Please Enter a valid Email";
            $msgClass = 'alert-danger';
        } else {
            //passed
            //Recipeint Email
            $toEmail = '';
            $subject = 'Contact Request From' . $name;
            $body = '<h2>Contact Request </h2>
            <h4> Name</h4> <p>' . $name . ' </p>';
            //Email Headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-TYpe:text/html; charset=UTF-8" . "\r\n";
            //Addtional, Header
            $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";
            if (mail($toEmail, $subject, $body, $headers)) {
                $msg = "Email Sent";
                $msgClass = 'alert-success';
            } else {
                $msg = "Email Failed";
                $msgClass = 'alert-danger';
            }
        }
    } else {
        $msg = "Please Fill in all Fields";
        $msgClass = 'alert-danger';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cosmo/bootstrap.min.css" integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d" crossorigin="anonymous">
    <title>Contact Us</title>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">
                    <a href="index.php" class="navbar-brand"> My Website</a>

                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if ($msg != '') : ?>

            <div class="alert  <?php echo $msgClass; ?>">
                <?php echo $msg; ?>
            </div>
        <?php endif; ?>
        <form>
            <input value="<?php echo isset($_POST['name']) ? $name : ''; ?>" />
        </form>
    </div>
</body>

</html>