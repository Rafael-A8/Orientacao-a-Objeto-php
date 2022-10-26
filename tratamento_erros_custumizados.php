<?php 

    class MinhaExceptionCustomizada extends Exception {
        private $erro = '';
        public function __construct($erro)

        {
            //Na sequencia recuperar o atributo erro do nosso objeto MinhaExceptionCustumizada, enta atravez do $this eu ajusto o contesto para assim ////recuperar o atributo do objeto e a esse atributo eu atribuo o valor recebido por parametro no construtor
            $this->erro = $erro;
        }

        public function exibirMensagemErroCustumizaa() {
            //retornar o atributo erro do objeto
            echo '<div style="border:solid 1px #000; padding: 20px; background-color: red; color:white;"';
                echo $this->erro;
            echo '</div>';
            //nossa função deixou de ser do tipo retorno pra ficar do tipo void
        }
    }
    try {
        throw new MinhaExceptionCustomizada('Esse é um erro de teste');
    } catch (MinhaExceptionCustomizada $e) {
        //Aqui nao e mais necessario da um echo do metodo exibirMensagemErroCustumizaa, pois agora ele nao tem mais return
        //Ele e uma função void que realiza esse processamento
        $e->exibirMensagemErroCustumizaa();
    }
