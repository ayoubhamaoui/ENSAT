<?php
class Membres extends Controller{
	protected function index(){
		$viewmodel = new MembresModel();
		$this->returnView($viewmodel->Index(), true);
	}


	protected function addpro(){
		if(!isset($_SESSION['is_logged_in']))
		{
			header('Location: '.ROOT_URL.'membres');
		}
		$viewmodel = new MembresModel();
		$this->returnView($viewmodel->addpro(), true);
	}

	protected function projet(){
		$viewmodel = new MembresModel();
		$this->returnView($viewmodel->projet(), true);
	}
	protected function membre(){
		$viewmodel = new MembresModel();
		$this->returnView($viewmodel->projet(), true);
	}
}
