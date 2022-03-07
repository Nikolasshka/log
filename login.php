<?php
$con = new mysqli("127.0.0.1:3306", "root", "12345678", "bd1")
      or die ('Could not connect to the database server' . mysqli_connect_error());

//    if (mysqli_connect_errno($con)) {
//       echo "Failed to connect to MySQL: " . mysqli_connect_error();
//    }
// if (isset($_GET["action"])) {
//     $action = $_GET['action'];
// }
// if (isset($_GET["firstname"])) {
//     $firstname = $_GET['firstname'];
// }
// if (isset($_GET["login"])) {
//     $login = $_GET['login'];
// }
// if (isset($_GET["password"])) {
//     $pass = $_GET['password'];
// }
//if($action == insert){ // если действие INSERT и есть все что нужно

// время = время сервера а не клиента !
//$current_time = round(microtime(1) * 1000);
// пример передачи скрипту данных:
// chat.php?action=insert&author=author&client=client&text=text
// вставим строку с переданными параметрами
//    $sql="INSERT INTO `users` (`login`, `pass`, `firstname`, `lastname`, `patronimyc`)
//      VALUES('$login', '$pass', '$firstname', '$lastname', '$patroniyc')";
    $sql="INSERT INTO `users` (`login`, `pass`, `firstname`, `lastname`, `patronimyc`)
      VALUES('tan', 'ya', 'qwer', '444', '12341234')";
    mysqli_query($con, $sql);
//}
    
//   $fname = $_POST['firstname'];
//$lname = $_POST['lastname'];
//$patron = $_POST['patronimyc'];
//$login = $_POST['login'];
//   $pass = $_POST['password'];
//   $result = mysqli_query($con,"Select * from `users` where `login` = '$login' and `pass` = '$pass'");
//   $row = mysqli_fetch_array($result);
//   $data = $row[0];
//
//   if($data){
//      echo $data;
//   }
//
   mysqli_close($con);
?>
