<?php declare(strict_types=1);

function maFonction(int $int) : string {
    return (string)$int;
}

echo maFonction(1);


function spread(...$args) {
    var_dump($args);
}

spread(1, 2, 3, 4, 5);

?>