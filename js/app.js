(function ($) {
    let alert = $('.alert');

    if (alert.length)
        alert.delay(5000).slideUp("slow");
})(jQuery);