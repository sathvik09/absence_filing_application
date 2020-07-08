
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Leave Management|Change Password</title>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200,300&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="http://<?=base_url()?>ext_files/css/change_pass.css?version=21">
  </head>
<body>

 <section class="password">
    <div class="pass-bar">
      <h2 class="title">Update Password</h2>
    </div>
    
    <form action="http://<?=base_url("index.php/test/change_pass")?>" method="post">
    <div class="form">
     <div class="input-group mb-5">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Old Password</span>
      </div>
      <input type="password" name="old_pass" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"><?php if(isset($_POST['old_pass'])){echo "\n";echo form_error("old_pass");} ?>
       </div>
       <div class="input-group mb-5">
      <div class="input-group-prepend">
      <span class="input-group-text"  id="basic-addon1">New Password</span>
      </div>
      <input type="password" class="form-control" name="new_pass" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"><?php if(isset($_POST['new_pass'])){echo form_error("new_pass");} ?>
       </div>
       <div class="input-group mb-5">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Confirm Password</span>
      </div>
      <input type="password" name="confirm_pass" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"><?php if(isset($_POST['confirm_pass'])){echo form_error("confirm_pass");} ?>
       </div>
       <div class="btn-sub">
       <a href="#"><input type="submit" class="btn-submit-val" value="Submit"></a>
       </div>
    </div>
    </form>
 </section>   
</body>
</html>