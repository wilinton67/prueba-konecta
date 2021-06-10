<?php

class MainController extends BaseController
{
  public $layout = 'main';
  
  
  public function index() {
		$model = new Prueba();
		$data = $model->getAll();

		$this->view('prueba/listar', ['data' => $data ]);
	}

  public function create()
  {
    if (count($_POST)) {
      $pruebaData = $_POST['prueba'];

      $pruebaModel = new Prueba();
      $pruebaModel->create($pruebaData);

      $this->redirect('prueba', 'index');
    }
    return $this->view('main/form');
  }

  public function update(){
		$model = new Prueba();
		
		if (count($_POST) > 0) {
			
			$model->updateById($_POST['prueba'], $_GET['id']);
			$this->redirect('main','index');
		}

		$row = $model->getById($_GET['id']);
		$this->view('main/update', ['row' => $row]);
    return $row;
	}

	
  public function delete() {
		$id = $_GET['id'];
		$prueba = new Prueba();
		$prueba->deleteById($id);
		$this->redirect('main','index');
	}
	
	
}