<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SplFileObject;

class IreulController extends Controller
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
        return view('ireul/new');
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
        $ireul = new \App\Iroul;
        $ireul->name = $request->name;
        $ireul->q1_plus = $request->q1_plus;
        $ireul->q1_minus = $request->q1_minus;
        $ireul->q2_plus = $request->q2_plus;
        $ireul->q2_minus = $request->q2_minus;
        $ireul->q3_plus = $request->q3_plus;
        $ireul->q3_minus = $request->q3_minus;

        $ireul->save();

        $uploaded_file = $request->file('csv');
        

        // アップロードしたファイルの絶対パスを取得
        $file_path = $request->file('csv')->path($uploaded_file);

        $file = new SplFileObject($file_path);
        $file->setFlags(SplFileObject::READ_CSV);

        $row_count = 1;
        foreach ($file as $row)
        {
            // 1行目のヘッダーは取り込まない
            if ($row_count > 1)
            {
                // $name = mb_convert_encoding($row[1], 'UTF-8', 'SJIS');
                // $age = mb_convert_encoding($row[2], 'UTF-8', 'SJIS');

                $item = new \App\Item;
                $item->name = $row[5];
                $item->iroul_id = $ireul->id;
                $item->q1_score = $row[2];
                $item->q2_score = $row[3];
                $item->q3_score = $row[4];

                $item->save();
            }
            $row_count++;
        }
        return view('ireul/create', ['id' => $ireul->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('ireul/show');
    }
    public function result($id, Request $request)
    {
        return view('ireul/result');
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
