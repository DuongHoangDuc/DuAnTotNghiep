$(document).ready(function () {
    $("#datatable").DataTable();
});

$(".js-filter").click(function () {
    var brand = [],
        temArray = [];
    $.each($("[data-filters='brand']:checked"), function () {
        temArray.push($(this).val());
    });
    temArray.reverse();
    if (temArray.length !== 0) {
        brand += "?brand" + temArray.toString();
    }
    window.location.href = brand;
});
