<?php
class Mensagem {
    // Propriedades da mensagem
    public $remetente;
    public $destinatario;
    public $conteudo;
    public $lida;

    // Método construtor para inicializar a mensagem com os dados fornecidos
    public function __construct($remetente, $destinatario, $conteudo) {
        $this->remetente = $remetente;
        $this->destinatario = $destinatario;
        $this->conteudo = $conteudo;
        $this->lida = false; // Por padrão, a mensagem é inicializada como não lida
    }

    // Método para enviar a mensagem
    public function enviarMensagem() {
        // Lógica para enviar uma mensagem entre usuários do sistema
        // Aqui, apenas simulamos o envio da mensagem
        echo "Mensagem enviada de {$this->remetente} para {$this->destinatario}: {$this->conteudo}\n";
    }

    // Método para marcar a mensagem como lida
    public function marcarComoLida() {
        $this->lida = true; // Altera o status da mensagem para lida
        echo "Mensagem lida\n";
    }

    // Método para excluir a mensagem
    public function excluirMensagem() {
        // Lógica para excluir a mensagem
        // Aqui, apenas simulamos a exclusão da mensagem
        echo "Mensagem de {$this->remetente} para {$this->destinatario} excluída\n";
    }
}

// Exemplo de uso:
$mensagem = new Mensagem("Remetente", "Destinatario", "Conteúdo da mensagem");
$mensagem->enviarMensagem();  // Envia a mensagem
$mensagem->marcarComoLida();  // Marca a mensagem como lida
$mensagem->excluirMensagem(); // Exclui a mensagem
?>