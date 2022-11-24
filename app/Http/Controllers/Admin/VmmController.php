<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vmm;
use Illuminate\Http\Request;

class VmmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vmms = Vmm::all();
        return view('admin.vmm', ['vmms' => $vmms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vmm-create');
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
            'title' => 'required|max:120',
            'life_time' => 'required',
            'min_invest' => 'required',
            'dist_coin' => 'required',
            'exe_time' => 'required',
            'prep_time' => 'required',
            'start_time' => 'required',
            'status' => 'required',
        ]);

        $vmm = new Vmm();
        $vmm->title = $request->title;
        $vmm->life_time = $request->life_time;
        $vmm->min_invest = $request->min_invest;
        $vmm->dist_coin = $request->dist_coin;
        $vmm->exe_time = $request->exe_time;
        $vmm->prep_time = $request->prep_time;
        $vmm->start_time = $request->start_time;
        $vmm->status = $request->status;
        $vmm->save();

        return redirect()->route('vmm.index');
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
}
