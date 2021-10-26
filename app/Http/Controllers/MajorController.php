<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;
use Auth;
class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $major = Major::get();
        return view('major.index', ['majors' => $major->toarray()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('major.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $major = new Major;
        $major->code = $request->code;
        $major->description = $request->description;
        $major->save();

        //return view('major.index')->with('success','เพิ่มข้อมูลสำเร็จ');
        return redirect('/major')->with('success','เพิ่มข้อมูลสำเร็จ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $major = Major::find($id);
        return view('major.show', ['major' => $major]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $major = Major::find($id);
        return view('major.edit', ['major' => $major]);
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
        $major = Major::find($id);
        $major->update(['code' => $request->code,
                'description' => $request->description]);

        //return view('major.index')->with('success','แก้ข้อมูลสำเร็จ');
        return redirect('/major')->with('success','แก้ไขข้อมูลสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $major = Major::find($id);
        $major->delete();

        return redirect('/major')->with('success', 'ลบข้อมูลสำเร็จ');
    }
}