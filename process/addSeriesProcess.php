<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if(isset($_POST['submitSeries'])){
// untuk mengoneksikan dengan database dengan memanggil file db.php
include('../db.php');
// tampung nilai yang ada di from ke variabel
// sesuaikan variabel name yang ada di registerPage.php disetiap input
$name = $_POST['nameSeries'];
$genre = $_POST['genre'];
$realese = $_POST['realese'];
$episode = $_POST['episode'];
$season = $_POST['season'];
$synopsis = $_POST['synopsis'];
// Melakukan insert ke databse dengan query dibawah ini
$query = mysqli_query($con,
"INSERT INTO series(name, genre, realese, episode, season, synopsis)
VALUES
('$name', '$genre', '$realese', '$episode', '$season', '$synopsis')")
or die(mysqli_error($con)); 
// perintah mysql yang gagal dijalankanditangani oleh perintah “or die”
if($query){
echo
'<script>
alert("Add Series Success");
window.location = "../page/listSeriesPage.php"
</script>';
}else{
echo
'<script>
alert("Add Series Failed");
</script>';
}
}else{
echo
'<script>
window.history.back()
</script>';
}
?>
