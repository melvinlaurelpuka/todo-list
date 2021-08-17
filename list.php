<!DOCTYPE html>
<html lang="en">

<?php include ('head.php');
include ('config.php');
?>

<body>
    <div class="container">
        <?php include('navbar.php')
        ?>

        <div class="card">
            <div class="card-header">
                <button class="btn btn-info"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> </button>
            </div>

        </div>

        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
          <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" class="form-control">
          </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
 
</form>
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add new list</button>
      </div>
    </div>
  </div>
</div>
        <?php 
            $sql = mysqli_query($koneksi, "SELECT * FROM list") or die(mysqli_error($koneksi));
            $data = mysqli_fetch_assoc($sql);
         ?>
    </div>
</body>

</html>