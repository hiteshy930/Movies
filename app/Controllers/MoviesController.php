<?php 
namespace App\Controllers;


use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\MoviesModel;
use App\Entities\Movie;



class MoviesController  extends ResourceController {
 
     use ResponseTrait;

    
	public function __construct()
	{
		helper('form');
		$this->moviesModel = new MoviesModel();

	}
	
	public function index()
	{
 
		return view('Movies/index');
		
	}

	public function getList(){
		$data=$this->moviesModel->getList();
		return view('Movies/detail',['movies'=>$data]);
	}

	public function addMovie(){

		$movie=new Movie();
		return view('Movies/form',['movie'=>$movie]);
	}

	public function specificActorForm(){

		$movie=new Movie();
		return view('Movies/formSpecific',['movie'=>$movie]);
	}

	public function specificActor(){

		$data=$this->moviesModel->getSpecificList($this->request->getPost('leadActor'));
		return view('Movies/detail',['movies'=>$data]);
	}

	 public function create(){
	 	    $data =[
	 	   
	 	    'movie_name' => $this->request->getPost('movieName'),
	 	    'lead_actor' => $this->request->getPost('leadActor'),
	 	    'actress' => $this->request->getPost('Actress'),
	 	    'year_of_release' => $this->request->getPost('yearOfRelease'),
	 	    'director_name' => $this->request->getPost('directorName'),

        	
		];
		 $this->moviesModel->moviesCreate($data);
     
		 return redirect()->back()
		 			   ->with('info','movies details added Successfully!!!');
	 }


	
	 public function delete($id=null){
	 	$this->moviesModel->moviesDelete($id);

	 
	 	 return redirect()->back()
		 			 ->with('info','movies with id' .$id. 'delete Successfully!!!');

	 }

	
}