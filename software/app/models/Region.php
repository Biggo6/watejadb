<?php


class Region extends Eloquent{
	public static function deleteAllDependX($id){
		Region::find($id)->delete();
		District::where('region_id', $id)->delete();
	}
}