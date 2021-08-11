<?php
namespace App\Models;
use CodeIgniter\Model;
class MoviesModel extends Model {
	protected $db;
	protected $table      = 'Movies';
	protected $primaryKey = 'id';
    protected $allowedFields = ['movie_name', 'lead_actor','actress','year_of_release','director_name'];
	protected $useTimestamps = true;
     protected $returnType = 'App\Entities\movies';

	

	public function getList(){
		    $db = \Config\Database::connect();
			$builder_obj=$db->table('Movies');

			$builder= $builder_obj->select('*');
			$query =  $builder->get();
			$results=$query->getResult();

		    return $results;
	
	}

	public function getSpecificList($leadActor){
		    $db = \Config\Database::connect();
			$builder_obj=$db->table('Movies');

			$builder= $builder_obj->select('*')->where('lead_actor',$leadActor);
			$query =  $builder->get();
			$results=$query->getResult();

		    return $results;
	
	}
	
    public function moviesCreate($data)
	{ 
       print_r("Started method moviesModel::moviesCreate\n");
   			return $this->insert($data);
	    print_r("End method moviesModel::moviesCreate\n ");
	}
	
	


	public function moviesDelete($id){
			
			return $this->delete(['id',$id]);
		
	}

	
	
	
}
	