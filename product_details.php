<?php include "includes/db.php";?>
<?php include "includes/header.php";?>
<?php
    if(isset($_GET['product_id'])){
        $the_product_id = $_GET['product_id'];
        $query = "SELECT * FROM categories WHERE cat_id = {$the_product_id}";
        $select_all_product = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($select_all_product)) {
            $cat_id = $row['cat_id'];
            $parent_cat_id = $row['parent_cat_id'];
            $cat_title = $row['cat_title'];
            $product_content = $row['product_content'];
            $cat_image = $row['cat_image'];
            $product_image = $row['product_image'];
        }
    }
?>
<br class="lh2em" />
<div id="middle">
    <div id="bodyFormat1" class="wrap ls">
        <div class="row1 dt columns23">
            <?php
                if(isset($_GET['product_id'])){
                    $the_cat_id = $_GET['product_id'];
                    $query = "SELECT * FROM categories WHERE cat_id = $the_cat_id";
                    $select_all_sub_product = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($select_all_sub_product)) {
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];
                        $cat_image = $row['cat_image'];
                        $product_image = $row['product_image'];
                        $product_description = $row['product_description'];?>
                        <div class='col-2' style='padding-left:0;'>
                            <div class='h1'>
                                <h1> <?= $cat_title ?></h1>
                            </div>
                            <br />
                            <div class='pdf'>
                                <!-- product final details div starts -->
                                <table class='m0a'>
                                    <tr>
                                        <td>
                                            <table style='text-align: center;'>
                                                <tr>
                                                    <td class='ac responsiveLargeImageWidth'>
                                                        <img src='<?= BASE_URL?>/tpadmin/images/product_image/<?= $product_image ?>' class='bdr' alt='{$cat_title}' title='<?= $cat_title ?>' style='border-width:5px;' />
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class='pt15px'>
                                            <div class='ac un'>
                                                <a href='<?= BASE_URL?>/enquiry' class='buttonBig large c10px dib p10px20px' title='Enquiry Now'>Enquiry Now</a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <br />
                                <div class='data p10px aj'>
                                    <p><?= $product_description ?></p>
                                </div>
                            </div>
                        </div>
           <?php } } ?>

            <!--            sidebar-->
            <?php include "includes/sidebar.php";?>
        </div>
    </div>
</div>
<br />

<!--footer-->
<?php include "includes/footer.php";?>