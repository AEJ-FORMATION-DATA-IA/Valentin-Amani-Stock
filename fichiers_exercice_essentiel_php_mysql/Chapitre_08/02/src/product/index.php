<?php

require_once (__DIR__ . '/../../config/database.php');
require_once (__DIR__ . '/../../includes/header.php');


$stm = $pdo->query("SELECT name FROM product");

$rows = $stm->fetchAll(PDO::FETCH_ASSOC);

?>

    <main role="main">

        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php

                    foreach($rows as $row) {
                        echo '<div class="col-md-4"><div class="card mb-4 box-shadow"><img class="img-fluid" src="https://fakeimg.pl/250x100/"/><div class="card-body"><p class="card-text">' . $row['name'] .'</p></div></div></div>';
                    }

                    ?>
                </div>
            </div>
        </div>

    </main>

<?php

require_once (__DIR__ . '/../../includes/footer.php');

?>