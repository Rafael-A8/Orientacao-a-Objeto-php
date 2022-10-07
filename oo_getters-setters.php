<?php

    //modelo
    class Funcionario {//escopo
        
        //atributo e uma abstração de oque e um funcionario do mundo real
        public $nome = 'Jóse';
        public $telefone = '11 99999-8888';
        public $numFilhos = 2;
        //Colocar a primeira letra minusculo classifica o padrão de atributo do php


        //getters setters
        //setters e to tipo void que apenas recebe um determinado valor e manipula sem um retorno
        //Os metodos getters sao metodos do tipo retorn que darao justamente um retorno do atributo silicitado
        function setNome($nome) {
            $this->nome = $nome;
        }
        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
        function getNome() {
            return $this->nome;
        }
        function getNumFilhos() {
            return $this->numFilhos;
        }

        //métodos
        //Métodos nas praticas são funções e eles representam os comportamentos que poderam ser executados na classe
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filhos(s)";
        }
        
        function modifcarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
            //variavel do objeto e variavel do método
        }


        
    }
    //para acessar atributos ou metodos usamos o token -> e na sequencia basta chamar o atributo ou o metodo
    $y = new Funcionario(); //estamos fazendo a estancia de um objeto com base no modelo funcionario
    $y->setNome('Jóse',);
    $y->setNumFilhos(2);
    //echo $y->resumirCadFunc();

    echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' Filhos(s)';
    
    echo '<br/>';
    $x = new Funcionario();
    $x->setNome('Maria',);
    $x->setNumFilhos(20);
    echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' Filhos(s)';
    
?>