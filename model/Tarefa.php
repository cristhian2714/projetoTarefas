<?php
namespace Projeto\model;
class Tarefa{
   private $titulo;
   private $prioridade;
   private $prazo;
   public function __construct($titulo, $prioridade, $prazo){
       $this->titulo = $titulo;
       $this->prioridade = $prioridade;
       $this->prazo = $prazo;
   }
   public function getTarefa(){
       return "Título: ".$this->titulo.
              " | Prioridade: ".$this->prioridade.
              " | Prazo: ".$this->prazo;
   }
}
?>