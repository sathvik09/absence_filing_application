<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Management System | Excel import</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200,300&display=swap" rel="stylesheet">
    <link href="http://<?= base_url("ext_files/css/excel.css")?>" rel="stylesheet" />
</head>
<body>
    <section class="import">
    <div class="button-wrap">
  <label class ="new-button" for="upload"> Upload CSV
  <input id="upload" type="file" >
<div>
       <table class="input-tbl">
           
       </table>
    </section>
    <script src="http://<?= base_url("ext_files/js/excel.js")?>"></script>
</body>
</html>