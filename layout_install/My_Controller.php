<?php
class My_Controller extends CI_Controller{
    
    public $theme = "";
    public $render= "";
    public $renderPath = "";
    public $layout = "main"; 
    public $viewData = null;
    public $layoutData = null;

	public function __construct()
   	{        
         parent::__construct(); 
    } 

    protected function set($name,$value = null) // set view Variables array can be accept
    {
        if(is_array($name))
        {
            if($this->viewData == null)
            $this->viewData = $name;
            else
            $this->viewData = array_merge($this->viewData,$name);
        }else
        {
            $this->viewData[$name] = $value;
        }
    }

    protected function setLayoutData($name,$value)
    {
        $this->layoutData[$name] = $value;
    }

    protected function Layout($name) // to change layout. if do not want layout,set to false
    {
        $this->layout = $name;
    }

    protected function setTemplate($file,$path="") //to change default view rendering
    {
        $this->render = $file;
        if($path != "")
        $this->renderPath = $path;
    }
}


