	<script>
		var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{url('assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>

	<script src="{{url('jstree/jstree.js')}}"></script> 
	<script src="{{url('wateja/Tokenize/jquery.tokenize.js')}}"></script> 
	<script type="text/javascript">
	    $('#tokenize, #tokenize-group').tokenize({displayDropdownOnFocus:true});
	</script>



	@include('partials.scripts._ve')

	<script type="text/javascript" src="{{url('wateja/js/Wateja.js')}}"></script>
	<script type="text/javascript">

		function sleep (time) {
		  return new Promise((resolve) => setTimeout(resolve, time));
		}

		$(function(){

			$('#instaSend').on('click', function(){
				var registerForm =  $("#instaForm").validationEngine('validate');
				if(registerForm){

				}
			});

			$('#smsGroup').on('click', function(){
				var foo = []; 
				$('#tokenize-group :selected').each(function(i, selected){ 
				  foo[i] = $(selected).text().split(' ')[0]; 
				});

				if(foo.length == 0){
					alert('Please select at least one group')
				}else{
					var registerForm =  $("#smsGroupForm").validationEngine('validate');
					if(registerForm){
						var data = {
							body : $('#smsGroupBody').val(),
							groups : foo
						}
						Wateja.applyOpacity(smsGroupForm);
						 Wateja.talkToServer('{{route("smsgroup.sendAndstore")}}', data).then(function(res){
                
			                Wateja.removeOpacity(smsGroupForm);
			                if(res.error){
			                    Wateja.showFeedBack(smsGroupForm, res.msg, res.error);
			                }else{
			                    Wateja.showFeedBack(smsGroupForm, res.msg, res.error);
			                    
			                    sleep(2000).then(() => {
								    // Do something after the sleep!
								    window.location = "";  
								});                                                                                                                                                                                                                                                                                                
			                }
			            });
					}
				}
			})



			$('#smsSend').on('click', function(){

				var foo = []; 
				$('#tokenize :selected').each(function(i, selected){ 
				  foo[i] = $(selected).text().split(' ')[3]; 
				});

				if(foo.length == 0){
					alert('Please select at least one customer')
				}else{

					

					var registerForm =  $("#smsForm").validationEngine('validate');
					if(registerForm){
						var data = {
							body : $('#smsSMS').val(),
							people : foo
						}
						Wateja.applyOpacity(smsForm);
						 Wateja.talkToServer('{{route("sms.sendAndstore")}}', data).then(function(res){
                

			                Wateja.removeOpacity(smsForm);
			                if(res.error){
			                    Wateja.showFeedBack(smsForm, res.msg, res.error);
			                }else{
			                    Wateja.showFeedBack(smsForm, res.msg, res.error);
			                    
			                    sleep(2000).then(() => {
								    // Do something after the sleep!
								    window.location = "";  
								});                                                                                                                                                                                                                                                                                                
			                }
			            });
					}
				}

				
			});

		});
	</script>

	<script src="{{url('assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{url('assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
	<script src="{{url('assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js')}}"></script>
	<script src="{{url('assets/libs/jquery-detectmobile/detect.js')}}"></script>
	<script src="{{url('assets/libs/jquery-animate-numbers/jquery.animateNumbers.js')}}"></script>
	<script src="{{url('assets/libs/ios7-switch/ios7.switch.js')}}"></script>
	<script src="{{url('assets/libs/fastclick/fastclick.js')}}"></script>
	<script src="{{url('assets/libs/jquery-blockui/jquery.blockUI.js')}}"></script>
	<script src="{{url('assets/libs/bootstrap-bootbox/bootbox.min.js')}}"></script>
	<script src="{{url('assets/libs/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	<script src="{{url('assets/libs/jquery-sparkline/jquery-sparkline.js')}}"></script>
	<script src="{{url('assets/libs/nifty-modal/js/classie.js')}}"></script>
	<script src="{{url('assets/libs/nifty-modal/js/modalEffects.js')}}"></script>
	<script src="{{url('assets/libs/sortable/sortable.min.js')}}"></script>
	<script src="{{url('assets/libs/bootstrap-fileinput/bootstrap.file-input.js')}}"></script>
	<script src="{{url('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
	<script src="{{url('assets/libs/bootstrap-select2/select2.min.js')}}"></script>
	<script src="{{url('assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script> 
	<script src="{{url('assets/libs/pace/pace.min.js')}}"></script>
	<script src="{{url('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{url('assets/libs/jquery-icheck/icheck.min.js')}}"></script>

	<!-- Demo Specific JS Libraries -->
	<script src="{{url('assets/libs/prettify/prettify.js')}}"></script>

	<script src="{{url('assets/js/init.js')}}"></script>
        
       
        
	
	