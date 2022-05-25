<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProgramsFormRequest;
use App\Models\Category;
use App\Models\Instructor;
use App\Models\Program;
use Illuminate\Http\Request;

class AProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $programs = Program::orderBy("id", 'DESC')->paginate(15);
        return view('admin.programs.index', [
            'programs' => $programs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $instructors = Instructor::all();
        $categories = Category::all();
        return view('admin.programs.add', [
            "instructors" =>$instructors,
            "categories" => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ProgramsFormRequest $request)
    {
        $request->validated();

        $program = new Program;
        $program->name = $request->input('name');
        $program->about = $request->input('about');
        $program->category_id = $request->input('category');
        $program->instructor_id = $request->input('instructor');
        $program->lessons = $request->input('lessons');
        $program->price = $request->input('price');
        if($request->has('photo')){
            $file = $request->file('photo');
            $file = str_replace("program//", "", $file->store('program/', 'public'));
            $program->photo = $file;
        }
        $program->save();
        return redirect(route('admin.programs.index'));
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
        $instructors = Instructor::all();
        $categories = Category::all();
        $programs = Program::findOrFail($id);
        return view('admin.programs.add', [
            "instructors" => $instructors,
            "categories" => $categories,
            "programs" => $programs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ProgramsFormRequest $request, $id)
    {
        $program = Program::findOrFail($id);

        $program->name = $request->input('name');
        $program->about = $request->input('about');
        $program->category_id = $request->input('category');
        $program->instructor_id = $request->input('instructor');
        $program->lessons = $request->input('lessons');
        $program->price = $request->input('price');
        if($request->has("photo")) {
            if($program->photo != '')
            {
                unlink(public_path("/storage/program/".$program->photo));
            }
            $file = $request->file('photo');
            $file = str_replace("program//","" ,$file->store('program/', 'public'));
            $program->photo = $file;
        }
        $program->save();
        return redirect(route('admin.programs.index'));

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

    public function changeState($id)
    {
        $program = Program::findOrFail($id);
        if($program->state)
        {
            $program->state = false;
        }
        else
        {
            $program->state = true;
        }
        $program->save();
        return redirect(route("admin.programs.index"));
    }
}
