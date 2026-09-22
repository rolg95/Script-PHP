<?php
$status = 'pago';

// match compara o valor e devolve o resultado do caso correspondente.
$mensagem = match ($status) {
    'pendente' => 'Aguardando pagamento',
    'pago' => 'Pagamento confirmado',
    'cancelado' => 'Pedido cancelado',
    default => 'Status desconhecido'
};

echo $mensagem;

