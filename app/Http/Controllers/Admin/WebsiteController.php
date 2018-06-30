<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Admin\AdminController;
use Auth;
use App\Models\Website;
use App\Models\Article;

class WebsiteController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Website::get();
        return view('admin/websites/websites', compact('items'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create()
    {
        return view('admin/websites/websites-create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store(Request $request)
    {
        $website = new Website;
        $website->name = $request->name;
        $website->key = $random_string = md5(microtime());
        $website->url = $request->url;
        $website->desc = $request->desc;
        $website->save();

        return redirect('/admin/websites')->with('success-message', 'Website created successfully.');
    }

    public function edit($id)
    {
        $item = Website::find($id);
        return view('admin/websites/websites-edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Website::find($id);
        $item->name = $request->name;
        $item->url = $request->url;
        $item->desc = $request->desc;
        $item->save();

        return redirect('/admin/websites')->with('success-message', 'Website saved successfully.');
    }


}