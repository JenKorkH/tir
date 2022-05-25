<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CertificatesFormRequest;
use App\Http\Requests\Admin\GunsFormRequest;
use App\Models\Certificate;
use App\Models\Gun;
use App\Models\Gunlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ACertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $certificates = Certificate::orderBy("id", 'DESC')->paginate(15);
        return view('admin.certificates.index', [
            'certificates' => $certificates
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $guns = DB::table('guns')->where('state', true)->get();
        return view('admin.certificates.add', [
            "guns" =>$guns,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CertificatesFormRequest $request)
    {
        $certificate = new Certificate;
        $certificate->name = $request->input('name');
        $certificate->slug = $request->input('slug');
        $certificate->price = $request->input('price');
        $certificate->maxPersons = $request->input('maxPersons');
        $certificate->duration = $request->input('duration');
        $certificate->about = $request->input('about');

        if($request->has("photo")) {
            $file = $request->file('photo');
            $file = str_replace("certificates//", "", $file->store('certificates/', 'public'));
            $certificate->photo = $file;
        }

        $certificate->save();
        $array=explode( "\r\n", $request->input('gunArea'));
        foreach ($array as $item)
        {
            $gunlist = new Gunlist;
            $temp = DB::table('guns')->select('id')->where('name', '=', $item)->get();
            $gunlist->gun_id = $temp[0]->id;
            $gunlist->certificate_id = $certificate->id;
            $gunlist->save();
        }


        $certificate->save();
        return redirect()->route('admin.certificates.index');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $guns = DB::table('guns')->where('state', true)->get();
        $certificate = Certificate::findOrFail($id);
        return view('admin.certificates.add', [
            "certificate" => $certificate,
            "guns" => $guns,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(CertificatesFormRequest $request, $id)
    {
        $certificate = Certificate::findOrFail($id);
        $certificate->name = $request->input('name');
        $certificate->slug = $request->input('slug');
        $certificate->price = $request->input('price');
        $certificate->maxPersons = $request->input('maxPersons');
        $certificate->duration = $request->input('duration');
        $certificate->about = $request->input('about');
        if ($request->has("photo")) {
            if($certificate->photo != '')
            {
                unlink(public_path("/storage/certificates/" . $certificate->photo));
            }
            $file = $request->file('photo');
            $file = str_replace("certificates//", "", $file->store('certificates/', 'public'));
            $certificate->photo = $file;
        }
        $certificate->save();
        if ($request->input('gunArea') != null){
            DB::table('gunlists')->where('certificate_id', $id)->delete();
            $array = explode("\r\n", $request->input('gunArea'));
            foreach ($array as $item)
            {
                $gunlist = new Gunlist;
                $temp = DB::table('guns')->select('id')->where('name', '=', $item)->get();
                $gunlist->gun_id = $temp[0]->id;
                $gunlist->certificate_id = $certificate->id;
                $gunlist->save();
            }
        }
        $certificate->save();
        return redirect(route("admin.certificates.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {

    }

    public function changeState($id)
    {
        $certificate = Certificate::findOrFail($id);
        $guns = DB::table('gunlists')->select('gun_id')->where('certificate_id', $certificate->id)->get();
        if($certificate->state)
        {
            $certificate->state = false;
        }
        else
        {
            foreach ($guns as $gun)
            {
                $temp = Gun::findOrFail($gun->gun_id);
                $temp->state = true;
                $temp->save();
            }
            $certificate->state = true;
        }
        $certificate->save();
        return redirect(route("admin.certificates.index"));
    }
}
