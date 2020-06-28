<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://<?=base_url()?>ext_files/css/login.css">
</head>
<body>
<?php 
   if($this->uri->segment(2) == "form_val"){
      echo "enter valid user name";
   }
?>
    <header>
        <div class="logo-container">
            <img src="ext_files/img/bmslogo.png" alt="">
            <h4 class="logo">Department Of ISE</h4>
        </div>
        <div class="back_icon">
        <i class="fas fa-times"></i>
        </div>
    </header>
    <main>
    <section class="present">
    <div class="login">
    <p>Log In</p>
    </div>
    </section>
    <section class="signup_s">
    <div class="signup">
      <h5>New To BMSCE?</h5>
      <h5>Signup</h5>
      </div>
    </section>
    <section class="form_s">
    <div class="eform">
    <form action="form_val" method = "post">
           <p>User</p>
           <input type="text" name = "username" class="inp" placeholder="email" />
           <p>Password</p>
           <input type="text" class="inp1" placeholder="password" />
           <div class="sub">
           <input class="btn" type="submit" value="Log In">
            </div>
     </form>
      </div>
      <div class="line"></div>
      <div class="google_img">
      <img class="img1" src="ext_files/img/Google.png" alt="" srcset="">
      </div>
      <div class="google_t">
      <h2 class="google_txt">Sign In with Google</h2>
      </div>
    </section>  
    </main>
    
    <script src="https://kit.fontawesome.com/fbe06f22f8.js" crossorigin="anonymous"></script>
</body>
</html>