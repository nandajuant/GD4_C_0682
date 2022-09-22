<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if(isset($_POST['submitMovie'])){
// untuk mengoneksikan dengan database dengan memanggil file db.php
include('../db.php');
// tampung nilai yang ada di from ke variabel
// sesuaikan variabel name yang ada di registerPage.php disetiap input
$name = $_POST['nameMovie'];
$genre = $_POST['genre'];
$realese = $_POST['realese'];
$season = $_POST['season'];
$synopsis = $_POST['synopsis'];
// Melakukan insert ke databse dengan query dibawah ini
$query = mysqli_query($con,
"INSERT INTO movies(name, genre, realese, season, synopsis)
VALUES
('$name', '$genre', '$realese', '$season', '$synopsis')")
or die(mysqli_error($con)); 
// perintah mysql yang gagal dijalankanditangani oleh perintah “or die”
if($query){
echo
'<script>
alert("Add Movie Success");
window.location = "../page/listMoviesPage.php"
</script>';
}else{
echo
'<script>
alert("Add Movie Failed");
</script>';
}
}else{
echo
'<script>
window.history.back()
</script>';
}
?>
