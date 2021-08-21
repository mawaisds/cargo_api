<?php

namespace App\Http\Controllers;

use App\Models\VhclStsCode;
use Illuminate\Http\Request;

class VhclStsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return VhclStsCode[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return VhclStsCode::all();
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
            'vhcl_sts_name' => 'string|required'
        ]);
        return VhclStsCode::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return VhclStsCode::find($id);
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
        $product = VhclStsCode::find($id);
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
        return VhclStsCode::destroy($id);
    }
}
