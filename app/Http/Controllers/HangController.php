<?php

namespace App\Http\Controllers;

use App\Models\Hang;
use Illuminate\Http\Request;

class HangController extends Controller
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
        //
        $hang = new Hang();
        $hang->ten = $request->input('ten');
        $hang->save();
        return redirect('hang')->with('success', 'thêm Hãng thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hang  $hang
     * @return \Illuminate\Http\Response
     */
    public function show(Hang $hang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hang  $hang
     * @return \Illuminate\Http\Response
     */
    public function edit(Hang $hang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hang  $hang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hang $hang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hang  $hang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hang $hang)
    {
        //
    }
}
