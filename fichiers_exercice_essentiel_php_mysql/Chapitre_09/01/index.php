<?php

require_once (__DIR__ . '/config/database.php');
require_once (__DIR__ . '/includes/header.php');

?>

    <main role="main">

        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <p>
                        <a href="/src/user/new.php" class="btn btn-success">Créer un compte</a>
                    </p>
                    <p>
                        <a href="/src/user/login.php" class="btn btn-primary">Login</a>
                    </p>
                </div>
            </div>
        </div>

    </main>


<?php

require_once (__DIR__ . '/includes/footer.php');

?>