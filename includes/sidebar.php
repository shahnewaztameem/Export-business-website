<div class="col-3">
    <div class="column_Box mc thinColumnLink">
        <div class="tcl bullet divider">
            <div class="h h2">
                <b class="plusMinus">
                </b>
                <h2>
                    <a href="<?= BASE_URL;?>/products" title="Products">Products</a>
                </h2>
            </div>
            <div class="ic showHide_rp">
                <ul>
                    <?php
                        //show categories
                        $query = "SELECT * FROM categories";
                        $select_all_categories = mysqli_query($connection,$query); 
                        while($row = mysqli_fetch_assoc($select_all_categories)){
                            $cat_id = $row['cat_id'];
                            $cat_title = $row['cat_title'];
                            $cat_url = $row['cat_url'];
                            $parent_cat_id = $row['parent_cat_id'];
                            if(empty($parent_cat_id)){?>
                                <li>
                                    <b class='b2 fl'>
                                    </b>
                                    <p class='ofh'>
                                        <a href='<?= BASE_URL;?>/product/<?= $cat_id?>' title='<?= $cat_title?>'><?= $cat_title?></a>
                                    </p>
                                </li>
                                <?php } }?>
                </ul>
            </div>
        </div>
    </div>
    <div class="column_Box mc qc">
        <div class="h h2">
            <b class="plusMinus">
            </b>
            <h2>Contact Us
            </h2>
        </div>
        <div class="ic showHide_rp">
            <div class="uu lh13em">
                <p>
                    <b>Mobile :
                    </b> +8801841-041861
                </p>
                <p class="hr bdrB">
                </p>
                <p>
                    <span class="b dif large">mdmmcgroup69@gmail.com
                    </span>
                </p>
                <p class="hr bdrB">
                </p>
            </div>
        </div>
    </div>
</div>
