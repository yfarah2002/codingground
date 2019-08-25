<?php
    include_once "inc/Database.php";
    include_once "inc/HTMLGenerator.php";
    include "inc/head.php";
    $db = new Database();
    $htmler = new HTMLGenerator(20, 70);
?>
<main class="container">
    <?php
        $sql = "SELECT `name` , `price`, `description` FROM `product`";
        if(isset($_GET['searchterm'])) {
            $sql .= "WHERE `name` LIKE `%($_GET['searchterm'])%`
                    OR `description` LIKE `%($_GET['searchterm'])%`";
        }
        $sql .= "ORDER BY `stock` DESC LIMIT 6 OFFSET 0";
        $products = $db->productThumbnailSet($products);
    ?>
</main>

<?php include "inc/foot.php"; ?>