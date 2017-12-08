<?php if (!defined('FW')) {
    die('Forbidden');
}
$a = 1;
?>


<div class="wrap-title-service">
    <?php if ($atts['titleservice']) { ?>
        <h2 class="title-price">
            <i class="fa fa-caret-right" aria-hidden="true"></i><?php echo $atts['titleservice']; ?>
        </h2>
    <?php } ?>

    <?php if ($atts['imgservice']['url']) { ?>
        <img src="<?php echo $atts['imgservice']['url']; ?>" alt="">
    <?php } ?>
</div>

<?php if ($atts['addable']) { ?>
<?php foreach ($atts['addable'] as $item) { ?>
<ul class="wrap-title-price">
    <li>
        <?php if ($item['service']) { ?>
            <h3 class="title-price"><?php echo $item['service']; ?></h3>
        <?php } ?>


        <?php if ($item['price']) { ?>
            <h3 class="title-price"><?php echo $item['price']; ?></h3>
        <?php } ?>
    </li>
    <?php } ?>
    <?php } ?>


