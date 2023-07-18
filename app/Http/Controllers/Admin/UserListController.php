<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $users = DB::table('users')->simplePaginate(5);
       return view('admin.userlist.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.userlist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'is_admin' => 'required'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_admin' => $request->is_admin,
        ]);
        $request->session()->flash('success', 'Исполнитель добавлен');
        return redirect()->route('userlist.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $question = User::find($id);
        // dd($question);
        return view('admin.userlist.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'is_admin' => 'required'
        ]);
        $questions = User::find($id);

        $data = $request->all();
        $questions->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_admin' => $request->is_admin,
        ]);
        return redirect()->route('userlist.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $questions = User::find($id);
        $questions->delete();
        return redirect()->route('userlist.index')->with('success', 'Исполнитель удалён');
    }
}
