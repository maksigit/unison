jQuery(document).ready(function ($) {
    $('.wrap-title-service').on('click', function () {
        $(this).next('title-price-all').toggleClass();
        $(this).find('fa').toggleClass('fa-sort-desc');
    });
});