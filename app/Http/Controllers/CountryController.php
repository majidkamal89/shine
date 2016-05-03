<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Country;
use View;

class CountryController extends Controller
{
	/**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
		$this->country = new Country;
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$countries = $this->country->index();
        return View('country.country', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getData()
    {
        $data = Country::where('status', 0)->get();
        return json_encode($data);
    }

    public function postData(Request $request)
    {
        $dataArray = array(
            'country_name' => $request->country_name,
            'status' => 0
        );
        $data = Country::create($dataArray);
        if($data) {
            return $this->getData();
        }
        return array('error' => 'Error: Something went wrong, try again later!');

    }

    public function deleteData(Request $request)
    {
        $status = ($request->status == 1) ? 0:1;
        $data = Country::where('id', $request->id)->update(array('status' => $status));
        if($data) {
            return array('success' => 'Record deleted successfully!');
        }
        return array('error' => 'There is something wrong, try again later!');
    }

    public function updateData(Request $request)
    {
        $dataArray = array(
            'country_name' => $request->country_name,
            'status' => $request->status
        );
        $data = Country::where('id', $request->id)->update($dataArray);
        if($data) {
            return array('success' => 'Record updated successfully!');
        }
        return array('error' => 'There is something wrong, try again later!');
    }
}
