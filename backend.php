<?php
$conn = mysqli_connect('localhost', 'root', '', 'ajaxCrud');

$name = $_POST['n'];
$email = $_POST['e'];
$pass = $_POST['p'];
$contact = $_POST['c'];
$city = $_POST['city'];
$gender = $_POST['g'];

$q = "INSERT INTO `users`( `name`, `email`, `password`, `contact`, `city`, `gender`) 
VALUES ('$name','$email','$pass','$contact','$city','$gender')";
$sql = mysqli_query($conn, $q);
if ($sql) {
    echo 'Data inserted';
    header('Location:showdata.php');
} else {
    echo 'Something is wrong';
}



// $sel = "SELECT * FROM users ";
// $data = mysqli_query($conn, $sel);
// if ($data->num_rows > 0) {
//     while ($row = mysqli_fetch_assoc($data)) {
//         echo "
//         <tbody id='tbody'>
//       <tr>
//       <td>{$row['id']}</td>
//       <td>{$row['name']}</td>
//       <td>{$row['email']}</td>
//       <td>{$row['contact']}</td>
//       <td>{$row['gender']}</td>
//       <td>{$row['city']}</td>


//       </tr>
//       </tbody>
//       ";
//     }
// }
