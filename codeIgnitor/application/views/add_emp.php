<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Leave Management| Add Employee</title>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;500&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="http://<?=base_url()?>ext_files/css/add_emp.css?version=11">
  </head>
<body>

 <section class="password">
    <div class="pass-bar">
      <h2 class="title">Add Employees</h2>
    </div>
    <form action="http://<?=base_url("index.php/test/emp_add/emp_added")?>" method="post">
    <div class="form">
     <div class="input-group mb-4">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Employee Id</span>
      </div>
      <input type="text" class="form-control data" name="emp_id" placeholder="Employee Id" aria-label="Username" aria-describedby="basic-addon1"><p class="emp_idp"></p>
       </div>
       <div class="input-group mb-4">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Name</span>
      </div>
      <input type="text" class="form-control data" name="emp_name" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
       </div>
       <div class="input-group mb-4">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Department</span>
      </div>
      <input type="text" class="form-control data" name="dept" placeholder="Department" aria-label="Username" aria-describedby="basic-addon1">
            
      <!-- <div class="btn-group">
  <button type="button" class="btn btn-danger">Action</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <input type="button" class="dropdown-item" value="action" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div> -->




       </div>
       <div class="input-group mb-4">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Designation</span>
      </div>
      <input type="text" class="form-control data" name="designation" placeholder="Designation" aria-label="Username" aria-describedby="basic-addon1">
       </div>
       <div class="input-group mb-4">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Email Id</span>
      </div>
      <input type="text" class="form-control data" name="email" placeholder="Email Id" aria-label="Username" aria-describedby="basic-addon1">
       </div>
       <div class="input-group mb-4">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Mobile No</span>
      </div>
      <input type="text" class="form-control data" name="mobile" placeholder="Mobile No" aria-label="Username" aria-describedby="basic-addon1">
       </div>
       </div>
       <div class="btn-sub">
       <input type="button" class="btn-submit-val button-sub" value="Submit">
       </div>
    </div>
    </form>
 </section>   
 <script src="http://<?=base_url("ext_files/js/json_pass.js")?>"></script>
 <script src="http://<?=base_url("ext_files/js/add_emp.js")?>"></script>
</body>
</html>