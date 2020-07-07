
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../ext_files/styles.css">
   <title>Document</title>
</head>
<style>
  .pos{
   margin-left:20vw;
   width:60%;
   font-size:1vw;
  }
</style>
<body>
    
<div class="input-group is-invalid pos">
    <div class="custom-file">
      <input type="file" class="custom-file-input" style="width:60%" id="validatedInputGroupCustomFile" required>
      <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
    </div>
    <div class="input-group-append">
       <button class="btn btn-outline-secondary" type="button">Button</button>
    </div>
  </div>
  <div class="invalid-feedback pos">
    Example invalid input group feedback
  </div>
</body>
</html>