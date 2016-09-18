@include('partials.scripts._dependencies')


<script type="text/javascript">
$(function(){
    $('#wcategory').on('change', function(){
        var c = $(this).val();
        if(c != "Panel"){
            alert(3)
            $('#wcolumn').html('<option>1</option><option>2</option>');
        }
    });
});
</script>