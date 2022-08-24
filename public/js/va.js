$(function() {
        $('#datepicker').datepicker();
        $('#format').on('change', function() {
            $('#datepicker').datepicker('option', 'dateFormat', $(this).val());
        });
    });

    $(function() {
        $('#date-from').datepicker({ 'format': 'yyyy-mm-dd' });
        $('#date-from').datepicker('setDate', '{{ $from }}');
        $('#date-to').datepicker({ 'format': 'yyyy-mm-dd' });
        $('#date-to').datepicker('setDate', '{{ $to }}');
    })
