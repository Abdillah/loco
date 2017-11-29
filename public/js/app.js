$(document).ready(function() {
    $("#price-range").ionRangeSlider({
        type: 'double',
        min: 5000,
        max: 100000,
        step: 500,
        from: 8000,
        to: 40000,
    });
});
