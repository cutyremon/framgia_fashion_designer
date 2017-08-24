$(document).ready(function() {
    $('#select-topic').change(function() {
        var idTopic = $(this).val();
        $.get('/style/' + idTopic, function(data) {
            $('#select-style').empty();
            for (var i in data) {
                var html = '';
                html += '<option value="'+ data[i].style.id+ '">';
                html += data[i].style.tittle + '</option>';
                $('#select-style').append(html);
            }
        });
    });
    // $('#designing').hide();
    // $('#select-style').change(function() {
    //     $('#designing').show();
    // });
});
