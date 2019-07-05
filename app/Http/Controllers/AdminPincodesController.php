<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Validator;

use App\Pincode;

class AdminPincodesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pincodes_count = Pincode::count();
        $pincodes = Pincode::paginate(10);

        //table row number
        $i = 1;

        return view('admin.pincodes.index', compact('pincodes', 'i', 'pincodes_count'));
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
        $request->validate([
            'office_name' => 'required',
            'pincode' => 'required',
            'district' => 'required',
            'rms' => 'required'
        ]);

        $input = $request->all();

        Pincode::create($input);

        $request->session()->flash('pincode_created', 'The pincode has been created!');

        return redirect()->back();
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
        //increments i
        $i =1;
        //
        $pincode = Pincode::findOrFail($id);
        $pincodes_count = Pincode::count();
        $recent_pincodes = DB::table('pincodes')->orderBy('id','desc')->take(5)->get();

        return view('admin.pincodes.edit', compact('pincode', 'pincodes_count', 'recent_pincodes', 'i'));
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
        $request->validate([
            'office_name' => 'required',
            'pincode' => 'required',
            'district' => 'required',
            'rms' => 'required'
        ]);

        Pincode::findOrFail($id)->update($request->all());

        $request->session()->flash('pincode_updated', 'The pincode has been updated!');

        return redirect('/admin/pincodes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        Pincode::findOrFail($id)->delete();

        $request->session()->flash('pincode_deleted', 'The pincode has been deleted!');

        return redirect('/admin/pincodes');
    }

    public function manage(){
        return view('admin.pincodes.manage');
    }
}
