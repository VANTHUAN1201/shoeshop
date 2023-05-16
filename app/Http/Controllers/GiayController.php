<?php

namespace App\Http\Controllers;

use App\Models\giay;
use Illuminate\Http\Request;

class GiayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $giay = new giay();
        $giay->ten = $request->input('ten');
        $giay->gia = $request->input('gia');
        $giay->id_hang = $request->input('id_hang');
        $giay->save();
        
        return redirect('admin/sanpham')->wit('success', 'thêm giày thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\giay  $giay
     * @return \Illuminate\Http\Response
     */
    public function show(giay $giay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\giay  $giay
     * @return \Illuminate\Http\Response
     */
    public function edit(giay $giay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\giay  $giay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, giay $giay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\giay  $giay
     * @return \Illuminate\Http\Response
     */
    public function destroy(giay $giay)
    {
        //
    }
}
