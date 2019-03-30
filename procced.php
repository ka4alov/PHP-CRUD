<?php session_start();?>
<?php


$mysqli = mysqli_connect('php.ua','root','','test') or mysqli_errno($mysqli);

$name = '';
$soname = '';
$email = '';
$password = '';
$phone = '';

//SIgn Up users
if(isset($_POST['save'])){
    $name = $_POST['FirstName'];
    $soname = $_POST['LastName'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $phone = $_POST['Phone'];

    $mysqli->query("INSERT INTO users (name,last_name,email,password,phone) VALUES ('$name','$soname','$email','$password','$phone')") or die(mysqli_error($mysqli));
    $_SESSION['message'] = "Пользователь успешно зарегестрирован,войдите в систему.";
    $_SESSION['msg_type'] = "success";
    header('Location: sign_in.php');
}


//Sign In users
$results = $mysqli->query("SELECT * FROM users") or die($mysqli->error());
$rows = $results->fetch_assoc();

if(isset($_POST['enter'])){
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $mysqli->query("SELECT email,password FROM users WHERE email = '$email' AND  password = '$password'") or die(mysqli_error($mysqli));

    if($_POST['Password'] == $rows['password']) {
        header('Location: list.php');
    }else{
        $_SESSION['message'] = "Вы ввели не правильно пароль или почту.";
        $_SESSION['msg_type'] = "danger";
    }

}
//Delete Users
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM users WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Пользователь успешно удален.";
    $_SESSION['msg_type'] = "danger";

    header('Location: list.php');
}

//Edit Users
if(isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM users WHERE id = $id") or die($mysqli->error());
    $row = $result->fetch_assoc();
    if (count($result) == 1) {
        $name = $row['name'];
        $soname = $row['last_name'];
        $email = $row['email'];
        $password = $row['password'];
        $phone = $row['phone'];
    }
}
//Update Users
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $soname = $_POST['soname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $mysqli->query("UPDATE users SET name = '$name',last_name = '$soname', email = '$email',password = '$password', phone = '$phone' WHERE id = $id");

        $_SESSION['message'] = "Пользователь успешно изменен.";
        $_SESSION['msg_type'] = "success";
        header('Location: list.php');
    }

?>