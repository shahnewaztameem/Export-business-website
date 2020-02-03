<?php include "includes/db.php";?>
<?php include "includes/header.php";?>
<br class="lh2em" />
<div id="middle">
    <div id="bodyFormat1" class="wrap ls">
        <div class="row1 dt columns23">
            <div class="col-2" style="padding-left:0;">
                <!-- header ends -->

                <div class="h1">
                    <h1>Contact Us</h1>
                </div>
                <p class="breadcrumb ar uu small"><a href="<?= BASE_URL;?>/" title="Home">Home</a> <b class="ffv p2px">&rsaquo;</b> <?php $page = pathinfo(__FILE__, PATHINFO_FILENAME); echo ucfirst($page);?></p>
                <br />
                <div class="contact_image2 bdr dashed p15px">
                    <table class="w100 formTable bdr0">
                        <tr>
                            <td>
                                <p class="dif large b mb5px u"> <span itemprop="company">EXPORT WORLD</span></p>
                                <p class="mb10px">House-186(GF), Block-K, RD-19, South Bonosree<br />khilgaon, Dhaka-1219, Bangladesh</p>
                                <p class="mb7px headVr p5px10px dib"><b>Call Us :</b> <span itemprop="tel">+8801517-054064</span></p>
                                <p class="mb2px"><b>Email :</b> <a itemprop="email" href="mailto:shahnewaztamim@gmail.com">shahnewaztamim@gmail.com</a> , <a itemprop="email" href="mailto:shahnewaztamim@gmail.com">shahnewaztamim@gmail.com</a></p>
                                <p class="mb2px"><b>Contact Person :</b> <span itemprop="name">Shahnewaz Tameem</span></p>
                                <p class="mb2px"><b>Skype ID :</b> shahnewaztameem</p>
                                <p class="mb2px"><b>WhatsApp :</b> +8801517-054064</p>


                            </td>
                        </tr>
                    </table>
                </div><br />
                <!-- footer -->
            </div>
<!--            sidebar-->
       <?php include "includes/sidebar.php"?>
        </div>
    </div>
</div>
<br />


<!--footer-->
<?php include "includes/footer.php";?>