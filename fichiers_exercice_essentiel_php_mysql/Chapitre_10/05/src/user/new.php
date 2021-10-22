<?php

require_once (__DIR__ . '/../../config/database.php');
require_once (__DIR__ . '/../../includes/header.php');

if ($_POST) {
    $sql = "INSERT INTO user (email, password) VALUES (?,?)";
    $password = password_hash($_POST['password'], PASSWORD_ARGON2I);
    $rows = $pdo->prepare($sql)->execute([$_POST['email'], $password]);

    if ($rows > 0) {
        echo 'Merci de vous connecter';
    } else {
        echo 'Error';
    }
}

?>

    <main role="main">

        <div class="py-5 bg-light">
            <div class="container">
                <div class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </form>
                </div>
            </div>
        </div>

    </main>


<?php

require_once (__DIR__ . '/../../includes/footer.php');

?>