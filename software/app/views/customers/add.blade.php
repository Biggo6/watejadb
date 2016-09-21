@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li><a href="#">Customers</a></li><li class="active">Add Customer</li>
@stop

@section('content')

<style type="text/css">

</style>

<div class="row top-summary">

<div class="col-sm-12 portlets ui-sortable">
    <div class="widget">
        <div class="widget-header transparent">
            <h2><strong>Customer Registration</strong> Form <span id="loader" style="display:none" class="pull-right"><img src="{{url('images/loader.gif')}}"></span></h2>

        </div>
        <hr/>



        <div class="widget-content padding">
            <form role="form" id="form_reg"  class="bv-form">

                <div class="row">
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Firstname: <label class="label label-danger">*</label></label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Firstname is required!" data-prompt-position="bottomRight" name="firstname"  id="firstname" />
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Middlename</label>
                            <input type="text" class="form-control"  name="middlename"  id="middlename" />
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Lastname: <label class="label label-danger">*</label></label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Lastname is required!" data-prompt-position="bottomRight"  name="lastname"  id="lastname" />
                        </div>

                    </div>    
                    <div class="col-md-3">


                        <div class="form-group">
                    
                            <label>Phone: <label class="label label-danger">*</label></label>

                            <div class="input-group phone-input">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="type-text">+255</span> </button>
                                   
                                </span>
                                <input type="text" class="form-control validate[required, custom[number], ,maxSize[9], ,minSize[9]]" data-errormessage-value-missing="Phone is required!" data-prompt-position="topLeft" placeholder="XXX XXX XXX" name="phone"  id="phone" />
                            </div>

                            
                        </div>

                        

                    </div>    
                </div>

                <div class="row">
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Date Of Birth</label>
                            <input type="text" class="form-control datepicker-autoclose"  name="dob"  id="dob" />
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Gender</label>
                            <select class="form-control" id="gender" name="gender">
                                <option>-- Select Gender Here ---</option>
                                <option> Male </option>
                                <option> Female</option>
                            </select>
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Customer Code #</label>
                            <input type="text" class="form-control" value="{{Uuid::generate(4)}}" disabled  name="customer_code"  id="customer_code" />
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Mobile</label>
                            <input type="text" class="form-control"  name="mobile"  id="mobile" />
                        </div>

                    </div>    
                </div>

                <div class="row">
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Fax</label>
                            <input type="text" class="form-control" name="fax"  id="fax" />
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Email</label>
                            <input type="text" class="form-control" name="email"  id="email" />
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Website</label>
                            <input type="text" class="form-control" name="website"  id="website" />
                        </div>

                    </div>  
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>P.O BOX</label>
                            <input type="text" class="form-control" name="pobox"  id="pobox" />
                        </div>

                    </div>   
                      
                </div>

                

                <div class="row">
                    <div class="col-md-3">

                        <div class="form-group">
                            <label>Region</label>
                            <select id="region" type="text" class="form-control" name="region">
                                <option value="">-- Select Region -- </option>
                                @foreach(Region::where('active', 1)->get() as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>District <span style="display:none" id="ld"><img src="{{url('images/ld.gif')}}" /></span></label>
                            <select id="district" type="text" class="form-control"  name="district"

                            ></select>
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Street</label>
                            <input type="text" class="form-control" name="street"  id="street" />
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Location</label>
                            <input type="text" class="form-control"  name="location"  id="location" />
                        </div>

                    </div>    
                </div>

                <div class="row">
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                        </div>

                    </div>    
                    <div class="col-md-6">

                        <div class="form-group">
                    
                            <label>Profile Picture</label><br/>
                            <input type="file" id="logo" name="logo" class="btn btn-default"  title="Select Logo Image"

                             />
                             <button class="btn btn-success" disabled><i class="fa fa-camera"></i> Take Photo</button>
                             <button class="btn btn-danger" disabled><i class="fa fa-facebook"></i> Attach From Social Media</button>
                             <hr/>
                            <div id="logo-placeholder"></div>
                            
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                        </div>

                    </div>    
                </div>
                <hr/>

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            

                                <table>
                                    <tr>
                                        <td id="checx"><input name="subsuv" id="subsuv" type="checkbox" class="ios-switch ios-switch-default ios-switch-sm"   /></td>
                                        <td><p> Subscribe To Social Media Updates</p></td>
                                    </tr>
                                </table>
      
                        </div>

                        
                    </div>    
                     
                </div>

                <hr/>

                <div style="display:none" id="socialaccounts">
                    <div class="row">

                        <div class="col-md-3">

                            <div class="form-group">
                        
                                <label>Instagram ID - (username) <span style="display:none" id="ld2"><img src="{{url('images/ld.gif')}}" /></span></label>
                                <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Instagram ID is required!" data-prompt-position="bottomRight"  name="instagram"  id="instagram" />
                                <hr/>
                                <div id="instapic" class="well"></div>
                            </div>

                        </div>    
                        <div class="col-md-3">

                            <div class="form-group">
                        
                                <label>Whatsapp Number</label>
                                <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Whatsapp Number is required!" data-prompt-position="bottomRight" name="whatsapp"  id="whatsapp" />
                            </div>

                        </div>  


                        <div class="col-md-3">

                            <div class="form-group">
                        
                                <label>Skype ID</label>
                                <input type="text" disabled class="form-control" name="skype"  id="skype" />
                            </div>
                            

                        </div>    
                          
                        <div class="col-md-3">

                            <div class="form-group">
                        
                                <label>facebook ID</label>
                                <input type="text" disabled class="form-control"  name="facebook"  id="facebook" />
                            </div>

                            

                        </div>    
                    </div>

                    <div class="row">
                        <div class="col-md-3">

                            <div class="form-group">
                        
                                <label>Twitter ID</label>
                                <input type="text" disabled class="form-control"  name="facebook"  id="facebook" />
                            </div>

                        </div>    
                        <div class="col-md-3">

                            <div class="form-group">
                        
                                <label>Telegram ID</label>
                                <input type="text" disabled class="form-control"  name="instagram"  id="instagram" />
                            </div>

                        </div>    
                        <div class="col-md-3">

                            <div class="form-group">
                        
                                <label>WeChat ID</label>
                                <input type="text" disabled class="form-control"  name="whatsapp"  id="whatsapp" />
                            </div>

                        </div>    
                        <div class="col-md-3">

                            <div class="form-group">
                        
                                <label>Google++ ID</label>
                                <input type="text" disabled class="form-control"  name="skype"  id="skype" />
                            </div>

                        </div>    
                    </div>
                </div>


                <hr/>
                <br/>

                <button type="button"  register="save" class="btn btn-primary register">Save</button>
                <button type="button"  register="saveandnew" class="btn btn-success register">Save & New</button>
                <br/>


                <input type="hidden" value=""></form>
        </div>
    </div>




</div>


</div>




@include('partials.scripts._customers');



@stop


@section('specific_js_libs')

<script type="text/javascript" src="{{url('vendors/js/bootstrap3-typeahead.js')}}"></script>
<script type="text/javascript">
$(function(){



    $('#instagram').on('blur', function(){
        var ig_id = $(this).val();
        $('.register').prop('disabled', true);
        if(true){
            $('#ld2').show();
            $.post('{{route("instagram.checkUsername")}}', {ig:ig_id}, function(data){
                $('#ld2').hide();
                console.log(typeof(data))
                var parts = data.split('#');
                if(parts.length != 0){
                    html = '<div class="typeahead" style="width: 450px; height:50px">';
                    html += '<div class="media"><a class="pull-left" href="#"><img style="width:50px" src='+parts[0]+' /></a>'
                    html += '<div class="media-body">';
                    html += '<p class="media-heading">'+parts[1]+' <br/> (@'+parts[2]+')'+'</p>';
                    html += '</div>';
                    html += '</div>';
                    $('#instapic').html(html);
                    if(ig_id == parts[2]){
                        $('.register').prop('disabled', false);
                    }else{
                        $('.register').prop('disabled', true);
                    }
                }
                
            });
        }

        
    });
    
});
</script>


@stop



