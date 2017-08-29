$(document).ready(function () {
    $('#select-topic').change(function () {
        var idTopic = $(this).val();
        $.get('/style/' + idTopic, function (data) {
            $('#select-style').empty();
            for (var i in data) {
                var html = '';
                html += '<option value="' + data[i].style.id + '">';
                html += data[i].style.tittle + '</option>';
                $('#select-style').append(html);
            }
        });
    });

    function search($page) {
        var idCategory = $('#search-category').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            url: '/searchCostume/' + idCategory,
            type: 'get',
            data: {
                page: $page
            },
            success: function (data) {
                $('#result').html(data);
            }
        });
    };

    // $('#designing').hide();
    // $('#select-style').change(function() {
    //     $('#designing').show();
    // });
    var idCategory;
    $('#select-hat, #select-jewelry, #select-shirt, #select-accessories, #select-shoes, #select-pants').on('click', function () {
        idCategory = $(this).data('category');
        $('#search-category').val(idCategory);
        search();
    });

    var idProduce;
    $(document).on('click', '.check', function () {
        $(this).parent('.product-item').find('img').attr('src', '/images/giphy.gif');
        idProduce = $(this).parent('.product-item').find('.check').data('id');

    });
    var costume = [];
    $(document).on('click', '#select .modal-footer button', function () {
        $.get('/produce/' + idProduce, function (data) {
            $('#designing').find('.img_' + idCategory).attr('src', data.image);
            var html = '';
            html += '<ul>';
            html += '<li>' + "Tên:" + data.produce_name + '</li>';
            html += '<li>' + "Mau:" + data.color + '</li>';
            html += '<li>' + "Giới tính:";
            html += data.gender == 0 ? "Nữ" : "Nam" + '</li>';
            html += '<li>' + "Mô tả:" + data.description + '</li>';
            html += '<ul>';
            $('#designing').find('.information_' + idCategory).append(html);

        });
        costume.push(idProduce);
    });

    // $('#allSave').on('click', function () {
    //     $.ajax({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //         },
    //         url: '/costume/',
    //         type: 'post',
    //         data: {
    //
    //         },
    //         success: function (data) {
    //
    //         }
    //
    //     });
    // });

    $(document).on('click', '#page-paginate .pagination a', function (e) {
        search(this.text);
        $('#page-paginate .pagination').find('li').removeClass('active');
        $(this).parent().addClass('active');
        e.preventDefault();  //tắt event load lại trang cua the <a>
    });
});
