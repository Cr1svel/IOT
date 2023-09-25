<?php include 'app.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    .center {
      text-align: center;
    }
  </style>

</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>My Home Appliance Controller</h1>
  <p>Veldin A. Talorete, Jr.</p> 
</div>
  
<div class="center">

  <form action="" method="post">
    </br></br>
    <button type="submit" class="btn btn-success"  style="text-align:center" name="app1on">App-1 ON</button>
    <button type="submit" class="btn btn-success"  style="text-align:center" name="app2on">App-2 ON</button>
    </br></br>
    <button type="submit" class="btn btn-danger"  style="text-align:center" name="app1off">App-1 OFF</button>
    <button type="submit" class="btn btn-danger"  style="text-align:center" name="app2off">App-2 OFF</button>
  </form>
</div>

</body>
</html>
