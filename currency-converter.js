jQuery(document).ready(function ($) {
    $('#convertBtn').on('click', function () {
        var amount = $('#amount').val();
        var from = $('#from').val();
        var to = $('#to').val();

        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                action: 'convert_currency',
                amount: amount,
                from: from,
                to: to
            },
            success: function (response) {
                $('#result').text('Converted amount: ' + response);
            }
        });
    });
});
