<?php

require_once (__DIR__ . './../../config/database.php');
require_once (__DIR__ . './../../includes/header.php');

$stm = $pdo->query("SELECT libelle FROM produit");

$rows = $stm->fetchAll(PDO::FETCH_ASSOC);

?>

<main role="main">

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach($rows as $row) { ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <p class="card-text">
                                <?=$row['libelle']?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <a href="./new.php" class="btn btn-primary">ajouter</a>
    </div>
</div>

</main>


<?php

require_once (__DIR__ . './../../includes/footer.php');

?>