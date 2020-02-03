<?php include "includes/db.php";?>
<?php include "includes/header.php";?>
<?php include "includes/pagination.php";?>
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
            <div class="col-2" style="padding-left:0;">
                <!-- header ends -->
                <div class="h1">
                    <h1>
                       <?php
                        if(isset($cat_title)){echo $cat_title;}
                        ?>
                    </h1>
                </div>
                <br />
                <div class="pdf">
                        <!-- product final details div starts -->
                        <table class="m0a">
                            <tr>
                                <td>
                                    <center>
                                        <table style="text-align: center;">
                                            <tr>
                                                <td class="pt15px">
                                                    <div>
                                                        <?php
                                                            if(isset($product_content)){echo $product_content;}
                                                        ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td class="pt15px">
                                    <div class="ac un">
                                        <a href="<?= BASE_URL;?>/enquiry" class="buttonBig large c10px dib p10px20px" title="Enquiry Now">Enquiry Now</a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <br/>
                        <br/>
                        <br/>
                        <div class="classified3Images">
                            <ul class="lsn m0px p0px fo bxslider">
                                <?php
                                    if(isset($_GET['product_id'])){
                                    $the_product_id = $_GET['product_id'];
                                    $query = "SELECT * FROM categories Where parent_cat_id = $the_product_id LIMIT $page_1,9";
                                    $select_all_product = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($select_all_product)) {
                                        $cat_id = $row['cat_id'];
                                        $parent_cat_id = $row['parent_cat_id'];
                                        $cat_title = $row['cat_title'];
                                        $product_content = $row['product_content'];
                                        $cat_image = $row['cat_image'];
                                        $product_image = $row['product_image'];
                                        $product_description = $row['product_description'];
                                        if(empty($product_description)){?>
                                            <li style='height: 250px;'> <br><br>
                                                <div class='bdr p5px'>
                                                    <a href='<?= BASE_URL?>/product_details/<?= $cat_id ?>'><span class='b dif'><?= $cat_title?></span></a>
                                                </div>
                                                <p class='divider bdr p2px bdrT0'>
                                                </p>
                                                <div class='ac data bdrT0 lh0 p5px'>
                                                    <div class='imgFrm pr'>
                                                        <div class='dummy'>
                                                        </div>
                                                        <div class='img-container'>
                                                            <a class='fancybox' data-fancybox-group='showZoomImage' title='' href='<?= BASE_URL;?>/tpadmin/images/product_image/<?= $product_image?>'>
                                                                <span class='iconZoom'>
                                                                </span>
                                                                <img src='<?= BASE_URL;?>/tpadmin/images/product_image/<?= $product_image ?>' alt='<?= $cat_title ?> ' title='<?= $cat_title ?>' style='width:auto; max-width:100%; max-height:100%;' />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php }
                                        
                                        else { ?>
                                            <div class='data'>
                                                <div class='p5px10px'><a name='867058'></a>
                                                    <a href='<?= BASE_URL;?>/product_details/<?= $cat_id ?>' class='dif b' title=''><?= $cat_title ?></a>
                                                </div>
                                                <p class='divider bdr p2px bdrL0 bdrR0'></p>
                                                <table class='w100 formTable bdr0 imgWidth' style='height: 75px; overflow: hidden;'>
                                                    <tbody>
                                                        <tr style='height: 75px; overflow: hidden;'>
                                                            <td class='p10px vat w100px imgWidth100 lh0'><a href='<?= BASE_URL;?>/product_details/<?= $cat_id ?>' title=''><img src='<?= BASE_URL;?>/tpadmin/images/product_image/<?= $product_image ?>' alt='<?= $cat_title ?>' title='<?= $cat_title ?>'></a></td>
                                                            <td class='p10px'>
                                                                <div class='aj' style='height: 56px; overflow: hidden;'>
                                                                    <p align='justify'>
                                                                        <?= $product_description ?>
                                                                    </p>
                                                                </div>
                                                                <b class='m n small'><a class='dif u' href='<?= BASE_URL;?>/product_details/<?= $cat_id ?>' title='<?= $cat_title ?>'>More Details...</a></b>
                                                                <br />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php } } }?>
                                <br><br>
                                
  


                            </ul>

                        </div>
                    </div>
      
                <!-- footer -->
                <!-- .pagination start -->
                
                
                <!-- .pagination end -->
            </div>

            <!--            sidebar-->
            <?php include "includes/sidebar.php";?>

        </div>
    </div>
</div>
<br />

<!--footer-->
<?php include "includes/footer.php";?>