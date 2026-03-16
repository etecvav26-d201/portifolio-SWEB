<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = intval($_POST['numero']);
    $fibonacci = [];

    if ($n > 0) {
        $fibonacci[] = 0;
    }
    if ($n > 1) {
        $fibonacci[] = 1;
    }

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    echo implode(' ', $fibonacci);
}
?>