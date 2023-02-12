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
  <table class="table">
    <thead>
      <tr>
        <th>SN</th>
        <th>Title</th>
        <th>Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $select = "SELECT * FROM tasks ORDER BY created_at DESC";
      $result = mysqli_query($conn,$select);
      $i=1;
      while($task = $result->fetch_assoc())
      {
        ?>
        <tr>
          <td><?php echo $i++; ?></td>
          <td><?php echo $task['title']; ?></td>
          <td><?php echo $task['time']; ?></td>
          <td>
            <!-- Button trigger modal -->
            <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#show<?php echo $task['id']; ?>">
              Show
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="show<?php echo $task['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">View Detail</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                  <strong>Title : </strong><?php echo $task['title']; ?>
                  <hr>
                  <strong>Description : </strong><?php echo $task['description']; ?>
                  <hr>
                  <strong>Time : </strong><?php echo $task['time']; ?>
                  <hr>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <a name="" id="" class="btn-sm btn-success" href="show.php?id=<?php echo $task['id']; ?>" role="button">View</a>
            <a name="" id="" class="btn-sm btn-primary" href="edit.php?id=<?php echo $task['id']; ?>" role="button">Edit</a>
            <a name="" id="" class="btn-sm btn-danger" onclick="return confirm('Are you sure?');" href="process/delete.php?id=<?php echo $task['id']; ?>" role="button">Delete</a>
          </td>
        </tr>
        <?php
      }
      
      ?>
    </tbody>
  </table>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>