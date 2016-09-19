<?php

$widgets = Widget::where('added_by', Auth::user()->id)->get();


$i = 1;
$t = 1;

?>	


<div class="row">

@foreach($widgets as $w)

    @if($w->category == 'Panel')
        <div class="col-lg-3 col-md-6">
        @if($i == 1)
            <div class="widget orange-4">
        @endif 
        @if($i == 2)
            <div class="widget darkblue-2">
        @endif 
        @if($i == 3)
            <div class="widget green-1">
        @endif 
        @if($i == 4)
            <div class="widget lightblue-1">
        @endif    
        
            <div class="widget-content padding">
                <div class="widget-icon">

                </div>
                <div class="text-box">
                    <p class="maindata"><b>{{$w->widget_content}}</b></p>
                    <h2><span >0</span></h2>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="widget-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <span style="cursor:pointer" class="label label-danger removeWdget" wid="{{$w->id}}"><i class="fa fa-trash"></i> REMOVE</span>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        </div>



     <?php $i++; ?>   

    @endif

    @if($i == 4)
         </div>
         <div class="row">
    @endif

    @if($w->category == 'Tablural')
       
       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
           <div class="table-responsive" style="background-color: white;padding
           :2px">

                                                <form class='form-horizontal' role='form'>
                                                    <table id="datatables-1" class="table table-striped table-bordered datatables-1" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Photo</th>
                                                                <th>Firstname</th>
                                                                
                                                                <th>Lastname</th>
                                                                <th>Phone</th>
                                                                <th>Subscribed To Social Media</th>
                                                                <th>Registered</th>
                                                                
                                                                <th>Created At</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>



                                                        <tbody >

                                                            <?php $i = 1;

                                                            if(Auth::user()->role_id == 1){
                                                                $customers = Customer::orderBy('created_at', 'DESC')->get();
                                                            }else{
                                                                $customers = Customer::orderBy('created_at', 'DESC')->where('added_by', Auth::user()->id)->get();
                                                            }
                                                            
                                                            ?>

                                                            @foreach($customers as $r)
                                                            <tr>
                                                                <td>{{$i}}</td>
                                                                
                                                                <td><img src="{{HelperX::costPic($r->id)}}" style="width:50px" /></td>
                                                                <td>{{$r->firstname}}</td>
                                                                
                                                                <td>{{$r->lastname}}</td>
                                                                <td>{{$r->phone}}</td>
                                                                <td>{{$r->suburb}}</td>
                                                                <td>{{$r->data_source}}</td>

                                                                <td>{{Carbon::parse($r->created_at)->format('Y-m-d h:i:s')}}</td>
                                                                <td>{{HelperX::generateActions($r->id, route('business.delete'), route('business.edit'),'customers')}}

                                                                    &nbsp; <span style="cursor: pointer" class="label label-info" title="View more details" >
                                                                    <i class="fa fa-eye">

                                                                </td>
                                                            </tr>
                                                            <?php $i++; ?>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                            <div class="col-sm-6">
                        <span style="cursor:pointer" class="label label-danger removeWdget" wid="{{$w->id}}"><i class="fa fa-trash"></i> REMOVE</span>
                    </div>
       </div>

       
       <?php $t++; ?>

    @endif

    @if($t == 2)
         </div>
         <div class="row">
    @endif


    @if($w->category == 'Graph')

    @endif

@endforeach

    <script src="{{url('assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript">
    $(function(){
        $('.removeWdget').on('click', function(){
            var config = confirm('Are you sure?');
            if(config){
                var wid = $(this).attr('wid');
                $('#dashboard_editor').css('opacity', 0.2);  
                $.post("{{route('dashboard.removeWidget')}}", {wid:wid}, function(res){
                    $('#dashboard_editor').css('opacity', 1);  
                    $('#dashboard_editor').hide().html(res.msg).fadeIn();  
                });
            }
        });
    })
    </script>
    <script src="{{url('assets/libs/jquery-datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/libs/jquery-datatables/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{url('assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{url('assets/js/pages/datatables.js')}}"></script>


    @include('partials.scripts._dependencies')

<script>
$(function(){
    $('#saveWidget').on('click', function(){
        var registerForm =  $("#widget_form").validationEngine('validate');
        if(registerForm){
            data = Wateja.serializeData(widget_form);
            Wateja.applyOpacity(widget_form);
            Wateja.talkToServer('{{route("dashboard.storeWidget")}}', data).then(function(res){
                
                Wateja.removeOpacity(widget_form);
                if(res.error){
                    Wateja.showFeedBack(widget_form, res.msg, res.error);
                }else{
                    $('#addWidgets').modal('hide');
                    $('#widget_form')[0].reset();
                    $('#dashboard_editor').hide().html(res.msg).fadeIn();                                                                                                                                                                                                                                                                                                         
                }
            });
        }
    });
});
</script>



