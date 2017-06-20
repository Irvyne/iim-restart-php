(function ($) {
    let alert = $('.alert');

    if (alert.length)
        alert.delay(5000).slideUp("slow");
})(jQuery);

Array.from(document.getElementsByClassName('btn-confirm')).forEach(function (button) {
    button.addEventListener('click', function(e) {
        if (confirm("Are you sure?")) {
            return;
        }

        e.preventDefault();
    });
});