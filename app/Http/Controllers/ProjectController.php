<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use  App\Models\Project;

class ProjectController extends Controller
{
    function index(){
		$index = Project::all();
		return $index ;
	}
	function  getTotalCostInDefault(Request $request){
		$validated = $request->validate([
        'projectid' => 'required|numeric|nullable',
    ]);
		$allCosts = DB::select('select * from cost where projectid = ?', [$request->id]);
	//$allCosts = DB::table('cost')->where('projectid',$request->id);
	$totalCost=0.0;
	foreach($allCosts as $cost){
		$CostCurrency = DB::table('currency')->where('id',$cost->currencyid)->first();
		$totalCost+=$cost->value*$CostCurrency->exchangeprice;
	}
	
	
	return $totalCost."default currency name";
	}
	function  getTotalCostInSpec(Request $request){
		$validated = $request->validate([
        'projectid' => 'required|numeric|nullable',
        'currencyID' => 'required|numeric|nullable',
    ]);
		$allCosts = DB::select('select * from cost where projectid = ?', [$request->id]);
	//$allCosts = DB::table('cost')->where('projectid',$request->id);
	$totalCost=0.0;
	foreach($allCosts as $cost){
		$CostCurrency = DB::table('currency')->where('id',$cost->currencyid)->first();
		if($request->currencyID==$cost->currencyid){
			$totalCost+=$cost->value;
		}else{
			$totalCost+=app('App\Http\Controllers\CurrencyController')->convert($cost->currencyid,$request->currencyID,$cost->value);
		}
		
		
	}
	
	
	return $totalCost.DB::table('currency')->where('id',$request->currencyID)->first()->name;
	}
}
