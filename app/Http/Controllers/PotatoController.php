<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Potato;
use App\Models\Parameter;
use App\Models\Description;

class PotatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $potatos = Potato::all();
        return view('potato.management',['potatos' => $potatos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('potato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Potato::create($request->all());
        // Parameter::create($request->all());
        // Description::create($request->all());
        return redirect()->route('potato.index')->with('success','新規登録完了');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $potato = Potato::find($id);
        $description = Description::find($id);
        $parameter = Parameter::find($id);
        return view('potato.show',compact('potato','description','parameter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $potato = Potato::find($id);
        $description = Description::find($id);
        $parameter = Parameter::find($id);
        return view('potato.edit', compact('potato','description','parameter'));
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
        $update_potato = [
            'name' => $request->name,
        ];
        $update_description = [
            'description' => $request->description,
        ];

        $update_parameter = [
            'hot' => $request->hot,
        ];
        Potato::where('id', $id)->update($update_potato);
        Description::where('id', $id)->update($update_description);
        Parameter::where('id', $id)->update($update_parameter);
        return back()->with('success', '編集完了しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Potato::where('id', $id)->delete();
        return redirect()->route('potato.index')->with('success', '削除完了しました');
    }
}
