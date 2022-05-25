<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GunsFormRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Certificate;
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

        if($request->has("photos")) {
            $i = 0;
            foreach ($request->file('photos') as $file)
            {
                if($i == 3)
                {
                    break;
                }
                $gunphoto = new Gunphoto;
                $file = str_replace("gun//", "", $file->store('gun/', 'public'));
                $gunphoto->gun_id = $gun->id;
                $gunphoto->photo = $file;
                $gunphoto->save();
                $i++;
            }
        }

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
        if($request->has("photos")) {

            $files = DB::table('gunphotos')->select('photo')->where('gun_id', $id)->get();
            foreach ($files as $file)
            {
                unlink(public_path("/storage/gun/".$file->photo));
            }
            DB::table('gunphotos')->where('gun_id', $id)->delete();
            $i = 0;
            foreach ($request->file('photos') as $file)
            {
                if($i == 3)
                {
                    break;
                }
                $gunphoto = new Gunphoto;
                $file = str_replace("gun//", "", $file->store('gun/', 'public'));
                $gunphoto->gun_id = $gun->id;
                $gunphoto->photo = $file;
                $gunphoto->save();
                $i++;
            }
        }
        $gun->save();

        return redirect(route("admin.guns.index"));
    }

    public function destroy($id)
    {
        //
    }

    public function changeState($id)
    {
        $gun = Gun::findOrFail($id);
        $certificates = DB::table('gunlists')->select('certificate_id')->where('gun_id', $gun->id)->get();
        if($gun->state)
        {
            foreach ($certificates as $certificate)
            {
                $temp = Certificate::findOrFail($certificate->certificate_id);
                $temp->state = false;
                $temp->save();
            }
            $gun->state = false;
        }
        else
        {
            $gun->state = true;
        }
        $gun->save();
        return redirect(route("admin.guns.index"));
    }
}
