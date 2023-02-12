<?php require('process/db.php'); ?>
<!doctype html>
<html lang="en">

<head>
  <title>Tms</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <?php
  if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $time = $_POST['time'];

    if ($title != "" && $description != "" && $time != "") {
      $insert_query = "INSERT INTO tasks(title,description,time) VALUES('$title','$description','$time')";
      $result = mysqli_query($conn, $insert_query);
      if ($result) {
  ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>
          Form Has Been Submitted.
        </div>
      <?php
      } else {
      ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>
          Form Submission Has Been Failed.
        </div>

  <?php
      }
    }
    else{
      ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>
          All Fields are required
        </div>

  <?php
    }
  }

  ?>

  <div class="container w-50 mx-auto">
    <h1 class="text-center my-4">Create Task</h1>
    <form action="#" method="post">
      <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control" name="title" id="" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Description</label>
        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
      </div>
      <div class="form-group">
        <label for="">Time</label>
        <input type="date" class="form-control" name="time" id="" placeholder="">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>