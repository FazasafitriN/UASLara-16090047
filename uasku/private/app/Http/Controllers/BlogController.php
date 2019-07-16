<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;
use Storage;
use Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('pages.admin.view', ['blogs' => $blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'tujuan_wisata'=> 'required',
            'jenis_trip'     => 'required',
            'tanggal'     => 'required',
            'alamat'  => 'required'
        );

        //validasi
        $error = Validator::make($request->all(), $rules);
        if($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        //konten
        $alamat=$request->input('alamat');

        $form_data = array(
            'tujuan_wisata' =>  $request->tujuan_wisata,
            'jenis_trip' =>  $request->jenis_trip,
            'tanggal' =>  $request->tanggal,
            'alamat' =>  $alamat
        );

        Blog::create($form_data);

        return redirect()->route('list')->with('success','Posted successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('pages.admin.view', compact('blog'));
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
        $blog = Blog::find(delete);
        return view('pages.admin.view', compact('blog'));
    }
}
