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

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $potatos = Potato::all();
        return view('potato.management', ['potatos' => $potatos]);
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

        $request->validate([
            'name' => 'required',
        ]);

        //cleadDBの仕様でidは10ずつ増える 
        $create_id = Potato::max('id') + 10;

        $create_potato = [
            'name' => $request->name
        ];
        $create_parameter = [
            'id' => $create_id,
            'hot' => $request->hot,
            'crispy' => $request->crispy,
            'salt' => $request->salt,
            'garlic' => $request->garlic,
        ];

        // 画像URLがなかった場合の処理
        if($request->image_url == null){
            $img = '/img/noimg.png';
        }else{
            $img = $request->image_url;
        }

        $create_description = [
            'id' => $create_id,
            'image_url' => $img,
            'description' => $request->description,
        ];

        Potato::create($create_potato);
        Parameter::create($create_parameter);
        Description::create($create_description);
        return redirect()->route('potato.index')->with('success', '新規登録完了しました');
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
        return view('potato.show', compact('potato', 'description', 'parameter'));
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
        return view('potato.edit', compact('potato', 'description', 'parameter'));
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
        $request->validate([
            'name' => 'required',
        ]);

        $update_potato = [
            'name' => $request->name,
        ];

        // 画像URLがなかった場合の処理
        if ($request->image_url == null) {
            $img = '/img/noimg.png';
        } else {
            $img = $request->image_url;
        }

        $update_description = [
            'description' => $request->description,
            'image_url' => $img,
        ];

        $update_parameter = [
            'hot' => $request->hot,
            'crispy' => $request->crispy,
            'salt' => $request->salt,
            'garlic' => $request->garlic,
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
