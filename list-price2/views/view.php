<?php if (!defined('FW')) {
    die('Forbidden');
}
$a = 1;
?>

<div>

        <?php if ($atts['title-service']) { ?>
            <h2 class="title-price"><?php echo $atts['title-service']; ?></h2>
        <?php } ?>

        <?php if ($atts['img-service']['url']) { ?>
            <h3 class="title-price"><?php echo $atts['img-service']['url']; ?></h3>
        <?php } ?>


    <?php if ($atts['addable']) { ?>
        <?php foreach ($atts['addable'] as $item) { ?>
            <div class="wrap-title-service">
                <h2 class="title">
                    <i class="fa fa-caret-right" aria-hidden="true"></i><?php echo $item['title-service']; ?></h2>


            </div>
            <ul class="wrap-title-price">
                <li>
                    <?php if ($item['service']) { ?>
                        <h3 class="title-price"><?php echo $item['service']; ?></h3>
                    <?php } ?>
                    <?php if ($item['price']) { ?>
                        <h3 class="title-price"><?php echo $item['price']; ?></h3>
                    <?php } ?>
                </li>
            </ul>

        <?php } ?>
    <?php } ?>
</div>

