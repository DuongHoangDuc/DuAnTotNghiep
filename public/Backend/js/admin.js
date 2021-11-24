$(function () {
    $(".checkbox_wrapper").on("click", function () {
        $(this)
            .parents(".card")
            .find(".checkbox_childrent")
            .prop("checked", $(this).prop("checked"));
    });

    $(".checkall").on("click", function () {
        $(this)
            .parents()
            .find(".checkbox_childrent")
            .prop("checked", $(this).prop("checked"));
        $(this)
            .parents()
            .find(".checkbox_wrapper")
            .prop("checked", $(this).prop("checked"));
    });
});

$(document).ready(function () {
    load_gallery();
    function load_gallery() {
        var product_id = $(".product_id").val();
        var _token = $('.input[name="_token"]').val();
        $.ajax({
            url: "/admin/gallery/gallery-all",
            method: "GET",
            data: { product_id: product_id, _token: _token },
            success: function (data) {
                $("#gallery_load").html(data);
            },
        });
    }

    $("#file").change(function () {
        var error = "";
        var files = $("#file")[0].files;
        if (files.length > 5) {
            error += "<p>Tối đa 5 ảnh</p>";
        } else if (files.length == "") {
            error += "<p>không được để trống</p>";
        }
        if ((error = "")) {
        } else {
            $("#file").val("");
            $("#error_gallery").html(
                '<span class = "text-danger">' + error + "</span>"
            );
            return false;
        }
    });
});

$(document).ready(function () {
    $("#datatable").DataTable();
});
