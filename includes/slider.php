<div id="flash">
    <div class="banner_area">
        <div class="fluid_container">
            <div class="fluid_dg_wrap fluid_dg_charcoal_skin fluid_container" id="fluid_dg_slider">
                <img src="<?= BASE_URL;?>/tpadmin/images/slide_image/indenting_banner-min.jpg" alt="slider" title="" width="1000px" height="361px" />
                <div data-thumb="<?= BASE_URL;?>/tpadmin/images/slide_image/indenting_banner-min.jpg" data-src="<?= BASE_URL;?>/tpadmin/images/slide_image/indenting_banner-min.jpg"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(window).load(function() {
            jQuery('#fluid_dg_slider').fluid_dg({
                thumbnails: true,
                pagination: true,
                height: '55%',
                navigationHover: false,
                fx: "mosaicRandom",
                loader: 'none',
                hover: 'false',
                playPause: 'true',
                time: 1000
            });
        });

    </script>
    <div class="cb">
    </div>
</div>
