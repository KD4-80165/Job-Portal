<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Career</title>
    <style>
  .banner{
    content: "";
    position: absolute;
    background: url("main.jpg") no-repeat center center/cover;
    height: 280px;
    top:0px;
    left:0px;
    width: 100%;
    z-index: -1;
    /* opacity:0.5; */
  }
  .head{
    color: white;
    margin-top: 10px;
    margin-left: 30px;
    font-size: 80px
  }
  .para{
    color: white;
    margin-top: 10px;
    margin-left: 35px;
    font-size: 20px
  }
    </style>
</head>
<body>
<div class="banner">
  <div class="content">
    <h1 class="head">Job Portal</h1>
    <p class="para">Best jobs available matching your skills</p>
  </div>
</div>
<div class="row">
  <?php
  $sql= "SELECT cname,position,Jdesc,CTC,skills from jobs"; 
  $result= mysqli_query($conn,$sql);
  if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
      echo'
      <div class="col-md-4">
        <div class="jobs" style="margin-top: 300px; margin-left: 20px; box-shadow: 6px 2px 6px 10px #88888888; padding: 10px">
        <h3 style="text-align: center;">'.$rows['position'].'</h3>
        <h4 style="text-align: center;">'.$rows['cname'].'</h4>
        <p style="color: black; text-align: justify;">'.$rows['Jdesc'].'</p>
        <p style="color: black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
        <p style="color: black;"><b>CTC:</b>'.$rows['CTC'].'</p>
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
        Apply Now
        </button>
        </div>
        </div>';
    }}
    else{
      echo"";
    }?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
            <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Passout Year</label>
            <input type="text" class="form-control" name="year">
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
  
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
