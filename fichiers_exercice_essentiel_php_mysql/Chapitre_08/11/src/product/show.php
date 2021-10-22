<?php

require_once (__DIR__ . '/../../config/database.php');
require_once (__DIR__ . '/../../includes/header.php');

if ($_GET) {
    $stm = $pdo->prepare("SELECT * FROM product WHERE id = ?");
    $stm->bindValue(1, $_GET['id']);
    $stm->execute();

    $row = $stm->fetch(PDO::FETCH_ASSOC);
}

?>

    <main role="main">

        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <h1><?=$row['name']?></h1>
                    <p>
                        <a class="btn btn-warning" href="/src/product/edit.php?id=<?=$row['id']?>">Edit</a>
                    </p>
                </div>
            </div>
        </div>

    </main>

<?php

require_once (__DIR__ . '/../../includes/footer.php');

?>