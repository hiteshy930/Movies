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

	<button><a href="<?= site_url("/") ?>">Home</a></button>		

   	 <div class="main-block">
    	
      
      	
	     <div class="left-part">
	          
	           <div class="title">	
              			<h2>Create new movie record into database. <br> </h2>
              			<i class="fas fa-pencil-alt"></i>
              	</div>		
              			 <h5 style="color:red;">*All mandatory fields</h5>
              
              <form  action="<?php echo base_url('/MoviesController/specificActor')?>" class="border-right pr-5 mb-5" method="post" id="movieForm" name="movieForm">
	                <div class="row">
		                 
	                  	  <div class="info">
		                    <label for="leadActor">Lead Actor</label>
								<input type="text" name="leadActor" id="leadActor" 
					     											  value="<?= old('leadActor',esc($movie->leadActor))?>">
	                	  </div>
               		</div> 
               			<button>Save</button>
	              </form>
               		</div>
          
 
            </div>	<!-- //form div -->
        
          </div>
        </body>
</html>