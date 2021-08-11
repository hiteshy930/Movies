<!DOCTYPE html>
<html>
<head>
	<title><?= $this->renderSection("title") ?></title>
        <link rel="stylesheet" type="text/css" href="<?= site_url('/css/form1.css') ?>">
       <link rel="stylesheet" type="text/css" href="<?= site_url('/css/design.css') ?>">  
         
      <link rel="stylesheet" type="text/css" href="<?= site_url('/css/button.css') ?>">  
 

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body >
<?= $this->include('Movies/messages') ?>
<button><a href="<?= site_url("/") ?>">Home</a></button>
<h1>Movie Database Query fetcher</h1>
    
    
    
        <table class="rwd-table">
                                    <thead >
                                        <tr>
											<th>S.No</th>
											<th>Id</th>
											<th>Movie Name</th>
											<th>Lead Actor</th>
											<th>Actress</th>
											<th>Year of Release</th>
											<th>Director Name</th>
											<th>Created At</th>
											<th>Action </th>
										</tr>
								</thead>
								<tbody>
									<?php
									$i=1;
										if ($movies !=NULL)
											{
												$i=1;
												foreach ($movies as $movie){
												$moviesId = $movie->id;
																				
												$moviesUrl= "/movies/del/".$moviesId;
												
												
											?>

										  <tr>
										    <td><?php echo $i ;?></td>
										    <td> <?php echo $movie->id; ?></td>
										     <td><?php echo $movie->movie_name; ?></td>
										    <td><?php echo $movie->lead_actor;?></td>
										    <td><?php echo $movie->actress;?></td>
										    <td><?php echo $movie->year_of_release;?></td>
										    <td><?php echo $movie->director_name;?></td>
										    <td><?php echo $movie->created_at; ?></td>
										    
										    <td><p>
										    	  
										    	  <button class="button">
										    	  	  <a href="<?php echo base_url($moviesUrl) ?>" class="link">Delete</a> </button>
										    												   	   
											</p></td>
										 </tr>  
										  <?php $i++; }}?>
										   <input type="hidden" name="sno" id="sno" value="<?php echo $i ;?>"/> 
										   
									 </tbody>
                                </table>


</body>
</html>

