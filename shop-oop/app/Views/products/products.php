<?php require APPROOT.'/Views/layout/header.php';?>
    <?php foreach ($data['products'] as $product) :  ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><strong>Products Name:</strong> <?= $product->name; ?></p>
                </div>
            </div>
        </div>
    <?php  endforeach; ?>
<?php require APPROOT.'/Views/layout/footer.php';?>