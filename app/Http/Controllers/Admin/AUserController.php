<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UsersFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = User::orderBy("id", 'DESC')->paginate(15);
        return view('admin.users.index', [
            'users' => $users
        ]);
    }

    public function show(User $user)
    {
        return view('admin.users.look', [
            "user" => $user
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.add', [
            "user" => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(UsersFormRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->input('fname');
        $user->about = $request->input('about');
        if($request->has("photo")) {
            unlink("../storage/app/instructor/".$user->photo);
            $file = $request->file('photo');
            $user->photo = str_replace("instructor//","" , $file->store('instructor/'));
        }
        $user->save();
        return redirect(route("admin.users.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect(route('admin.users.index'));
    }
}
