<?php

namespace App\Http\Controllers;

use App\Models\BkngStsCode;
use Illuminate\Http\Request;

class BkngStsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return BkngStsCode[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return BkngStsCode::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bkng_sts_name' => 'string|required'
        ]);
        return BkngStsCode::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return BkngStsCode::find($id);
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
        $data = BkngStsCode::find($id);
        $data->update($request->all());
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return int
     */
    public function destroy($id)
    {
        return BkngStsCode::destroy($id);
    }
}
