<?php
include('../lib/connect.php');
include('../lib/session.php');

switch ($_POST['action']) {

  case 'login':
    // username and password sent from form
    $phone = mysqli_escape_string($connect, $_POST['phone']);
    $pass = mysqli_escape_string($connect, $_POST['password']);
    $password = hash('sha256', $pass);

    $sql = "SELECT * FROM dangky_user WHERE phone = '$phone' AND password='$password'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row      
    if ($count == 1) {
      setcookie('dsu_admin_phone', $_POST['phone'], time() + 60 * 60 * 24 * 30);
      $_SESSION['dsu_admin_phone'] = $phone;
      $_SESSION['dsu_admin_name'] = $row['name'];
      $_SESSION['dsu_admin_email'] = $row['email'];
      $_SESSION['dsu_admin_role'] = $row['role'];
      $_SESSION['dsu_admin_id'] = $row['id'];
      $_SESSION['dsu_admin_team'] = $row['team'];
      $_SESSION['dsu_admin_city'] = $row['city'];
      if ($row['role'] == "5") {
        header('Location: ../home');
      } else {
        header('Location: ../home');
      }
    } else {
      header('Location: ./?alert=wrongpass');
    }
    break;

  default:

    break;
}
