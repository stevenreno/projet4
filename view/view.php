<?php
class View {
    private $param;
    public function __construct()
    {
        $this->param = array();
    }

    public function addVariable($name,$value){
        $this->param[$name]=$value;
    }
    public function generate($viewPath){
        $content = $this->generateContent($viewPath);
        require_once ('view/main.php');
    }

    public function generateContent($viewPath){
        extract($this->param);
        if(file_exists($viewPath)){
            ob_start();
            require $viewPath;
            return ob_get_clean();
        };
    }
}