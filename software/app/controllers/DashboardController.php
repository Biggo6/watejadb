<?php


class DashboardController extends BaseController {
	public function getWigetContent(){
		$wcolumn   = Input::get('wcolumn');
		$wtype     = Input::get('wtype');
		$wcategory = Input::get('wcategory');
		

		$options = "";

		switch ($wtype) {
			case 'Users':
				$options .= "<option>All Users</option><option>Current Login Users</option>";
				break;
			
			case 'Customers':
				$options .= "<option>All Customers</option><option>Top 10 Recently Added</option>";
				break;

			case 'Groups':
				$options .= "<option>All Groups</option><option>Top 10 Recently Added</option>";
				break;

			case 'Messages':
				$options .= "<option>All Messages</option><option>Whatsapp Messages</option><option>SMS Messages</option><option>Instagram Messages</option>";
				break;			

			default:
				
				break;
		}

		return $options;


	}

	public function removeWidget(){

		Widget::find(Input::get('wid'))->delete();

		$v = View::make('dashboard.widgets')->render();
				return Response::json([
		            'msg'   => $v,
		            'error' => false,
		          ]);
	}

	public function storeWidget(){

		$wtype      = Input::get('wtype');
		$wcategory  = Input::get('wcategory');
		$wrow		= Input::get('wrow');
		$wcolumn 	= Input::get('wcolumn');
		$wcontent	= Input::get('wcontent');

		$check      = Widget::where('module_name', $wtype)->where('category', $wcategory)->where('widget_content', $wcontent)->where('added_by', Auth::user()->id)->count();

		if($check){
				return Response::json([
		            'msg'   => 'Widget already registered!',
		            'error' => true,
		          ]);
		}else{
				$wdg                  = new Widget;
				$wdg->module_name     = $wtype;
				$wdg->category        = $wcategory;
				$wdg->layout_columns  = $wcolumn;
				$wdg->layout_rows	  = $wrow;
				$wdg->widget_content  = $wcontent;
				$wdg->added_by		  = Auth::user()->id;
				$wdg->save();

				$v = View::make('dashboard.widgets')->render();
				return Response::json([
		            'msg'   => $v,
		            'error' => false,
		          ]);
		}
		
	}

	public function redirectWith(){

	}


}