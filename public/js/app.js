$("#myButton").click(function () {
    let isHide = $(this).val() !== 'hide';
    $(this).attr('class', isHide ? "hide" : "show");
    $(this).html(isHide ? "Скрыть" : "Показать");
    $(this).attr('value', isHide ? "hide" : "show");
    $("#myTable").toggle();
});