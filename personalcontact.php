<?php
/* Set e-mail recipient */
$myemail  = "nick@nickanelson.com";

/* Check all form inputs using check_input function */
$yourname = check_input($_POST['name'], "ENTER YOUR NAME");
/*$phone  = check_input($_POST['phone'], "Enter Phone Number");*/
$email    = check_input($_POST['email']);
/*$website  = check_input($_POST['website']);
$likeit   = check_input($_POST['likeit']);
$how_find = check_input($_POST['how']);*/
$comments = check_input($_POST['message'], "WRITE YOUR COMMENT");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}

/* If URL is not valid set $website to empty
if (!preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i", $website))
{
    $website = '';
}*/

/* Let's prepare the message for the e-mail */
$message = "Hello!

Your contact form has been submitted by:

Name: $yourname
E-mail: $email

Comments:
$comments

End of message
";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: http://www.nickanelson.com/blog/thanks/');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
<!html doctype>
<head><title>ERROR</title></head>
<body>
<div>
Please Correct the Following:<br>
<font color="red">
<?php echo $myError; ?>
</font><br>
<a href="http://www.nickanelson.com/blog/contact/">GO BACK</a>
</div>
</body>
</html>
<?php
exit();
}
?>