<?php

namespace App\Http\Controllers;

use App\Akiya;
use Illuminate\Http\Request;
use SplFileObject;

class AkiyaController extends Controller
{
	public function index()
	{

//		$file = new SplFileObject(public_path().'/data.csv');
//		$file->setFlags(SplFileObject::READ_CSV);
//
//		$akiyas[] = array();
//
//		foreach ($file as $line) {
//		    if($line[0]){
//		    	$akiyas[] = $line;
//		    }
//		}
//
//		$data = array('akiyas'=>$akiyas);

        // CSVから取得 → DBから取得に変更
        $akiyas = Akiya::all();
		return view('akiya.index')->with(['akiyas' => $akiyas]);
	}

	/**
     * 進捗情報　詳細画面表示
     *
     * @param Request $request
     * @return void
     */
    public function show(Request $request,$id)
    {
		$file = new SplFileObject(public_path().'/data.csv');
		$file->setFlags(SplFileObject::READ_CSV);

		$akiyas[] = array();

		foreach ($file as $line) {
		    if($line[0] == $id){
		    	$akiya = $line;
		    }
		}

		$data = array('akiya'=>$akiya,'id'=>$id);

		return view('akiya.show')->with($data);
    }
}
