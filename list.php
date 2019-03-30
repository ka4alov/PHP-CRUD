<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="scripts/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="scripts/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="scripts/css/style.css" rel="stylesheet">
    <link href="scripts/js/app.js">
</head>
<body>
<?php require_once'procced.php'; ?>
<?php
$mysqli = new mysqli('php.ua','root','','test') or mysqli_errno($mysqli);
$result = $mysqli->query("SELECT * FROM users") or die($mysqli->error);
/*function printr($array){*/
/*echo '<pre>';*/
/*print_r($array);*/
/*echo '</pre>';*/
/*}*/
/*printr($result->fetch_assoc());*/
?>
<?php if(isset($_SESSION['message'])): ?>

    <div class="row justify-content-center alert alert-<?=$_SESSION['msg_type']?>">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
<?php endif ?>
<div class="container pt-xl-4">
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th class="th-sm">Name

        </th>
        <th class="th-sm">LastName

        </th>
        <th class="th-sm">Email

        </th>
        <th class="th-sm">Phone

        </th>
        <th class="th-sm">Password

        </th>
        <th class="th-sm">Created_at

        </th>
        </th>
        <th class="th-sm">Edit

        </th>
        </th>
    </tr>
    </thead>
    <?php while($row = $result->fetch_assoc()):?>
    <tbody>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['created_at']; ?></td>
        <td>
            <form class="btn-group">
            <a href="list.php?edit=<?php echo $row['id']; ?>"
        class="btn-sm btn-info">Edit</a>
                &nbsp;
            <a href="procced.php?delete=<?php echo $row['id']; ?>"
               class="btn-sm btn-danger">Delete</a>
            </form>
        </td>
    </tr>
    </tbody>
    <?php endwhile; ?>
</table>
    <hr>
</div>
<div class="row justify-content-lg-center">
    <form action="procced.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
            <input value="<?php echo $name; ?>" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <input value="<?php echo $soname; ?>" name="soname" class="form-control" placeholder="LastName">
        </div>
        <div class="form-group">
            <input value="<?php echo $email; ?>" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <input value="<?php echo $password; ?>" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <input value="<?php echo $phone; ?>" name="phone" class="form-control" placeholder="Phone">
        </div>
        <div class="form-group">
            <button type="submit" class="btn-sm btn-success" name="update">Update</button>
        </div>
    </form>
</div>
<!-- SCRIPTS -->
<!-- JQuery -->
<!--<script type="text/javascript" src="scripts/js/jquery-3.3.1.min.js"></script>-->
<script type="text/javascript" src="scripts/js/app.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="scripts/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="scripts/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="scripts/js/mdb.js"></script>
</body>
</html>