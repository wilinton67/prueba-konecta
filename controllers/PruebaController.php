<?php
class PruebaController extends BaseController
{
	
	public function index() {
		$model = new Prueba();
		$data = $model->getAll();

		$this->view('prueba/listar', ['data' => $data ]);
	}
	
	
}
