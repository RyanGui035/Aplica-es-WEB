<!-- ClassDisciplina.php  -->
<?php
 class ClassDisciplina{
    private $id;
    private $disciplina;
    private $dias;    

    // Métodos SET
    public function setId($id){
     $this->id = $id;
    }
    public function setDisciplina($disciplina){
         $this->disciplina = $disciplina;
    }
    public function setDias($dias){
         $this->dias = $dias;
    }
 

    // Métodos GET
    public function getId(){
     return $this->id;
    }
    public function getDisciplina(){
         return $this->disciplina;
    }
    public function getDias(){
         return $this->dias;
    }
 }//fim classe
?>