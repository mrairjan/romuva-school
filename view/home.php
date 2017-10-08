<?php
/**
 * @var array $products
 * @var string $paginateTemplate
 */
view('partials/header');
?>

<h2>Produktai</h2>

<table>
    <tr>
        <td>Pavadinimas</td>
        <td>Aprašymas</td>
        <td>Nuotrauka</td>
        <td></td>
    </tr>

    <?php foreach ($products as $product) { ?>
        <tr>
            <td><a href=""><?= $product[PRODUCT_NAME] ?></a></td>
            <td><?= substr($product[PRODUCT_DESCRIPTION], 0, 100) ?>...</td>
            <td><img class="icon" src="<?= $product[PRODUCT_IMAGE] ?>"></td>
            <td>
                <form method="post">
                    <input type="hidden" name="product_id" value="<?= $product[PRODUCT_ID]?>">
                    <input type="submit" name="submit" value="Įtraukti į krepšelį">
                </form>
            </td>
        </tr>
    <?php } ?>

</table>

<?= $paginateTemplate ?>

<?php
view('partials/footer');
?>
