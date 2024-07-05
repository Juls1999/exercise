<?php
require_once('db_config.php');
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header('Location: login.php');
    exit;
}

include 'view-users.php';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Users</title>

	<!-- font awesome cdn -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

  <!-- Datatables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-html5-2.0.1/b-print-2.0.1/r-2.2.9/datatables.min.css">
</head>
<body>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item"><a href="logout.php">Log out</a></li>
  </ol>
</nav>

<!-- Button trigger modal -->
<button id="add" data-toggle="tooltip" data-target="#addModal" title="Click to add user" class="btn btn-success btn-sm m-0 waves-effect">Add User Records <i class="fa fa-plus fa-sm " aria-hidden="true"></i></button>
<button id="edit" data-toggle="tooltip" title="Click to edit user" class="btn btn-warning btn-sm m-0 waves-effect">Edit User Records <i class="fa fa-pencil fa-sm " aria-hidden="true"></i></button>
<button id="delete" data-toggle="tooltip" title="Click to delete user" class="btn btn-danger btn-sm m-0 waves-effect">Delete User Records <i class="fa fa-trash fa-sm " aria-hidden="true"></i></button><br>



<div id="card"><div class="card-body">
    <table id="userTable" class="table table-responsive-md btn-table z-depth-1">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Username</th>
          <th>Password</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user) : ?>
          <tr>
            <td ><?= $user['id']; ?></td>
            <td ><?= $user['name']; ?></td>
            <td ><?= $user['email']; ?></td>
            <td ><?= $user['phone_number']; ?></td>
            <td ><?= $user['user_name']; ?></td>
            <td ><?= $user['password']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div></div>


<!-- Add Modal -->
  <div class="modal" id="addModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<!-- DataTables -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-html5-2.0.1/b-print-2.0.1/r-2.2.9/datatables.min.js"></script>

<script src="myscript.js"></script>

</body>
</html>
