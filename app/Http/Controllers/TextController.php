<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $text = Text::all();

        return view('text', ['text' => $text]);
    }

    public function add()
    {
        return view('text-add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'text' => 'required|max:255',
        ]);

        $add = Text::create($request->all());

        return redirect('text')->with('status', 'Item Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $data = Text::where('id', $id)->first();
        return view('text-edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'text' => 'required|max:255',
        ]);

        $data = Text::where('id', $id)->first();
        $data->update($request->all());
        return redirect('text')->with('status', 'Item berhasil di update');
    }

    public function destroy($id)
    {
        $destroy = Text::where('id', $id)->delete();
        return redirect('text')->with('status', 'Item Berhasil Dihapus');
    }

    public function deletedText()
    {
        $deleted = Text::onlyTrashed()->get();
        return view('text-deleted', ['deleted' => $deleted]);
    }

    public function restore($id)
    {
        $restoreText = Text::withTrashed()->where('id', $id)->first();
        $restoreText->restore();
        return redirect('text')->with('status', 'Item Berhasil DiKembalikan');
    }
}
