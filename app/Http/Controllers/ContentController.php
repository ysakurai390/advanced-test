<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Content;
use App\Http\Requests\ContentRequest;

class ContentController extends Controller
{
    public function index(Request $request)
    {
        //追加
        $data = $request->session()->get('txt');
        //['data->$data]を追加
        return view('index', ['data' => $data]);
    }

    public function get(ContentRequest $request)
    {
        return view('index');
    }

    //public function store(Request $request)
    //{
        //ここから
        //$contents = Content::all();
        //$form = new Content();
        //ここまで
        //$form = new Content();
        //$content = $request->all();
        //unset($form['_token']);
        //Content::create($content);
        //return view('confirm', $content);
    //}

    public function store(ContentRequest $request)
    {
        $data = [
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'gender' => $request->gender,
            'email' => $request->email,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building_name' => $request->building_name,
            'opinion' => $request->opinion
        ];
        return view('confirm', $data);
    }

    //追加
    public function postSes(Request $request)
    {
        $txt = $request->input;
        $request->session()->put('txt',$txt);
        return redirect('/')->withinput();
    }
    //うまくいかない

    public function add(Request $request)
    {
        return view('thanks');
    }

    public function thanks(Request $request)
    {
        $data = new content();
        $data = [
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'gender' => $request->gender,
            'email' => $request->email,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building_name' => $request->building_name,
            'opinion' => $request->opinion
        ];
        //$form = $request->all();
        unset($data['_token']);
        Content::create($data);
        return view('thanks');
    }


    public function find()
    {
        return view('find');
    }

    public function search(Request $request)
    {
        $contents = Content::where('lastname', 'LIKEBINARY',"%{$request->lastname}%")->get();
        $param = [
            'contents' => $contents,
        ];
        return view('find', $param);
    }

}