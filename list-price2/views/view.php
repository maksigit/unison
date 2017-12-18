<?php if (!defined('FW')) {
    die('Forbidden');
}
$a = 1;
?>


<?php if ($atts['color_picker']) { ?>

<?php } ?>


<div class="wrap-title-service" style="background-color: <?php echo $atts['color_picker']; ?>">
    <?php if ($atts['titleservice']) { ?>
        <h2 class="title-price">
            <i class="fa fa-caret-right" aria-hidden="true"></i><?php echo $atts['titleservice']; ?>
        </h2>
    <?php } ?>

    <?php if ($atts['imgservice']['url']) { ?>
        <img src="<?php echo $atts['imgservice']['url']; ?>" alt="">
    <?php } elseif ($atts['icons']['icon-class']) { ?>
        <h3 class="title-price"><i class="<?php echo $atts['icons']['icon-class']; ?>"></i></h3>
    <?php } ?>
</div>

<div class="title-price-all">
<?php if ($atts['addable']) { ?>
    <?php foreach ($atts['addable'] as $item) { ?>
        <ul class="wrap-title-price">
            <li>
                <?php if ($item['service']) { ?>
                    <h3 class="title-price"><?php echo $item['service']; ?></h3>
                <?php } ?>


                <?php if ($item['price']) { ?>
                    <h3 class="price"><?php echo $item['price']; ?></h3>
                <?php } ?>
            </li>

        </ul>
    <?php } ?>
<?php } ?>
</div>
<!--==================================ICON & BACKGROUND========================================-->

<!--==========================================================================-->




