
<?php
    
	 //check if sigup is clicked
	 if(isset($_POST['save'])){
		 
		 /// creating variables to collect form data
		 $firstname= $surname  = $email = $password ='';
		 
		 $phonenumber = 0;
		 
		 //Picking data
	 $firstname = $_POST['fname'];
	 $surname = $_POST['surname']; 
	 $phonenumber = $_POST['phonenumber'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 
	 $success = '';
	 $error = array('firstname' => '', 'surname' => '', 'phonenumber' => '', 'email' => '', 'password' => '', 'general' => '');
	 
	 $success = '';
	 
	 //echo ("<p style='color:white'>$firstname</p>");
	
	if(empty($firstname)){
	$error['firstname'] = ("<p style='color:red'>Please enter your first name</p>");
	 }
	 else{
		 $firstname = htmlspecialchars($firstname);
		 
		 if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
         $error['firstname'] = ("<p style='color:red'>Please the name must contain letters only</p>");
         } 
		 
		 
	 }
	 
	 
	 
	 
	 
	 if(empty($surname)){
	$error['surname'] = ("<p style='color:red'>Please enter your sur name</p>");
	 }
	 else{
		 $surname = htmlspecialchars($surname);
		 
		 $firstname = htmlspecialchars($firstname);
		 
		 if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
         $error['surname'] = ("<p style='color:red'>Please the name must contain letters only</p>");
	 }
	 
	 
	 
	 
	 
	 if(empty($phonenumber)){
	$error['phonenumber'] = ("<p style='color:red'>Please enter your phone number</p>");
	 }
	 else{
		 $phonenumber = htmlspecialchars($phonenumber);	

		

         if(strlen($phonenumber) < 10){
			 $error['phonenumber'] =("<p style='color:red'>Please the phone number must contain 10 digits only</p>");}	 
			 
		 if(is_int($phonenumber)){
			 $error['phonenumber'] = ("<p style='color:red'>Please enter digits 0-9</p>");
		 }	 
	 }
	 
	 
	 
	 
	 
	 
	 
	 if(empty($password)){
	$error['password'] = ("<p style='color:red'>Please enter your password</p>");
	 }
	 else{
		 $password = htmlspecialchars($password);
		 
		 		 $uppercase = preg_match('@[A-Z]@', $password);
         $lowercase = preg_match('@[a-z]@', $password);
         $number    = preg_match('@[0-9]@', $password);
         $specialChars = preg_match('@[^\w]@', $password);

         if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
         $error['password'] = (" <p style='color:red'>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</p>");
}

	 }
	 
	 
	 
	 
	 if(empty($email)){
	$error['email'] = ("<p style='color:red'>Please enter your email</p>");
	 }
	 else{
		 $email = htmlspecialchars($email);
		 
		 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $error['email'] = ("<p style='color:red'>Please enter a valid emai adress email</p>");
}
	 }
	 }
	 
	 if(array_filter($error)){
		 
		 $error['general'] = ("<p style='color:red'>Please sort the errors before you sign Up!</p>");
	 }else{
		 
		 $success = ("<p style='color:green'> Success sign Up! you can now <a href-'login.php'>Login!</a>");
	 }
	 
	
	 }
	 
	  print_r(array_filter($error));
?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Glassmorphism login Form Tutorial in html css</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: auto;
    width: 400px;
	margin-top: 80px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
input[type="submit"]{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="signup.php" method="post">
        <h3>Signup Here</h3>

        <label for="username">First Name</label>
        <input type="text"  id="fname" name="fname" value = "<?php if(isset($firstname)) {echo $firstname;}?>">
		<?php if(isset($error['firstname'])){echo $error['firstname']; } ?>
		
		<label for="surname">SurName</label>
        <input type="text"  id="surname" name="surname" value = "<?php if(isset($surname)) {echo $surname;}?>">
		<?php if(isset($error['surname'])){echo $error['surname']; }?>
		
		<label for="phonenumber">Phone Number</label>
        <input type="text"  id="phonenumber" name="phonenumber" placeholder="07********" value = "<?php if(isset($phonenumber)) {echo $phonenumber;}?>">
		<?php if(isset($error['phonenumber'])){echo $error['phonenumber']; } ?>

		<label for="email">Email Address</label>
        <input type="text"  id="email" name="email" value = "<?php if(isset($email)) {echo $email;}?>"> 
		<?php if(isset($error['emai'])){echo $error['email']; } ?>

        <label for="password">Password</label>
        <input type="password"  id="password" name="password" value = "<?php if(isset($password)) {echo $password;}?>">
		<?php if(isset($error['password'])){echo $error['password']; } ?>
		
		
		<?php if(isset($error['general'])){echo $error['general']; } ?>
		<?php if(isset($success)){echo $success;} ?>
		
		
		

        <input type="submit" id="save" name="save" value="Signup">
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
    </form>
</body>
</html>
<!-- partial -->
  
	
</body>
</html>
