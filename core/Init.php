<?php

/**
 * 
 */
class Init
{
	public $config;
	public $controller;

	static function start($config)
	{
		$Init = new Init;
		$Init->config = require $config;
		return $Init;
	}

	public function __construct()
	{
		require_once 'Conection.php';
		require_once 'BaseModel.php';

		//Incluir todos los modelos
		foreach (glob("models/*.php") as $file) {
			require_once $file;
		}
	}

	public function run()
	{
		$this->setController();
	}

	public function setController()
	{
		$controller = $this->config['controller'];
		if (isset($_GET['controller'])) {
			$controller = $_GET['controller'];
		}

		$action = 'index';
		if (isset($_GET['action']) && $_GET['action']) {
			$action = $_GET['action'];
		}

		$this->loadController($controller);
		$this->controller->framework = $this;
		$this->controller->$action();
	}

	private function loadController($controller)
	{
		$controlador = ucwords($controller) . 'Controller';
		$strFileController = 'controllers/' . $controlador . '.php';

		require_once 'core/BaseController.php';
		require_once $strFileController;
		$this->controller = new $controlador();
	}
}
