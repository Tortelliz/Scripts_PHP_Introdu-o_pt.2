<?php

class Lanche {
    private $lanches = []; // Armazena os lanches cadastrados

    // Método para cadastrar um novo lanche
    public function cadastrar_lanche($nome, $ingrediente_1, $ingrediente_2, $ingrediente_3, $valor) {
        // Cria um array associativo com os detalhes do lanche
        $lanche = [
            'nome' => $nome,
            'ingrediente_1' => $ingrediente_1,
            'ingrediente_2' => $ingrediente_2,
            'ingrediente_3' => $ingrediente_3,
            'valor' => $valor
        ];
        // Adiciona o lanche ao array de lanches
        $this->lanches[] = $lanche;
        return "Lanche cadastrado com sucesso."; // Retorna uma mensagem de sucesso
    }

    // Método para visualizar todos os lanches cadastrados
    public function visualizar_lanches() {
        if (empty($this->lanches)) { // Verifica se não há lanches cadastrados
            return "Não há lanches cadastrados."; // Retorna uma mensagem informando que não há lanches cadastrados
        } else {
            $output = ""; // Inicializa uma string vazia para armazenar a saída
            foreach ($this->lanches as $lanche) { // Itera sobre cada lanche cadastrado
                // Concatena os detalhes do lanche à string de saída
                $output .= "Nome: " . $lanche['nome'] . ", ";
                $output .= "Ingredientes: " . $lanche['ingrediente_1'] . ", " . $lanche['ingrediente_2'] . ", " . $lanche['ingrediente_3'] . ", ";
                $output .= "Valor: " . $lanche['valor'] . "\n";
            }
            return $output; // Retorna a string de saída com os detalhes de todos os lanches
        }
    }
}

// Teste cadastrar_lanche
$lanche = new Lanche();
echo $lanche->cadastrar_lanche('X-Bacon', 'Bacon', 'Hamburguer', 'Queijo', 20.00) . "\n";
echo $lanche->cadastrar_lanche('X-Salada', 'Alface', 'Tomate', 'Hamburguer', 15.00) . "\n";

// Teste visualizar_lanches
echo $lanche->visualizar_lanches() . "\n";

?>