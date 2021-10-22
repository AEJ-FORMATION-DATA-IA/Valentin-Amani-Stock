<?php

require_once (__DIR__ . '/../../config/database.php');
require_once (__DIR__ . '/../../includes/header.php');

?>

    <main role="main">

        <div class="py-5 bg-light">
            <div class="container">
                <div class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Type</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                        </tbody>
                    </table>
                    <p>
                        <a href="/src/item/new.php" class="btn btn-primary">New</a>
                    </p>
                </div>
            </div>
        </div>

    </main>


<?php

require_once (__DIR__ . '/../../includes/footer.php');

?>