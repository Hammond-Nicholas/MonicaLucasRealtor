$(function () {
    var page = document.location.href;
    page = page.split('/');
    page = page[page.length -1];
    $('nav [href*="' + page + '"]').parent().addClass('active');
})