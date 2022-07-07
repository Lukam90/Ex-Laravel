function deleteStudent(e) {
    console.log(e, "delete");
}

/*

$(document).on('click', '.deletebtn', function () {
    var stud_id = $(this).val();
    $('#DeleteModal').modal('show');
    $('#deleteing_id').val(stud_id);
});

$(document).on('click', '.delete_student', function (e) {
    e.preventDefault();

    $(this).text('Deleting..');
    var id = $('#deleteing_id').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "DELETE",
        url: "/delete-student/" + id,
        dataType: "json",
        success: function (response) {
            // console.log(response);
            if (response.status == 404) {
                document.querySelector('#success_message').addClass('alert alert-success');
                document.querySelector('#success_message').text(response.message);
                document.querySelector('.delete_student').text('Yes Delete');
            } else {
                $('#success_message').html("");
                $('#success_message').addClass('alert alert-success');
                $('#success_message').text(response.message);
                $('.delete_student').text('Yes Delete');
                $('#DeleteModal').modal('hide');
                fetchstudent();
            }
        }
    });
});

*/