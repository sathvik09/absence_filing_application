<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Leave Management| Add Employee</title>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200,300&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="http://<?=base_url()?>ext_files/css/add_emp.css?version=21">
</head>
<body>

 <section class="password">
    <div class="pass-bar">
      <h2 class="title">Add Employees</h2>
    </div>
    <form action="http://<?=base_url("index.php/test/emp_add")?>" method="post">
    <div class="form">
     <div class="input-group mb-4">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Employee Id</span>
      </div>
      <input type="text" class="form-control" name="emp_id" placeholder="Employee Id" aria-label="Username" aria-describedby="basic-addon1">
       </div>
       <div class="input-group mb-4">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Name</span>
      </div>
      <input type="text" class="form-control" name="emp_name" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
       </div>
       <div class="input-group mb-4">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Department</span>
      </div>
      <input type="text" class="form-control" name="dept" placeholder="Department" aria-label="Username" aria-describedby="basic-addon1">
       </div>
       <div class="input-group mb-4">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Designation</span>
      </div>
      <input type="text" class="form-control" name="designation" placeholder="Designation" aria-label="Username" aria-describedby="basic-addon1">
       </div>
       <div class="input-group mb-4">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Email Id</span>
      </div>
      <input type="text" class="form-control" name="email" placeholder="Email Id" aria-label="Username" aria-describedby="basic-addon1">
       </div>
       <div class="input-group mb-4">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Mobile No</span>
      </div>
      <input type="text" class="form-control" name="mobile" placeholder="Mobile No" aria-label="Username" aria-describedby="basic-addon1">
       </div>
       </div>
       <div class="btn-sub">
       <a href="http://<?=base_url("index.php/test/emp_add")?>"><input type="submit" class="btn-submit-val" value="Submit"></a>
       </div>
    </div>
    </form>
 </section>   
</body>
</html>