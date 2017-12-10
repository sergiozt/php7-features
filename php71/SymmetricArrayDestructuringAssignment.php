<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

list($a, $b, $c) = array(1, 2, 3);
[$a, $b, $c] = [1, 2, 3];

list("a" => $a, "b" => $b, "c" => $c) = array("a" => 1, "b" => 2, "c" => 3);
["a" => $a, "b" => $b, "c" => $c] = ["a" => 1, "b" => 2, "c" => 3];

list($a, $b) = array($b, $a);
[$a, $b] = [$b, $a];

$pdo = new PDO('mysql:host=...;dbname=...', '...', '...');
$stmt = $pdo->query('SELECT id, val FROM ...');

while (['id' => $id, 'val' => $val] = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // logic here with $id and $val
}