<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\InstructorsFormRequest;
use App\Models\Instructor;
use Illuminate\Http\Request;

class AInstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = Instructor::orderBy("id", 'DESC')->paginate(15);
        return view('admin.instructors.index', [
            "instructors" => $instructors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.instructors.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(InstructorsFormRequest $request)
    {
        $request->validated();

        $instructor = new Instructor;
        $instructor->name = $request->input('name');
        $instructor->about = $request->input('about');
        if($request->has("photo")) {
            $file = $request->file('photo');
            $file = str_replace("instructor//", "", $file->store('instructor/', 'public'));
            $instructor->photo = $file;
        }
        $instructor->save();

        return redirect(route('admin.instructors.index'));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instructors = Instructor::findOrFail($id);
        return view('admin.instructors.add', [
            "instructors" => $instructors
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(InstructorsFormRequest $request, $id)
    {
        $instructor = Instructor::findOrFail($id);
        $instructor->name = $request->input('name');
        $instructor->about = $request->input('about');
        if($request->has("photo")) {
            if($instructor->photo != '')
            {
                unlink(public_path("/storage/instructor/".$instructor->photo));
            }
            $file = $request->file('photo');
            $file = str_replace("instructor//","" ,$file->store('instructor/', 'public'));
            $instructor->photo = $file;
        }
        $instructor->save();
        return redirect(route("admin.instructors.index"));
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
