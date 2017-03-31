<?php

class viewData
{
	public $some_data;
	public $link1_text;
	public $link2_text;
	public $default_var = "Default data";
}

class testModel
{
	private $data = "";
	private $link1_text = "";
	private $link2_text = "";

	public $view_data;
	
	function __construct()
	{
		//construct a view_data object
		$this->view_data = new viewData();
	}
	
	function set_view_data()
	{
		//some data processing here... 
		$this->view_data->some_data = $this->data;
	}
	
	function bubble_sort($arr1) {
		$arr = str_split($arr1);
		$n = count($arr);
		do {
			$swapped = false;
			for ($i = 0; $i < $n - 1; $i++) {
				// swap when out of order
				if ($arr[$i] > $arr[$i + 1]) {
					$temp = $arr[$i];
					$arr[$i] = $arr[$i + 1];
					$arr[$i + 1] = $temp;
					$swapped = true;
				}
			}
			$n--;
		}
		while ($swapped);
		//return $arr;
		$this->view_data->link1_text = "Bubble Sort: ".implode($arr);
		
	} // end of bubble_sort
	
	function quick_sort($arr1) {
			$arr1 = str_split($arr1);
			sort($arr1);
			$s = implode($arr1);
        $this->view_data->link1_text = "Quick Sort: ".$s;
	} // end of quick sort
};


?>