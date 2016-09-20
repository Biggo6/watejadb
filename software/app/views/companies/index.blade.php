@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li class="active">Manage Companies</li>
@stop

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="widget">

            <div class="widget-content padding">
                <!-- Content Form Goes here -->
                <div class="col-md-12" id="manage-area">
                                @include('partials.files._success')
                                <h4><i class="fa fa-list"></i> Manage Companies</h4>
                                <hr/>
                                <div class="widget">

                                    <div class="widget-content">
                                        <br>
                                        <div id="regionFBk"></div>
                                        <div id="regionsArea">
                                            <div class="table-responsive" >
                                                <form class='form-horizontal' role='form'>
                                                    <table id="datatables-1" class="table table-striped table-bordered datatables-1" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Logo</th>
                                                                <th>Name</th>
                                                                <th>TIN</th>
                                                                <th>Address</th>
                                                                <th>Region</th>
                                                                <th>District</th>
                                                                <th>Street</th>
                                                                <th>Telephone</th>
                                                                <th>Email</th>
                                                                <th>Mobile</th>
                                                                <th>Business Type</th>
                                                                <th>Website</th>
                                                                <th>Created At</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>



                                                        <tbody >

                                                           <?php $i = 1;
$regions                                                            = Company::orderBy('created_at', 'DESC')->get();
?>

                                                            @foreach($regions as $r)
                                                            <tr>
                                                                <td>{{$i}}</td>
                                                                <td align="center" class="chLogo" id="cl{{$r->id}}" c="{{$i}}" >
                                                                    <div class="image-upload" >
                                                                        <label for="file-input">
                                                                            <div id="logo{{$i}}">
                                                                                <img  src="{{HelperX::getCompanyLogo($r->id)}}" style="width:72px" />
                                                                            </div>
                                                                        </label>
                                                                    <div style="display: none" id="changeLogo{{$i}}">
                                                                        <input type="file" c="{{$i}}" cid="{{$r->id}}" class="logo" name="logo" style="" class=""   title="Change Logo Image" />
                                                                    </div>
                                                                    </div>
                                                                </td>
                                                                <td>{{$r->name}}</td>
                                                                <td>{{$r->tin}}</td>
                                                                <td>{{$r->location}}</td>
                                                                <td>{{Region::find($r->region_id)->name}}</td>
                                                                <td>{{District::where('region_id', $r->region_id)->first()->name}}</td>
                                                                <td>{{$r->street}}</td>
                                                                <td>{{$r->phone}}</td>
                                                                <td>{{$r->email}}</td>
                                                                <td>{{$r->mobile}}</td>
                                                                <td>{{Business::find($r->business_id)->name}}</td>
                                                                <td>{{$r->website}}</td>
                                                                <td>{{$r->created_at}}</td>
                                                                <td>{{HelperX::generateActions($r->id, route('companies.delete'), route('companies.edit'),'companies')}}</td>
                                                            </tr>
                                                            <?php $i++;?>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>

        </div>

    </div>
</div>




@stop



@section('specific_js_libs')

<script src="{{url('assets/js/pages/tabs-accordions.js')}}"></script>
    <script src="{{url('assets/libs/jquery-datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/libs/jquery-datatables/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{url('assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{url('assets/js/pages/datatables.js')}}"></script>

    <script type="text/javascript">
    $(function(){
        var i = 0;
        $('body').on('dblclick', '.chLogo', function(){

            var c = $(this).attr('c');


            if(i == 0){
                $('#changeLogo' + c).show();
                i++;
            }else{
                $('#changeLogo' + c).hide();
                i = 0;
            }
            
        });

        $('.logo').on('change', function(e){

            var c = $(this).attr('c');

            var cid   = $(this).attr('cid');

            var fileDisplayArea = document.getElementById('logo' + c);

            var file = $(this)[0].files[0];
            var imageType = /image.*/;
            if (file.type.match(imageType)) {
                var reader = new FileReader();

                  reader.onload = function(e) {
                    fileDisplayArea.innerHTML = "";

                    // Create a new image.
                    var img = new Image();
                    // Set the img src property using the data URL.
                    img.width = 92;
                    img.height = 92;
                    img.src = reader.result;

                    // Add the image to the page.
                    $('#changeLogo' + c).hide();
                    fileDisplayArea.appendChild(img);
                    $(fileDisplayArea).append("<br/><hr/><p><label class='label label-primary uploadLogo' cid='"+cid+"' src='"+reader.result+"' style='cursor:pointer' id=''><i class='fa fa-upload'></i> Upload PHOTO</label><label class='label label-danger removeLogo' style='cursor:pointer' ><i class='fa fa-trash'></i> CANCEL</label></p>");

                  }

                  reader.readAsDataURL(file);
            }else{

                  $('#changeLogo' + c).hide();  
                  $('#logo' + c).html('');
                  var $el = $(this);
                  $el.wrap('<form>').closest('form').get(0).reset();
                  $el.unwrap();     
                  fileDisplayArea.innerHTML = "<label style='cursor:pointer' class='label label-danger removeLogo'><i class='fa fa-warning'></i> File not supported! - Click To Here Cancel</label>";
                  fileDisplayArea.style.borderRadius = "4px";
                  fileDisplayArea.style.border       = "1px solid #ccc";
                  fileDisplayArea.style.padding      = "2px";
                  return false;
            }
        });

        
        $('body').on('click', '.removeLogo', function(){
               window.location = "";
        });

        $('body').on('click', '.uploadLogo', function(){
                var data  = $(this).attr('src');
                var cid  = $(this).attr('cid');
                $(this).parent().parent().css('opacity', 0.2);
                $(this).css({'cursor' : 'wait'});
                $(this).parent().parent().parent().css({'cursor' : 'wait'});
                $.post('{{route("company.changeLogo")}}', {data:data, cid:cid}, function(res){
                    
                   window.location = "";
                });
        })

    });
    </script>


@stop