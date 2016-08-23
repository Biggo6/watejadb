<?php

$c = Company::find($id);

?>

<div class="col-sm-6 portlets ui-sortable">
    <div class="widget">
        <div class="widget-header transparent">
            <h2><strong><i class="fa fa-edit"></i> Update Company</strong> Information <span id="loader" style="display:none" class="pull-right"><img src="{{url('images/loader.gif')}}"></span></h2>

        </div>
        <hr/>



        <div class="widget-content padding">
            <form role="form" id="form_reg"  class="bv-form">

                <div id="fidq" style="display:none" class="alert alert-success"><i class="fa fa-check"></i> Successfully Added</div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Company Name</label>
                            <input type="text" value="{{$c->name}}" class="form-control validate[required]" data-errormessage-value-missing="Company is required!" data-prompt-position="bottomRight" name="companyname"  id="companyname"

                    />
                        </div>
                        <div class="col-sm-6">
                            <label>TIN(Tax Identification Number)</label>
                            <input id="tin" value="{{$c->tin}}" type="text" class="form-control validate[required,custom[number]" data-errormessage-value-missing="TIN is required!" data-prompt-position="bottomRight" name="tin"

                             />
                        </div>
                    </div>
                </div>

                
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" value="{{$c->location}}" class="form-control validate[required]" data-errormessage-value-missing="Address is required!" data-prompt-position="bottomRight" name="address" id="address"


                     />
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Region</label>
                            <select id="region" type="text" class="form-control validate[required]" data-errormessage-value-missing="Region is required!" data-prompt-position="bottomRight" name="region">
                                <option value="{{$c->region_id}}">{{Region::find($c->region_id)->name}}</option>
                                @foreach(Region::where('active', 1)->where('id', '!=', $c->region_id)->get() as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>District <span style="display:none" id="ld"><img src="{{url('images/ld.gif')}}" /></span></label>
                            <select id="district" type="text" class="form-control validate[required]" data-errormessage-value-missing="District is required!" data-prompt-position="bottomRight" name="district"
                                <option value="{{$c->district_id}}">{{District::find($c->district_id)->name}}</option>
                                @foreach(District::where('active', 1)->where('id', '!=', $c->district_id)->where('region_id', '=', $c->region_id)->get() as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                            ></select>
                        </div>
                        <div class="col-sm-4">
                            <label>Street</label>
                            <input id="street" value="{{$c->street}}" type="text" class="form-control validate[required]" data-errormessage-value-missing="Street is required!" data-prompt-position="bottomRight" name="street"

                             />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Telephone </label>
                    <input type="text" value="{{$c->phone}}" class="form-control validate[required,custom[number]]" data-errormessage-value-missing="Telephone is required!" data-prompt-position="bottomRight" name="telephone" id="telephone"
                     />
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Mobile</label>
                            <input id="mobile" value="{{$c->mobile}}" type="text" class="form-control validate[required,custom[number]]" data-errormessage-value-missing="Mobile is required!" data-prompt-position="bottomRight" name="mobile"


                             />
                        </div>
                        <div class="col-sm-6">
                            <label>Email</label>
                            <input id="email" value="{{$c->email}}" type="email" class="form-control validate[required,custom[email]]" data-errormessage-value-missing="Email is required!" data-prompt-position="bottomRight" name="email"

                             />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Business</label>
                            <select id="business" type="text" class="form-control validate[required]" data-errormessage-value-missing="Business is required!" data-prompt-position="bottomRight" name="business"

                            >
                            <option value="$c->business_id">{{Business::find($c->business_id)->name}}</option>
                            @foreach(Business::where('active', 1)->where('id', '!=', $c->business_id)->get() as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                        </select><br/>
                           {{--  <label>Sub-Business</label>
                            <select id="sub-business" type="text" class="form-control validate[required]" data-errormessage-value-missing="Sub-Business is required!" data-prompt-position="bottomRight" name="sub-business"

                            ></select> --}}
                        </div>
                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Website</label>
                            <input id="website" value="{{$c->website}}" type="text" class="form-control validate[required]" data-errormessage-value-missing="Website is required!" data-prompt-position="bottomRight" name="website"

                             />
                        </div>

                    </div>
                </div>
                <hr/>
                <br/>

                <button type="button"  id="updateCompany" class="btn btn-primary">Update</button>
                <button type="button"  id="cancel" class="btn btn-danger">CANCEL</button>
                <br/>


                <input type="hidden" value=""></form>
        </div>
    </div>




</div>


@include('partials.scripts._dependencies')
@include('partials.scripts._jsImagePreview')

<script type="text/javascript">
$(function(){
    $('#cancel').on('click', function(){
            Wateja.applyOpacity(form_reg);
            Wateja.refreshViewFromServer('manage-area', '{{route("company.refresh")}}');
    });
});
</script>
