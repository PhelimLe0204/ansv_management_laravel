// $(".btn-detail-card-modal").on("click", function() {
//     const current_position = $(this);
//     const form_data = current_position.closest('.modal-content').find('.modal-body').find('.form-detail-card');

//     console.log(tinymce.get("general_issue").getContent());
//     console.log(form_data.serialize());

//     $.ajax({
//         url: "dashboard/detail",
//         type: "POST",
//         data: form_data,
//         success: function(response) {
//             if (response == 0) {
//                 // alert("Cõ lỗi! Mời kiểm tra thông tin và thử lại.");
//                 alertify.error("Lỗi thông tin! Mời thử lại.");
//             } else {
//                 console.log(response);
//                 current_position.closest('.card').find('.card-body').empty();
//                 current_position.closest('.card').find('.card-body').html(response);
//                 current_position.closest('.modal').modal("hide");
//                 alertify.success('Cập nhật thành công!');
//             }
//         },
//         error: function(error) {
//             // alert(error);
//             alertify.error("Lỗi hệ thống! Mời thử lại.");
//         }
//     });
// });

/*---------------------------------
    View "detail" - Ajax card 1
---------------------------------*/
$("#form-update-detail-1").submit(function(event) {
    event.preventDefault();

    $.ajax({
        // url: "{{route('project.update_from_detail')}}",
        url: "dashboard/detail",
        type: "POST",
        data: $('#form-update-detail-1').serialize(),
        success: function(response) {
            if (response == 0) {
                // alert("Cõ lỗi! Mời kiểm tra thông tin và thử lại.");
                alertify.error("Lỗi thông tin! Mời thử lại.");
            } else {
                $("#change-detail-card-1").empty();
                $("#change-detail-card-1").html(response);
                $("#modalUpdateDetail1").modal("hide");
                alertify.success('Cập nhật thành công!');
            }
        },
        error: function(error) {
            // alert(error);
            alertify.error("Lỗi hệ thống! Mời thử lại.");
        }
    });
});

/*---------------------------------
    View "detail" - Ajax card 2
---------------------------------*/
$("#form-update-detail-2").submit(function(event) {
    event.preventDefault();

    $('#general_issue').val(tinymce.get("general_issue").getContent());
    $('#solution').val(tinymce.get("solution").getContent());
    $('#ke_hoach_tuan_nay').val(tinymce.get("ke_hoach_tuan_nay").getContent());
    $('#ke_hoach_tuan_sau').val(tinymce.get("ke_hoach_tuan_sau").getContent());
    $('#ket_qua_tuan_truoc').val(tinymce.get("ket_qua_tuan_truoc").getContent());
    $('#ket_qua_tuan_nay').val(tinymce.get("ket_qua_tuan_nay").getContent());

    $.ajax({
        url: "dashboard/detail",
        type: "POST",
        data: $('#form-update-detail-2').serialize(),
        success: function(response) {
            if (response == 0) {
                alertify.error("Lỗi thông tin! Mời thử lại.");
            } else {
                $("#change-detail-card-2").empty();
                $("#change-detail-card-2").html(response);
                $("#modalUpdateDetail2").modal("hide");
                alertify.success('Cập nhật thành công!');
            }
        },
        error: function(error) {
            alertify.error("Lỗi hệ thống! Mời thử lại.");
        }
    });
});
