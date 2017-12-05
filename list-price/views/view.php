<?php if (!defined('FW')) {
    die('Forbidden');
}

?>
<ul class="wrap-services">
    <li>
        <?php if ($atts['title_text']) { ?>
            <div class="wrap-title-service">
                <h2 class="title">
                    <i class="fa fa-caret-right" aria-hidden="true"></i><?php echo $atts['title_text']; ?></h2>
                <div>
                    <?php if ($atts['service_image']['url']) { ?>
                        <img src=" <?php echo $atts['service_image']['url']; ?>">
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <ul class="wrap-title-price">
            <li>
                <?php if ($atts['service1']) { ?>
                    <h3 class="title-price"><?php echo $atts['service1']; ?></h3>
                <?php } ?>
                <?php if ($atts['price1']) { ?>
                    <h3 class="title-price"><?php echo $atts['price1']; ?></h3>
                <?php } ?>
            </li>
            <li>
                <?php if ($atts['service2']) { ?>
                    <h3 class="title-price"><?php echo $atts['service2']; ?></h3>
                <?php } ?>
                <?php if ($atts['price2']) { ?>
                    <h3 class="title-price"><?php echo $atts['price2']; ?></h3>
                <?php } ?>
            </li>
            <li>
                <?php if ($atts['service3']) { ?>
                    <h3 class="title-price"><?php echo $atts['service3']; ?></h3>
                <?php } ?>
                <?php if ($atts['price3']) { ?>
                    <h3 class="title-price"><?php echo $atts['price3']; ?></h3>
                <?php } ?>
            </li>
            <li>
                <?php if ($atts['service4']) { ?>
                    <h3 class="title-price"><?php echo $atts['service4']; ?></h3>
                <?php } ?>
                <?php if ($atts['price4']) { ?>
                    <h3 class="title-price"><?php echo $atts['price4']; ?></h3>
                <?php } ?>
            </li>
        </ul>
    </li>
</ul>


<!--<div class="banner-with-link hotfix-row" style="background-image: url('<?php echo $atts['top_image']['url']; ?>');">
    <div class="container" style="text-align: <?php echo $atts['position']; ?>">
        <div class="banner-contant">
            <?php if ($atts['title']) { ?>
            <h2 class="title"><?php echo $atts['title']; ?></h2>
            <?php } ?>
            <?php if ($atts['sub_title']) { ?>
            <h3 class="sub-title"><?php echo $atts['sub_title']; ?></h3>
            <?php } ?>
            <?php if ($atts['link_title']) { ?>
            <a href="<?php echo $atts['link']; ?>" class="banner-button btn btn-black"><?php echo $atts['link_title']; ?></a>
            <?php } ?>
        </div>
    </div>
</div> -->