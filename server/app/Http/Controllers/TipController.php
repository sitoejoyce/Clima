<?php

namespace App\Http\Controllers;

use App\Models\Tip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class TipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('tips.index', ['tips' => Tip::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tips.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', File::image()->extensions(['png', 'jpg', 'jpeg'])],
            'description' => ['required', 'string'],
        ]);

        $path = $request->file('image')->store(date('Y-m-d'), ['disk' => 'public']);
        Tip::create([
            'image' => $path,
            'description' => $request->description,
        ]);

        return redirect()->route('tips.index')->with('status', ['message' => 'Dicas criado com sucesso.', 'type' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tip $tip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tip $tip)
    {
        return view('tips.edit', ['tip' => $tip]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tip $tip)
    {
        $request->validate([
            'image' => ['sometimes', File::image()->extensions(['png', 'jpg', 'jpeg'])],
            'description' => ['required', 'string'],
        ]);

        $data = $request->only('name');

        if ($request->hasFile('image')) {

            if (Storage::exists($tip->image)) {
                Storage::delete($tip->image);
            }

            $path = $request->file('image')->store(date('Y-m-d'), ['disk' => 'public']);
            $data = array_merge($data, ['image' => $path]);
        }

        $tip->update($data);

        return redirect()->route('tips.index')->with('status', ['message' => 'Dicas atualizado com sucesso.', 'type' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tip $tip)
    {
        $tip->deleteOrFail();
        return redirect()->back()->with('status', ['message' => 'Dicas excluido com sucesso.', 'type' => 'success']);
    }
}
