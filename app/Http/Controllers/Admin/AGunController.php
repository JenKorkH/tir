<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GunsFormRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Gun;
use App\Models\GunPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AGunController extends Controller
{

    public function index()
    {
        $guns = Gun::orderBy("id", 'DESC')->paginate(15);
        return view('admin.guns.index', [
            "guns" => $guns
        ]);
    }

    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.guns.guns', [
            "brands" =>$brands,
            "categories" => $categories
        ]);
    }

    public function store(GunsFormRequest $request)
    {
        $gun = new Gun;
        $gun->brand_id = $request->input('brand_id');
        $gun->category_id = $request->input('category_id');
        $gun->name = $request->input('model');
        $gun->caliber = $request->input('caliber');
        $gun->clip = $request->input('clip');
        $gun->weight_bullet = $request->input('weight_bullet');
        $gun->weight_wo_bullet = $request->input('weight_wo_bullet');
        $gun->width = $request->input('width');
        $gun->height = $request->input('height');
        $gun->barrel_length = $request->input('barrel_length');
        $gun->barrel_cutting = $request->input('barrel_cutting');
        $gun->about = $request->input('about');
        $gun->save();
        return redirect()->route('admin.guns.index');
    }

    public function show($id)
    {
        //
    }
    /**
     *
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $brands = Brand::all();
        $categories = Category::all();
        $gun = Gun::findOrFail($id);
        return view('admin.guns.guns', [
            "gun" => $gun,
            "brands" => $brands,
            "categories" => $categories
        ]);
    }

    public function update(GunsFormRequest $request, $id)
    {
        $gun = Gun::findOrFail($id);

        $gun->brand_id = $request->input('brand_id');
        $gun->category_id = $request->input('category_id');
        $gun->name = $request->input('model');
        $gun->caliber = $request->input('caliber');
        $gun->clip = $request->input('clip');
        $gun->weight_bullet = $request->input('weight_bullet');
        $gun->weight_wo_bullet = $request->input('weight_wo_bullet');
        $gun->width = $request->input('width');
        $gun->height = $request->input('height');
        $gun->barrel_length = $request->input('barrel_length');
        $gun->barrel_cutting = $request->input('barrel_cutting');
        $gun->about = $request->input('about');
        $gun->save();

        return redirect(route("admin.guns.index"));
    }

    public function destroy($id)
    {
        //
    }
}
