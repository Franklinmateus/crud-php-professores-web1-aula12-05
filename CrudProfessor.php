<?php
##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once './DB.php';    //inclui arquivo DB

 abstract class CrudProfessor extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
    public $nome;
    public $endereco;
    public $idade;
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    
    
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    public function getEndereco() {
        return $this->endereco;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function getIdade() {
        return $this->idade;
    }
    
}
