<?php
session_start();
require 'inc/head.php';
?>
<section class="cookies container-fluid">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product Id</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Qty</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $id => $cookie) { ?>
                        <tr>
                            <td><?php echo $cookie['id']; ?></td>
                            <td><img src="<?php echo $cookie['picture'] ?>" alt="<?php echo $cookie['name'] ?>" class="img-responsive" style="max-height: 2rem;"></td>
                            <td><?php echo $cookie['name']; ?></td>
                            <td><?php echo $cookie['description']; ?></td>
                            <td><?php echo $cookie['qty']; ?></td>
                        </tr>
                <?php
                    };
                }
                ?>
            </tbody>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>