<?php
require 'inc/head.php';

if(isset($_SESSION['card']['product'])) {
    $productList = $_SESSION['card']['product'];
} else {
    $productList = [];
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Your cart</h2>
        </div>
    </div>

    <div class="row">
      <div class="col-12">
          <table class="table table-bordered">
              <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                    </tr>
              </thead>

              <tbody>
                    <?php if (!empty($productList)): ?>
                        <?php foreach ($productList as $product => $quantity): ?>
                            <tr>
                                <td><?= $product ?></td>
                                <td><?= $quantity ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td>Your cart is empty</td>
                        </tr>
                    <?php endif; ?>
              </tbody>
          </table>
      </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
