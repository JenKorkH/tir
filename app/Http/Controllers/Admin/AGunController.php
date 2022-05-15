<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GunsFormRequest;
use App\Models\Brand;
use App\Models\Gun;
use App\Models\GunPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AGunController extends Controller
{

    public function index()
    {
        $guns = Gun::orderBy("id")->paginate(15);
        $brands = Brand::orderBy("id");
        return view('admin.guns.index', [
            "guns" => $guns,
        ]);
    }

    public function create()
    {
        $brands = Brand::all();
        return view('admin.guns.guns', [
            "brands" =>$brands
        ]);

    }

    public function store(GunsFormRequest $request)
    {
        $checker = 0;
        $brands = Brand::all();

        foreach ($brands as $brand)
        {
            if($request->input('brand') == $brand->name)
            {
                $checker = 1;
            }
        }

        if($checker == 0)
        {
            $brand = new Brand;
            $brand->name = $request->input('brand');
            $brand->save();
        }

        $gunphotos = new GunPhoto;
        $temp = 0;

        foreach ($request->file('photos') as $file)
        {
            $temp++;
            if($temp == 1)
            {
                $gunphotos->photo1 = $file->getRealPath();
            }
            if($temp == 2)
            {
                $gunphotos->photo2 = $file->getRealPath();
            }
            if($temp == 3)
            {
                $gunphotos->photo3 = $file->getRealPath();
            }
        }

        $gunphotos->save();

        $brandNumber = Brand::where('name', $request->input('brand'))->first();
        $photoNumber = gunphoto::orderBy('id', "DESC")->first();

        $gun = new Gun;
        $gun->brand_id = $brandNumber->toArray()["id"];;
        $gun->gunphotos_id = $photoNumber->toArray()["id"];
        $gun->type = $request->input('type');
        $gun->name = (string)$request->input('model');
        $gun->caliber = (string)$request->input('caliber');
        $gun->clip = $request->input('clip');
        $gun->weight_bullet = $request->input('weight_bullet');
        $gun->weight_wo_bullet = $request->input('weight_wo_bullet');
        $gun->length = $request->input('length');
        $gun->height = $request->input('height');
        $gun->height = $request->input('height');
        $gun->width = $request->input('width');
        $gun->barrel_length = $request->input('barrel_length');
        $gun->barrel_cutting = $request->input('barrel_cutting');
        $gun->about = (string)$request->input('about');
        $gun->save();

        return redirect(route('admin.guns.index'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $brands = Brand::all();
        $gun = Gun::findOrFail($id);
        return view('admin.guns.guns', [
            "gun" => $gun,
            "brands" =>$brands
        ]);

    }

    public function update(GunsFormRequest $request, $id)
    {
        $checker = 0;
        $brands = Brand::all();

        foreach ($brands as $brand)
        {
            if($request->input('brand') == $brand->name)
            {
                $checker = 1;
            }
        }

        if($checker == 0)
        {
            $brand = new Brand;
            $brand->name = $request->input('brand');
            $brand->save();
        }

        $gunphotos = new GunPhoto;
        $temp = 0;

        foreach ($request->file('photos') as $file)
        {
            $temp++;
            if($temp == 1)
            {
                $gunphotos->photo1 = $file->getRealPath();
            }
            if($temp == 2)
            {
                $gunphotos->photo2 = $file->getRealPath();
            }
            if($temp == 3)
            {
                $gunphotos->photo3 = $file->getRealPath();
            }
        }

        $gunphotos->save();

        $brandNumber = Brand::where('name', $request->input('brand'))->first();
        $photoNumber = gunphoto::orderBy('id', "DESC")->first();

        $gun = new Gun;
        $gun->brand_id = $brandNumber->toArray()["id"];;
        $gun->gunphotos_id = $photoNumber->toArray()["id"];
        $gun->type = $request->input('type');
        $gun->name = (string)$request->input('model');
        $gun->caliber = (string)$request->input('caliber');
        $gun->clip = $request->input('clip');
        $gun->weight_bullet = $request->input('weight_bullet');
        $gun->weight_wo_bullet = $request->input('weight_wo_bullet');
        $gun->length = $request->input('length');
        $gun->height = $request->input('height');
        $gun->height = $request->input('height');
        $gun->width = $request->input('width');
        $gun->barrel_length = $request->input('barrel_length');
        $gun->barrel_cutting = $request->input('barrel_cutting');
        $gun->about = (string)$request->input('about');
        $gun->save();

        return redirect(route('admin.guns.index'));
    }

    public function destroy($id)
    {
        //
    }
}
