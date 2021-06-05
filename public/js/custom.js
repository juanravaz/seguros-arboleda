$(document).ready(function() {
    $('select[name="brand"]').on('change', function() {
        var brand = $(this).val()
            //alert(brand);
        if (brand) {
            $.ajax({
                url: 'cars/get/' + brand,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('select[name="model"]').html('<option value=" "> --Select a Model--</option>');
                    $.each(data, function(key, value) {
                        $('select[name="model"]').append('<option value="' + value + '">' + value + '</option>');
                    });
                }
            });
        } else {
            $('select[name="model"]').empty();
        }
    });
});