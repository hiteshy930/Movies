<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="<?= site_url('/css/form1.css') ?>">
       <link rel="stylesheet" type="text/css" href="<?= site_url('/css/design.css') ?>">  
         
      <link rel="stylesheet" type="text/css" href="<?= site_url('/css/button.css') ?>">  

	<title>Movies</title>
</head>
<body>
	<?= $this->include('Movies/messages') ?>
	<button><a href="<?= site_url("/") ?>">Home</a></button>

	<button><a href="<?= base_url("/movies/all") ?>">All Movies</a></button>

	<button><a href="<?= base_url("/movies/addMovie") ?>">Add new Movie record</a></button>

	<button><a href="<?= site_url("/movies/specific") ?>">Search by actor's name</a></button>

</body>
</html>