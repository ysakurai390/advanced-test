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

    //うまくいかないので０つけて一旦保留
    public function search0(Request $request)
    {
        $contents = Content::where('lastname', 'LIKEBINARY',"%{$request->lastname}%")->get();
        return view('find', compact('contents'));
    }
    //

    //とりあえずデータを表示させる
    public function search(Request $request)
    {
        $contents = Content::all();
        //ページネーション
        $pages = Content::Paginate(10);
        $param = [
            'contents' => $contents,
            'pages' => $pages
        ];
        return view('find', $param);
    }
    //


    public function destroy(Request $request)
    {
        $contents = Content::find($request->id);
        Content::find($request->id)->delete();
        return redirect('/content/search');
    }

}