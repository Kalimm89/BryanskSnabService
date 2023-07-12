<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $questions = DB::table('questions')->simplePaginate(5);
       return view('admin.questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.questions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $data = $request->all();
        Questions::create($data);
        $request->session()->flash('success', 'Исполнитель добавлен');
        return redirect()->route('questions.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $question = Questions::find($id);
        return view('admin.questions.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $questions = Questions::find($id);

        $data = $request->all();
        $questions->update($data);
        return redirect()->route('questions.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $questions = Questions::find($id);
        $questions->delete();
        return redirect()->route('questions.index')->with('success', 'Исполнитель удалён');
    }
}
