<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>

<html>
<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
    $(function() {
    $( "#datepicker" ).datepicker();
    });
    </script>
</head>
<!-- register form -->
<form method="post" action="register.php" name="registerform">

    <label for="login_input_email">Your email : </label>
    <input id="login_input_email" class="login_input" type="email" name="user_email" required />

    <label for="login_input_password_new">Password (min. 6 characters) : </label>
    <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />

    <label for="login_input_password_repeat">Repeat password : </label>
    <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />

    <label for="login_input_fname"> First Name : </label>
    <input id="login_input_fname" class="login_input" type="text" name="user_fname" required>

    <label for="login_input_lname"> Last Name : </label>
    <input id="login_input_lname" class="login_input" type="text" name="user_lname" required>

    <label for="datepicker"> Date of Birth : </label>
    <input type="date" id="login_input_date" class="login_input" name="user_dob" required>

    <label for="login_input_sex"> Gender </label>
    <input type="radio" class="login_input" name="user_sex" id="login_input_sex" value="0">Male
    <input type="radio" class="login_input" name="user_sex" id="login_input_sex" value="1">Female

    <label for="login_input_city"> City : </label>
    <input type="text" id="login_input_city" class="login_input" name="user_city" required>

    <label for="login_input_country"> Country : </label>
    <select size="1" name="user_country" id="user_country" required> 
        <option selected value="India">India</option>
    </select>

    <input type="submit"  name="register" value="Register" />

</form>

<!-- backlink -->
<a href="index.php">Back to Login Page</a>
