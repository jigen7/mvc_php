<?php
require_once ("models/test_model.php");
require_once ("views/test_view.php");

class testController {

	private $model;
	private $view;
	private $click_object;
	
	function __construct (&$live_model, &$live_view)
	{
		$this->model = $live_model;
		$this->view  = $live_view;
		
		if (!isset($_GET['click_object'])){
			 $_GET["click_object"] = "";
		}
		if (!isset($_GET['string_value'])){
			 $_GET["string_value"] = "";
		}
		
		$this->click_object = $_GET["click_object"];
		$this->string_value = $_GET["string_value"];
		$this->load();
	}

	
	function on_click(&$click_object, &$string_value)
	{
		//echo $click_object;
		if($click_object == "bubble")
		{
			//$this->model->set_link1_text();
			$this->model->bubble_sort($string_value);
		}
		
		if($click_object === "quick")
		{
			$this->model->quick_sort($string_value);
		}
	}
	
	
	
	public function load()
	{
		if(isset($this->click_object))
		{
			$this->on_click($this->click_object, $this->string_value);
		}
		
		$this->model->set_view_data(); 
		$this->view->update();
	}
};
?>