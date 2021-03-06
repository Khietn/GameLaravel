<?php

namespace App\Http\Controllers;

use App\Http\Resources\LinhVucResource;
use Illuminate\Http\Request;
use App\LinhVucModel;
use App\Http\Requests\LinhVucRequest;
use Illuminate\Support\Facades\Validator;
use Alert;
class LinhVucController extends Controller
{
    public function data()
    {
        $linhVuc=LinhVucModel::all();
        return view ('linh-vuc',compact('linhVuc'));
    }
    
    public function UpdateStatus($id,Request $request){
        if($request->txtXoa == 0){
            $linhVuc = LinhVucModel::where('id',$id)->update(['xoa'=>1]);
        }
        else{
            $linhVuc = LinhVucModel::where('id',$id)->update(['xoa'=>0]);
        }
        return redirect('/linh-vuc');
    }
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dsLinhVuc = LinhVucModel::paginate(10);
        return view('Master-page/aaa',compact('dsLinhVuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LinhVucRequest $request)
    {
        $validator = Validator::make($request->all(),[
           
            'ten'=>'required'
        ],[
            'required'=>'Tên lĩnh vực không được để trống',
        ]);
            //$validator = Validator::make($input, $rules, $messages);
            //$mess=[''=>'ádaa']
        if ($validator->fails()) {
            return redirect('/linh-vuc')->withErrors($validator)->withInput();
        }

            $linhVuc = new LinhVucModel;
            $linhVuc->ten= $request->ten;
            $linhVuc->save();           
            alert('Thông báo','Thêm mới thành công','success');
            return redirect('/linh-vuc');
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
        $linhVuc = LinhVucModel::findOrFail($id);
        return view('form-sua-linh-vuc', compact('linhVuc'));
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
        $linhVuc = LinhVucModel::findOrFail($id);
        $linhVuc->ten = $request->input('ten_linh_vuc_moi');
        $linhVuc->save(); 
        Alert::success('Cập nhật thành công', '');
        return redirect('/linh-vuc')->with('success',"Sửa Thành Công");
        //return redirect()->action('LinhVucController@data')->with('success',"Sửa Thành Công");
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

    public function indexAPI(){
        $linhvuc= LinhVucModel::all();
        return LinhVucResource::collection($linhvuc);
    }
    public function getAPI($id){
        $linhvuc = LinhVucModel::find($id);
        return new LinhVucResource($linhvuc);
    }
    public function getAPIa(Request $request){
        $id = $request->query('id');
        $linhvuc = LinhVucModel::where('id',$id)->get();
        return LinhVucResource::collection($linhvuc);
    }
}
