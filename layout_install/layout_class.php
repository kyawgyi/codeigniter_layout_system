<?php
class layout_class{
	
	public function __construct()
   	{        
         
    } 

    public function view($data=array(),$no_layout=false)
    {    	
    	$CI =& get_instance(); 

        if(!isset($CI->render)) die("Some error occur, Your controller class may not extend to My_Controller class");   	

        if($CI->render === false)
        return false;

        $class=strtolower($CI->router->fetch_class()); 

        if($CI->render == '')
        $method=$CI->router->fetch_method();
        else
        $method=$CI->render; 

        if($CI->theme != "") $CI->theme.= "/";

        if($CI->renderPath == "") $CI->renderPath = $CI->theme.$class;

        $templatePath = $CI->renderPath."/".$method;

        $output = $CI->load->view($templatePath,$CI->viewData,true);

        if($CI->layout)
        {
        	$layout = $CI->load->view($CI->theme."/layout/".$CI->layout,['templatePath' => $templatePath,'layoutData' => $CI->layoutData],true);
        	$output = str_replace("{content}", $output, $layout);
        }       
            	
    	echo $output;
    }
}