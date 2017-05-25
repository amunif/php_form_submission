<?php 
if(isset($_POST['submit'])){
    $to = "arshan_munif@hillspet.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['full_name'];
    $pet_name = $_POST['pet_name'];
    $pet_gender = $_POST['pet_gender'];
    $phone_number = $_POST['phone'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $full_name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
	@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: #FFFFF;
}

.logo{
display: block;
margin: 0 auto;
width: 150px;
}

.logo img{
width: 170px;
height: 170px;
position: relative;
top: 20px;
padding-bottom: 0px;
}

.container {
  max-width: 500px;
  width: 100%;
  margin: 0 auto;
  padding: 0px;
  position: relative;
  top: -80px;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="text"],
#contact input[type="text"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 20px;
  font-weight: 300;
  margin-bottom: 5px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 14px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="text"],
#contact input[type="text"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="text"]:hover,
#contact input[type="text"],
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 150px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #151B54;
  color: #FFFFFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}

  </style>
 
</head>
<header>
    <h1></h1>
        <div class="logo">
            <img src ="https://www.brandsoftheworld.com/sites/default/files/styles/logo-original-577x577/public/052010/logo_hills_0.gif?itok=31f16hr5" height="175px" width="175px">
        </div>
</header>

<body>




<div class="container">  
  <form id="contact" action="" method="post">
	


	<h1> Hill's Pet Nutrition Vet Help</h1>

    <h3>CONTACT US</h3>
    <h4>Please fill out the form and describe your issue below</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="full_name" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" name="phone" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Pet's Name (optional)" type="text" name="pet_name" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Pet's Gender (M or F)" type="text" name="pet_gender" tabindex="5" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Describe your issue here...." name="message" tabindex="6" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>

  </form>
</div>
 </body>

</html>
