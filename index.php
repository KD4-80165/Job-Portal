<?php include "config.php";
include 'header.php';?>

<!-- Page content -->
<div class="content">
<p>
  <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a> -->
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="pos">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <input type="text" class="form-control" id="JobDesc" name="Jdesc">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="JobDesc" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>
</div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql= "Select cname, position, CTC from jobs";
      $result=mysqli_query($conn,$sql);
      if($result->num_rows>0){

        // output data of each row 
        while($rows=$result->fetch_assoc()){
        $i=1;
        echo"
        <tbody>
        <tr>
        <td>".$i++."</td>
        <td>".$rows['cname']."</td>
        <td>".$rows['position']."</td>
        <td>".$rows['CTC']."</td>
        </tr>";
      }}
      else{
        echo"";
      }?>
  </tbody>
</table>
</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>