<h4><i class="fa fa-plus"></i> Add New Region</h4>
<hr/>
<form action="" id="regionForm" method="POST" role="form">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="region_name" id="region_name" class="form-control validate[required]" data-errormessage-value-missing="Region name is required!" data-prompt-position="bottomRight"  placeholder="Enter Region Name">
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <select id="region_active" name="region_active" class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight">
            <option value="1">Active</option>
            <option value="0">Block</option>
        </select>
    </div>
    <button type="button" id="saveRegion" class="btn btn-primary">SAVE</button>
    <br/>
    <br/>
</form>

@include('partials.scripts._dependencies')

@include('partials.scripts._addRegion')

@include('partials.scripts._onlyJquery')
@include('partials.scripts._datatable')