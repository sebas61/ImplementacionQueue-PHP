<?php

require_once __DIR__ . "/../model/Queue.php";

$queue = new Queue();

echo "¿Está vacía?: ";
echo ($queue->_isEmpty() ? "Sí" : "No") . "\n";
echo "Añadiendo datos: "."\n";

$queue->_push(10);
$queue->_push(20);
$queue->_push(30);
echo "Cola: " . $queue->_toString() . "\n";

echo "Tamaño actual: " . $queue->_size() . "\n";

echo "Elemento al frente: " . $queue->_peek() . "\n";

echo "Sacando: " . $queue->_pull() . "\n";
echo "Sacando: " . $queue->_pull() . "\n";

echo "Tamaño después de sacar: " . $queue->_size() . "\n";

echo "¿Está vacía ahora?: ";
if ($queue->_isEmpty()) {
    echo "Sí\n";
} else {
    echo "No\n";
}

echo "Sacando el ultimo: " . $queue->_pull() . "\n";

echo "¿Está vacía ?: ";
if ($queue->_isEmpty()) {
    echo "Sí\n";
} else {
    echo "No\n";
}

echo "Peek en cola vacía: ";
var_dump($queue->_peek());

echo "Tamaño final: " . $queue->_size() . "\n";