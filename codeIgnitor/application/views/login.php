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
    <header>
        <div class="logo-container">
            <img src="./img/bmslogo.png" alt="">
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
           <input type="text" name = "username" class="inp" placeholder="email" /><?php if($this->uri->segment(3) == "form_val")echo form_error("username"); ?>
           <p>Password</p>
           <input type="password" name = "password" class="inp1" placeholder="password" /><?php if($this->uri->segment(3) == "form_val")echo form_error("password"); ?>
           <div class="sub">
           <input class="btn" type="submit" value="Log In">
            </div>
     </form> 
      </div> 
    </section>
    </main>
    <script src="./js/login.js"></script>
    <script src="https://kit.fontawesome.com/fbe06f22f8.js" crossorigin="anonymous"></script>
</body>
</html>