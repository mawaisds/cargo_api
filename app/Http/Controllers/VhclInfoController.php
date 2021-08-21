<?php

namespace App\Http\Controllers;

use App\Models\VhclInfo;
use App\Models\VhclStsCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VhclInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return VhclInfo[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $val = DB::table('vhcl_infos')
                ->join('vhcl_sts_codes', 'vhcl_infos.vhcl_sts_id', '=', 'vhcl_sts_codes.id')
                ->join('vhcl_type_codes', 'vhcl_infos.vhcl_type_id', '=', 'vhcl_type_codes.id')
                ->get();

        return $val;
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
            'vhcl_nmbr' => 'string|required',
            'vhcl_capacity' => 'string|required',
            'vhcl_sts_id' => 'integer|required',
            'vhcl_type_id' => 'integer|required',
        ]);
        return VhclInfo::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $val = DB::table('vhcl_infos')
            ->join('vhcl_sts_codes', 'vhcl_infos.vhcl_sts_id', '=', 'vhcl_sts_codes.id')
            ->join('vhcl_type_codes', 'vhcl_infos.vhcl_type_id', '=', 'vhcl_type_codes.id')
            ->where('vhcl_infos.id', '=', $id)
            ->get();

        return $val;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_filter_status($id)
    {
        $val = DB::table('vhcl_infos')
            ->join('vhcl_sts_codes', 'vhcl_infos.vhcl_sts_id', '=', 'vhcl_sts_codes.id')
            ->join('vhcl_type_codes', 'vhcl_infos.vhcl_type_id', '=', 'vhcl_type_codes.id')
            ->where('vhcl_sts_codes.id', '=', $id)
            ->get();

        return $val;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_filter_type($id)
    {
        $val = DB::table('vhcl_infos')
            ->join('vhcl_sts_codes', 'vhcl_infos.vhcl_sts_id', '=', 'vhcl_sts_codes.id')
            ->join('vhcl_type_codes', 'vhcl_infos.vhcl_type_id', '=', 'vhcl_type_codes.id')
            ->where('vhcl_type_codes.id', '=', $id)
            ->get();

        return $val;
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
        $data = VhclInfo::find($id);
        $data->update($request->all());
        return $data;
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
