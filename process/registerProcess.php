<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if(isset($_POST['register'])){
// untuk mengoneksikan dengan database dengan memanggil file db.php
include('../db.php');
// tampung nilai yang ada di from ke variabel
// sesuaikan variabel name yang ada di registerPage.php disetiap input
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$name = $_POST['name'];
$phonenum = $_POST['phonenum'];
$membership = $_POST['membership'];

// $sql = mysqli_query($con, "SELECT * FROM users WHERE email=$email");
// $stmt = $conn->prepare($sql); 
// $stmt->bind_param("i", $email);
// $stmt->execute();
// $result = $stmt->get_result(); 
// $query = $result->fetch_assoc(); 


// if(mysqli_num_rows($result)>0){
//     echo "This email has already been registered";
// } else {
//Melakukan insert ke databse dengan query dibawah ini
$query = mysqli_query($con,
"INSERT INTO users(email, password, name, phonenum, membership)
VALUES
('$email', '$password', '$name', '$phonenum', '$membership')")
or die(mysqli_error($con)); 
// perintah mysql yang gagal dijalankanditangani oleh perintah “or die”
if($query){
echo
'<script>
alert("Register Success");
window.location = "../index.php"
</script>';
}else{
echo
'<script>
alert("Register Failed");
</script>';
}
}else{
echo
'<script>
window.history.back()
</script>';
}
?>
