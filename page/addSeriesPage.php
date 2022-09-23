<!-- <!Doctype html>
<html lang="en">
<head>
<!-- Required meta tags 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS 
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
crossorigin="anonymous">
<link href="../style.css" rel="stylesheet">
<title>Add Movies Page</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
<div class="container">
<!-- Nama : nama panggilan kalian 
<a class="navbar-brand fw-bold" href="/gd4_x_yyyy">PHP - Nanda</a>
</div>
</nav> -->
<?php
include '../component/sidebar.php'
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);" >
<div class="body d-flex justify-content-between">
<h4>ADD SERIES</h4>
<a href="../page/listSeriesPage.php?id='.$data['id'].'"> 
<i style="color: red" class="fa fa-arrow-left fa-2x"></i>
</a>
</div>
<hr>

<!-- <div class="bg bg-light text-dark">
<div class="container min-vh-100 mt-5 d-flex align-items-center justifycontent-center">
<div class="card text-white bg-dark ma-5 shadow " style="min-width:
25rem;">
<div class="card-header fw-bold">Register</div>
<div class="card-body"> -->
<form action="../process/addSeriesProcess.php"
method="post">
<div class="mb-3">
<label for="exampleInputEmail1" class="formlabel">Name</label>
<input class="form-control" id="nameSeries" name="nameSeries"
aria-describedby="emailHelp">
</div>
<!-- <div class="mb-3">
<label for="exampleInputEmail1" class="formlabel">Genre</label>
<input class="form-control" id="genre"
name="genre" aria-describedby="emailHelp">
</div> -->
<div class="mb-3">
<label for="exampleInputEmail1" class="formlabel">Genre</label>
<select class="form-select" aria-label="Default
select example" name="genre" id="genre">
<option value="Adventure">Adventure</option>
<option value="Horror">Horror</option>
<option value="Comedy">Comedy</option>
<option value="Comedy">Action</option>
</select>
</div>
<div class="mb-3">
<div class="mb-3">
<label for="exampleInputEmail1" class="formlabel">Realese</label>
<input class="form-control" id="realese"
name="realese" aria-describedby="emailHelp">
</div>
<div class="mb-3">
<div class="mb-3">
<label for="exampleInputEmail1" class="formlabel">Episode</label>
<input class="form-control" id="episode"
name="episode" aria-describedby="emailHelp">
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="formlabel">Season</label>
<input class="form-control" id="season"
name="season" aria-describedby="emailHelp">
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="formlabel">Synopsis</label>
<input class="form-control" id="synopsis"
name="synopsis" aria-describedby="emailHelp">
</div>
<div class="d-grid gap-2">
<button type="submit" class="btn btn-primary"
name="submitSeries">Submit</button>
</div>
</form>
<p class="mt-2 mb-0">Cancel add a Series? <a
href="./listSeriesPage.php" class="text-primary">Click here!</a></p>
</div>
</div>
</div>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
</body>
</html>
