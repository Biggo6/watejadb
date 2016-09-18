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

	public function storeWidget(){

		$v = View::make('dashboard.widgets')->render();
		return Response::json([
            'msg'   => $v,
            'error' => false,
          ]);
	}

	public function redirectWith(){

	}


}