$(document).ready(function () {

    function search($page) {
        $category = $('#search-category').val();
        $keyword = $('#search-keyword').val();
        $gender = $('#search-gender').val();
        $color = $('#search-color').val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            url: '/search',
            type: 'post',
            data: {
                category: $category,
                keyword: $keyword,
                gender: $gender,
                color: $color,
                page: $page
            },
            success: function (data) {
                $('#search-result').html(data);
            }
        });
    };
    search();


    $('#search-button').on('click', function () {
        search();
    });

    $('#search-gender-1, #search-gender-2').on('click', function () {
        $gender = $(this).data('gender');
        $('#search-gender').val($gender);
        search();
        $("li").removeClass("active");
        $(this).addClass("active");
    });

    $('#search-color-1, #search-color-2, #search-color-3, #search-color-4, #search-color-5').on('click', function () {
        $color = $(this).data('color');
        $('#search-color').val($color);
        search();
        $("li").removeClass("active");
        $(this).addClass("active");
    });
    $('#topicList').on('click', function () {
        $("a").removeClass("active");
        $(this).addClass("active");
    });

    $(document).on('click', '#page-paginate .pagination a', function (e) {
        search(this.text);
        $('#page-paginate .pagination').find('li').removeClass('active');
        $(this).parent().addClass('active');
        e.preventDefault();  //tắt event load lại trang cua the <a>
    });
});
