<?php
    class Alunni extends Mustache_Engine{
        protected $data=[];
        function render($templates="./templates/alunni.mst",$data=[]){
            $templates = file_get_contents($templates);
            return parent::render($templates, $this->data);
        }

        function setData($data){
            $this->data=$data;

        }
    }

?>
