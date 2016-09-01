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
                                                                <td>
                                                                    <div class="image-upload">
                                                                        <label for="file-input">
                                                                            <img src="{{Helper::getCompanyLogo($r->id)}}" style="width:72px" />
                                                                        </label>

                                                                        <input id="file-input" type="file"/>
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
                                                                <td>{{Helper::generateActions($r->id, route('companies.delete'), route('companies.edit'),'companies')}}</td>
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


@stop