<?php

    //modelo
    class Funcionario {//escopo
        
        //atributo e uma abstração de oque e um funcionario do mundo real
        public $nome = 'Jóse';
        public $telefone = '11 99999-8888';
        public $numFilhos = 2;
        //Colocar a primeira letra minusculo classifica o padrão de atributo do php

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
    echo $y->resumirCadFunc(); //Estamos exibindo aqui o resumo, apartir do metodo resumirCadFunc()
    echo '<br />';
    $y->modifcarNumFilhos(3);//Aqui estamos modificando  numero de filhos atravez do metodo modifcarNumFilhos
    echo $y->resumirCadFunc();//Fazendo novamente a impressão do novo resultado na tela
    echo '<hr />';
    $x = new Funcionario();
    echo $x->resumirCadFunc();
    echo '<br />';
    $x->modifcarNumFilhos(1);
    echo $x->resumirCadFunc();
    
?>