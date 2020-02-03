<?php include "includes/db.php";?>
<?php include "includes/header.php";?>
<?php include "includes/pagination.php";?>


<br class="lh2em" />
<div id="middle">
    <div id="bodyFormat1" class="wrap ls">
        <div class="row1 dt columns23">
            <div class="col-2" style="padding-left:0;">
                <!-- header ends -->
                <div class="h1">
                    <h1>Products</h1>
                </div>
                <p class="breadcrumb ar uu small">
                    <a href="<?= BASE_URL?>/" title="Home">Home
                    </a>
                    <b class="ffv p2px">&rsaquo;
                    </b> <?php $page = pathinfo(__FILE__, PATHINFO_FILENAME); echo ucfirst($page);?>
                </p>
                <br />
                <br />
                <div class="classified3Images">
                    <ul class="lsn m0px p0px fo bxslider">
                        <?php
                        //show categories
                        $query = "SELECT * FROM categories LIMIT $page_1,9";
                        $select_all_categories = mysqli_query($connection,$query); 
                        while($row = mysqli_fetch_assoc($select_all_categories)){
                            $cat_id = $row['cat_id'];
                            $cat_title = $row['cat_title'];
                            $cat_image = $row['cat_image'];
                            $cat_url = $row['cat_url'];
                            $parent_cat_id = $row['parent_cat_id'];
                            if(empty($parent_cat_id)){ ?>
                                <li>
                                    <div class='h headVr large p7px'>
                                        <b class='b1'>
                                        </b>
                                        <h2>
                                            <a href='<?= BASE_URL?>/product/<?= $cat_id?>/<?= $cat_url ?>' class='dif b' title='<?= $cat_title ?>'> <?= $cat_title ?>
                                            </a>
                                        </h2>
                                    </div>
                                    <div class='ac data p5px'>
                                        <div class='lh0 imgFrm pr'>
                                            <div class='dummy'>
                                            </div>
                                            <div class='img-container'>
                                                <a title='<?= $cat_title ?>' href='<?= BASE_URL?>/product/<?= $cat_id?>/<?= $cat_url?>'>
                                                    <img src='<?= BASE_URL?>/tpadmin/images/category_image/<?= $cat_image ?>' alt='<?= $cat_title ?>' title='<?= $cat_title ?>' />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                    <?php } }?>
                    </ul>
                </div>
 
                <!-- footer -->
                <!-- .pagination start -->
                <div>
                
                    <ul class="pagination_ul">
                        <li class="pagination">
                            <ul>
<!--                                <li class='active'><a href='products681a.html?id=1'>1</a></li>-->
<!--                                <li><a href='products0b30.html?id=2'>2</a></li>-->
                                <?php
                                    for($i = 1; $i <= $count; $i++){
                                        if($i == $page){
                                            echo "<li class='active'><a href='products.php?page={$i}'>{$i}</a></li>";
                                        }
                                        else {
                                            echo "<li><a href='products.php?page={$i}'>{$i}</a></li>";
                                        } 
                                    }
                                ?>
                                
                            </ul>
                        </li>
                    </ul>
                </div>
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
