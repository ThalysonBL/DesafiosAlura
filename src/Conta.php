<?php


class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    public function sacar(float $valorAScar)
    {
        if($valorAScar > $this->saldo){
            echo "Saldo indisponível";
            return;

        }
            $this->saldo -= $valorAScar;


    }

    public function depositar(float $valorADepositar): void
    {
    if (
        $valorADepositar < 0
    ){
        echo 'Valor precisa ser maior que zero';
        return;

    }
        $this->saldo += $valorADepositar;

    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo){
            echo 'Saldo indiponível';
            return;
        }
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);


    }
}