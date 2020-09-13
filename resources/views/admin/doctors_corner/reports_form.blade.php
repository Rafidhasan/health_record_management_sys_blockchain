<div class="row">
    <div class="col-md-9">
        <h3>Report Details</h3>
        <div class="label">Enter reports Name</div>
        <div class="add">
            <input type="text" name="report_name[]" multiple class="form-control">
        </div>
        <br>
    </div>
    <div class="col-md-3">
        <a href="" class="btn btn-sm btn-primary addReport mt-4">Add more</a>
        <br>
        <a href="" class="btn btn-sm btn-danger removeReport mt-4">Remove</a>
    </div>
</div>

<script type="text/javascript">
    $('.addReport').on('click', function() {
        addReport();
    });

    $('tbody').on('click', '.removeRow', function() {
        $(this).parent().parent().remove();
    });

    function addReport() {
        var tr = '<div>'+
                    '<input type="text" name="report_name[]" multiple class="form-control">'+
                    '<br>'+
                '</div>';
        $('.add').append(tr);
    }
</script>
<br>
