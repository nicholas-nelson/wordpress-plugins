<?php
   /*
   Plugin Name: Nick's Contact
   Plugin URI: http://career.nickanelson.com
   Description: My personal contact form for goDaddy server.
   Version: 0.0
   Author: Nick Nelson
   Author URI: http://career.nickanelson.com
   License: GPL2
   */
   
   
function form_creation(){
?>
<div class="contactpage">
<h4>CONTACT ME AT ANYTIME!</h4><br>

<?php echo $myError; ?>

<font color="red">
Required *
</font>

</p>

<!--<form name="myform" action="http://www.nickanelson.com/personal/careercontact.php" method="post" onsubmit="return validation();">

<b><font color="red">*</font>Name:</b> <input style="width: 400px;" name="yourname" type="text" />

<b><font color="red">*</font>Subject:</b> <input style="width: 400px;" name="subject" type="text" />

<b><font color="red">*</font>E-mail:</b> <input style="width: 400px;" name="email" type="text" />

<b><font color="red">*</font>Comments:</b>
<textarea cols="40" name="comments" rows="10"></textarea>

<br>
<input type="submit" value="SEND" />
<br>-->

<form action="http://www.nickanelson.com/personal/techcontact.php" method="post">

          <div class="form-group">
            <label for="contact-name"><font color="red">*</font>Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="text" class="form-control" id="contact-name" style="width: 400px;" name="name" placeholder="Enter your name.." onkeyup='validateName()'>
            <span class='error-message' id='name-error'></span>
          </div><br>

          <!--<div class="form-group">
            <label for="contact-phone"><font color="red">*</font>Phone:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="tel" class="form-control" id="contact-phone" style="width: 400px;" name="phone" placeholder="Ex: 1231231234" onkeyup='validatePhone()'>
            <span class='error-message' id='phone-error'></span>
          </div><br>-->

          <div class="form-group">
            <label for="contact-email"><font color="red">*</font>Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="email" class="form-control" id="contact-email" style="width: 400px;" name="email" placeholder="Enter Email" onkeyup='validateEmail()'>
            <span class='error-message' id='email-error'></span>
          </div><br>   

          <div class="form-group">
            <label for='contactMessage'><font color="red">*</font>Message:</label>
            <textarea class="form-control" rows="5" id='contact-message' style="width: 400px;"  name='message'  placeholder="Enter a brief message" onkeyup='validateMessage()'>
            </textarea>
            <span class='error-message' id='message-error'></span>
          </div>

        <br><button onclick='return validateForm()' class="btn btn-default">Submit</button>
        <span class='error-message' id='submit-error'></span>

</form>
<?php
}
add_shortcode('test', 'form_creation');
?>