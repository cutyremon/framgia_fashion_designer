$(document).ready(function () {
    $("a[id*='ajax_modal_']").on('click', function () {
        var styleId = $(this).data('id');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            // phương thức dữ liệu được truyền đi
            url: '/comment/' + styleId,
            type: 'GET',
            data: {},
            success: function ($respose) {//kết quả trả về từ server nếu gửi thành công
                $('#commentBox').html($respose);
                // $('#myModalLabel')
            },
        });
    });

    function postComment_($page) {
        $comment = $('#comment').val();
        $styleId_1 = $('input#styleId_1').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            url: '/addcomment',
            type: 'post',
            data: {
                comment: $comment,
                styleId_1: $styleId_1,
                page: $page
            },
            success: function (data) {
                $('#commentBox').html(data);
            }

        });

    }

    $('button#postComment').on('click', function () {
        // alert('aaaaaaaaaa');
        postComment_();
    });
})
