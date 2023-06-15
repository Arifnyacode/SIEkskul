<?php
$host = 'localhost'; 
$db   = 'siekskul'; 
$user = 'root'; 
$pass = ''; 

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

//untuk ngecek akun ini milih admin atau siapa
function caridata($email){
    $host = 'localhost'; 
$db   = 'siekskul'; 
$user = 'root'; 
$pass = ''; 
    $conn = mysqli_connect($host, $user, $pass, $db);

    $username = $_POST['username'];
    $query = "SELECT level FROM users WHERE email = '$email'";
    
    $result = $conn->query($query);
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $level = $row['level'];
        return $level;
    } else {
        return false;
    }
}

//untuk login
if(isset($_POST['simpan'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = caridata($username);
    $query = "SELECT * FROM users WHERE email='$username' AND password='$password'";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        if($level=="2"){
            header("Location:http://localhost/SIEkskul/public/Login/index.php");
        }
        else if($level=="1"){
            header("Location:http://localhost/SIEkskul/public/dashboard/index.php");
        }
    
    } else {
        echo "Login gagal!";
    }
}

$conn->close(); 
?>