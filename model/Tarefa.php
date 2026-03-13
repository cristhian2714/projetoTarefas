<?php 
    namespace Projeto\model;

    class Tarefa{
        private $titulo;
        private $prioridade;
        private $prazo;
        private $status;
        public function __construct($titulo, $prioridade, $prazo){
            $this->titulo = $titulo;
            $this->prioridade = $prioridade;
            $this->prazo = $prazo;
            $this->status = "Pendente";
        }
        
        public function __get(string $dado){
            return $this->dado;
        }
       
        public function excluir(int $codigo){
            if($this->codigo == $codigo){
                $this->titulo = "";
                $this->prioridade = "";
            }
        }

        


                            




        


    }













































?>