<?php

class Pedido {
    private $pedidos = []; // Armazena os pedidos gerados

    // Método para gerar um novo pedido
    public function gerar_pedido($data, $nome, $item, $quantidade, $valor) {
        // Cria um array associativo com os detalhes do pedido
        $pedido = [
            'data' => $data,
            'nome' => $nome,
            'item' => $item,
            'quantidade' => $quantidade,
            'valor' => $valor
        ];
        // Adiciona o pedido ao array de pedidos
        $this->pedidos[] = $pedido;
        return "Pedido gerado com sucesso."; // Retorna uma mensagem de sucesso
    }

    // Método para visualizar todos os pedidos gerados
    public function visualizar_pedidos() {
        if (empty($this->pedidos)) { // Verifica se não há pedidos gerados
            return "Não há pedidos para visualizar."; // Retorna uma mensagem informando que não há pedidos
        } else {
            $output = ""; // Inicializa uma string vazia para armazenar a saída
            foreach ($this->pedidos as $pedido) { // Itera sobre cada pedido gerado
                // Concatena os detalhes do pedido à string de saída
                $output .= "Data: " . $pedido['data'] . ", ";
                $output .= "Nome: " . $pedido['nome'] . ", ";
                $output .= "Item: " . $pedido['item'] . ", ";
                $output .= "Quantidade: " . $pedido['quantidade'] . ", ";
                $output .= "Valor: " . $pedido['valor'] . "\n";
            }
            return $output; // Retorna a string de saída com os detalhes de todos os pedidos
        }
    }
}

// Teste gerar_pedido
$pedido = new Pedido();
echo $pedido->gerar_pedido('06-03-2024', 'Rayan Tortelli de Lima', 'Burg Cheddar', 2, 80) . "\n";

// Teste visualizar_pedidos
echo $pedido->visualizar_pedidos() . "\n";

?>