<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://<?=base_url()?>ext_files/css/landing.css?version=21">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
   <section class="landing">
        <div class="container">
        <div class="nav-link">
            <img class="logo" src="http://<?=base_url()?>ext_files/img/logo.png" />
        </div>
        <div class="title-main">B.S Narayana Center for Advanced Learning & Software Development</div>
        <div class="component">
        <div class="vision">
            <h2 class='title-vision'>Vision</h2>
            <p class="para-vision">To build a strong learning and development environment in the
            advanced Computuer Science domain  to promote innovation towards betterment of ther society</p>
            <h2 class="title-mission">Mission</h2>
            <p class="para-mission">M1 : Collaborate with industries and institutions at national and International Levels to enhance 
                 training and developement in emerging areas.
            </p>
            <p class="para-mission">M2 : Create a new genereation of entrepreneurial problem solvers for a 
                sustainable future through green technology with an emphasis on ethical practices, inclusive of socital concerns 
                and environment. 
            </p>    
        </div>
        <div class="login">
        <h2 class="login-heading">Login</h2>
        <div class="space"></div>
        <form action="http://<?=base_url("index.php/test/index/form_val")?>" method = "post">
        <div class="input-field col user">
          <input id="password" autocomplete="off" name = "username" type="text" class="validate"><?php if($this->uri->segment(3) == "form_val")echo form_error("username"); ?>
          <label for="password">Username</label>
          </div>
          <div class="space"></div>
          <div class="input-field col user password">
          <input id="password" name = "password" type="password" class="validate"><?php if($this->uri->segment(3) == "form_val")echo form_error("password"); ?>
          <label for="password">Password</label>
          </div>
          <div class="login-btn">
        <a href="http://<?=base_url("index.php/test/index/btn")?>"><input type="submit" class="btn btn-1" value="Login"></a>
        </form> 
        </div>
        </div>
        </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>