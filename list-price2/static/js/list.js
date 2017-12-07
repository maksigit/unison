jQuery(document).ready(function ($) {
    $('.wrap-title-service').on('click', function () {
        $(this).next().slideToggle();
        $(this).find('.fa').toggleClass('fa-sort-desc');
    });
});