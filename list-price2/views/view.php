<?php if (!defined('FW')) {
    die('Forbidden');
}
?>
<div>
    <?php if ($atts['addable']) { ?>
        <?php foreach ($atts['addable'] as $item) { ?>
            <div class="wrap-title-service">
                <h2 class="title">
                    <i class="fa fa-caret-right" aria-hidden="true"></i><?php echo $item['option_1']; ?></h2>
                <div>
                    <?php if ($item['option_10']['url']) { ?>
                        <img src="<?php echo $item['option_10']['url']; ?>">
                    <?php } ?>
                </div>

            </div>
            <ul class="wrap-title-price">
                <li>
                    <?php if ($item['option_2']) { ?>
                        <h3 class="title-price"><?php echo $item['option_2']; ?></h3>
                    <?php } ?>
                    <?php if ($item['option_3']) { ?>
                        <h3 class="title-price"><?php echo $item['option_3']; ?></h3>
                    <?php } ?>
                </li>
                <li>
                    <?php if ($item['option_4']) { ?>
                        <h3 class="title-price"><?php echo $item['option_4']; ?></h3>
                    <?php } ?>
                    <?php if ($item['option_5']) { ?>
                        <h3 class="title-price"><?php echo $item['option_5']; ?></h3>
                    <?php } ?>
                </li>
                <li>
                    <?php if ($item['option_6']) { ?>
                        <h3 class="title-price"><?php echo $item['option_6']; ?></h3>
                    <?php } ?>
                    <?php if ($item['option_7']) { ?>
                        <h3 class="title-price"><?php echo $item['option_7']; ?></h3>
                    <?php } ?>
                </li>
                <li>
                    <?php if ($item['option_8']) { ?>
                        <h3 class="title-price"><?php echo $item['option_8']; ?></h3>
                    <?php } ?>
                    <?php if ($item['option_9']) { ?>
                        <h3 class="title-price"><?php echo $item['option_9']; ?></h3>
                    <?php } ?>
                </li>
            </ul>

        <?php } ?>
    <?php } ?>
</div>

