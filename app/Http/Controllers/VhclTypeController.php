<?php

namespace App\Http\Controllers;

use App\Models\VhclTypeCode;
use Illuminate\Http\Request;

class VhclTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return VhclTypeCode[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return VhclTypeCode::all();
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
            'vhcl_type_name' => 'required'
        ]);
        return VhclTypeCode::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return VhclTypeCode::find($id);
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
        $product = VhclTypeCode::find($id);
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return int
     */
    public function destroy($id)
    {
        return VhclTypeCode::destroy($id);
    }
}
