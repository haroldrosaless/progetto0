<?php 

    
    require __DIR__ .'/Alunno.php';
    class Classe{

        protected $array=[];
        
        public function __construct(){
            $this->nome = "5B";
            $a1 = new Alunno ("aaa","bbb",12);
            $a2 = new Alunno ("eee","ccc",15);
            $a3 = new Alunno ("iii","ddd",18);

            array_push($this->array, $a1);
            array_push($this->array, $a2);
            array_push($this->array, $a3);
        }

        public function getNome(){
                return $this->nome;

        }
        
        public function getArray(){
            return $this->array;

        }

    }

?>