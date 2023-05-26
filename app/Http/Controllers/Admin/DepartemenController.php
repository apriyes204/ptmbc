<?php

namespace App\Http\Controllers\Admin;

use id;
use App\Models\Employee;
use App\Models\Departemen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DepartemenRequest;

class DepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request('search'))
        {
            $items = Departemen::where('nama_departemen','like','%'.request('search').'%')->get();
        } else {
            $items = Departemen::all();
        }

        return view ('pages.admin.departemen.home', [
            'items' => $items,
        ]);
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
    public function store(DepartemenRequest $request)
    {
        $data = $request->all();
        Departemen::create($data);
        return redirect()->route('departemen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_depart = Departemen::findOrFail($id);

        return view('pages.admin.departemen.edit', [
            'departemen' => $data_depart,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function update(DepartemenRequest $request, $id)
    {
        $data = $request->all();
        $item = Departemen::findOrFail($id);
        $item -> update($data);
        return redirect()->route('departemen.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Departemen::findOrFail($id);
        $item->delete();
        return redirect()->route('departemen.index');
    }
}
