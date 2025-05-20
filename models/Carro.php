<?php
namespace Models;

/**
 * Classe que representa um carro no sistema
 * Implementa a interface locavel definida em Veiculo.php
 */
class Carro extends Veiculo implements Locavel {
    /**
     * Calcular o valor do aluguel para o carro
     * 
     * @param int $dias Quantidade de dias para o aluguel
     * @return float Valor total do aluguel
     */
    public function calcularValorAluguel(int $dias): float {
        return $dias * DIARIA_CARRO;
    }

    /**
     * Método para alugar o carro
     * 
     * @return string Mensagem de resultado da operação
     */
    public function alugar(): string {
        if ($this->disponivel) {
            $this->disponivel = false;
            return "Carro '{$this->modelo}' alugado com sucesso!";
        } 
        return "Carro não disponível para aluguel.";
    }

    /**
     * Método para devolver o carro à locadora
     * 
     * @return string Mensagem de resultado da operação
     */
    public function devolver(): string {
        if (!$this->disponivel) {
            $this->disponivel = true;
            return "Carro '{$this->modelo}' devolvido com sucesso!";
        } 
        return "Carro '{$this->modelo}' já está disponível.";
    }
}