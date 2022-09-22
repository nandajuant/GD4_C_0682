<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if(isset($_POST['save'])){
// untuk mengoneksikan dengan database dengan memanggil file db.php
include('../db.php');
// tampung nilai yang ada di from ke variabel
// sesuaikan variabel name yang ada di registerPage.php disetiap input
$id = $_POST['id'];
$name = $_POST['nameMovie'];
$genre = $_POST['genre'];
$realese = $_POST['realese'];
$season = $_POST['season'];
$synopsis = $_POST['synopsis'];
// Melakukan insert ke databse dengan query dibawah ini
$query = mysqli_query($con,
"UPDATE movies SET name='$name', genre='$genre',realese='$realese',season='$season',synopsis='$synopsis'
WHERE movies.id='$id'")
or die(mysqli_error($con)); 
// perintah mysql yang gagal dijalankanditangani oleh perintah “or die”
if($query){
echo
'<script>
alert("Edit Movie Success");
window.location = "../page/listMoviesPage.php"
</script>';
}else{
echo
'<script>
alert("Edit Movie Failed");
</script>';
}
}else{
echo
'<script>
window.history.back()
</script>';
}
?>
