<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Api;
use App\Helpers\Contracts\NormalizeNameContract;

class ApisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $api = Api::latest()->get();
        return view('apis.index', compact("api")); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apis.createapi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Helpers\Contracts\NormalizeNameContract $norm
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, NormalizeNameContract $norm)
    {
        $input = $request->all();
        $api = new Api();
        $api->name = $input['name'];
        $api->raml = $input['raml'];
        Storage::disk('local')->put('raml/' . $api->name . '.raml', $input['raml']);
        $api->ramlurl = 'raml/' . $norm->normalize($api->name) . '.raml';
        $parser = new \Raml\Parser();
        //$apiDef = $parser->parse($api->raml);
        //dd($apiDef);


        $api->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('apis.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $api = Api::find($id);
        return view('apis.edit', compact("api"));
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
        $input = $request->all();
        $api = Api::find($id);
        $api->name = $input['name'];
        $api->raml = $input['raml'];
        $api->save();
        return redirect('/');
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
}
