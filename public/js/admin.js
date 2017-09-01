$(".alert").addClass("in").fadeOut(4500);

/* swap open/close side menu icons */
$('[data-toggle=collapse]').click(function () {
    // toggle icon
    $(this).find("i").toggleClass("glyphicon-chevron-right");
});
$('[data-toggle=collapse ]').click(function () {
    // toggle icon
    $(this).find("i").toggleClass("glyphicon-chevron-right");

});
$(document).ready(function () {
    $('#list').click(function (event) {
        event.preventDefault();
        $('#products .item').addClass('list-group-item');
    });
    $('#grid').click(function (event) {
        event.preventDefault();
        $('#products .item').removeClass('list-group-item');
        $('#products .item').addClass('grid-group-item');
    });
});
