<?php
class AbstractEntity {
    public function __construct($donnees=null)
    {
        if($donnees != null){
            $this->hydrate($donnees);
        }
    }
    public function hydrate($donnees)
    {
        foreach ($donnees as $key => $value){
            $method = "set".ucfirst($key);
            echo $method;
            if(method_exists($this,$method)){
                $this->$method($value);
            }
        }
    }
}