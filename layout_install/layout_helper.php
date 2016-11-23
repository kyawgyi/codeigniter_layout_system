<?php
	if(!function_exists('element'))
	{
		function element($name,$data = '')
		{
			$CI =& get_instance();
			echo $CI->load->view("elements/".$name, $data, TRUE);
		}
	}

	if(!function_exists("layoutData"))
	{
		function layoutData($name)
		{
			$CI =& get_instance();
			if(isset($CI->layoutData[$name]))
			echo $CI->layoutData[$name];
		}
	}