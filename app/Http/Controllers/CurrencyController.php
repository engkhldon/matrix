<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use  App\Models\Currency;
class CurrencyController extends Controller
{
    
	function index(){
		$currencies=Currency::all();
	 return view('currency.convert',['data'=>$currencies]);
	}
	function convert($firstcurrID,$secondcurrID,$value){
		$firstcurrncyExchanRate = DB::table('currency')->where('id',$firstcurrID)->first();
		$fromExchangRate=$firstcurrncyExchanRate->exchangeprice;
		$scondcurrncyExchanRate = DB::table('currency')->where('id', $secondcurrID)->first();
		$toExchangRate=$scondcurrncyExchanRate->exchangeprice;
		
		$fromInDollar=$value*$fromExchangRate;
		$result=$fromInDollar/$toExchangRate;
		return $result;
		
	}
}
