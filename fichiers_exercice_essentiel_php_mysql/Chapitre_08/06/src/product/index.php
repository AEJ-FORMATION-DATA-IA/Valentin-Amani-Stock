<?php

require_once (__DIR__ . '/../../config/database.php');
require_once (__DIR__ . '/../../includes/header.php');

$stm = $pdo->query("SELECT id, name FROM product");

$rows = $stm->fetchAll(PDO::FETCH_ASSOC);

var_dump($rows);

$stm = $pdo->query("SELECT id, name FROM product");

$rows = $stm->fetchAll();

var_dump($rows);

$stm = $pdo->query("SELECT id, name FROM product");

$rows = $stm->fetchAll(PDO::FETCH_COLUMN, 0);

var_dump($rows);

$stm = $pdo->query("SELECT id, name FROM product");

$rows = $stm->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);

var_dump($rows);

?>

    <main role="main">

        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php foreach($rows as $row) { ?>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="img-fluid" src="https://fakeimg.pl/250x100/"/>
                                <div class="card-body">
                                    <p class="card-text">
                                        <a href="/src/product/show.php?id=<?=$row['id']?>"><?=$row['name']?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </main>

<?php

require_once (__DIR__ . '/../../includes/footer.php');

?>