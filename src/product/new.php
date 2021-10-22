<?php

require_once (__DIR__ . './../../config/database.php');
require_once (__DIR__ . './../../includes/header.php');

if ($_POST) {
    $sql = "INSERT INTO produit (libelle) VALUES (?)";
    $a = $pdo->prepare($sql)->execute([$_POST['name']]);
}

$stm = $pdo->query("SELECT libelle FROM produit");

$stm->fetchAll(PDO::FETCH_ASSOC);

?>

    <main role="main">

        <div class="py-5 bg-light">
            <div class="container">
                <div class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content">
                    <form method="post" enctype="multipart/form-data" action="">
                        <div class="form-group">
                            <label for="name">Nom du produit</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>

                        <button type="submit" class="btn btn-primary">Valider</button>
                    </form>
                </div>
            </div>
        </div>

    </main>


<?php

require_once (__DIR__ . './../../includes/footer.php');

?>