<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('jadwal-kajian', ['jadwal' => $jadwal]);
    }

    public function form()
    {
        return view('jadwal-kajian-tambah');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date_format:Y-m-d',
            'tema' => 'required|max:255',
            'pemateri' => 'required|max:255',
            'waktu' => 'required|date_format:H:i',
        ]);

        $add = Jadwal::create($request->all());

        return redirect('jadwal-kajian')->with('status', 'Item Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $data = Jadwal::where('id', $id)->first();
        return view('jadwal-edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date_format:Y-m-d',
            'tema' => 'required|max:255',
            'pemateri' => 'required|max:255',
            'waktu' => 'required|date_format:H:i',
        ]);

        $data = Jadwal::where('id', $id)->first();
        $data->update($request->all());
        return redirect('jadwal-kajian')->with('status', 'Item berhasil di update');
    }

    public function destroy($id)
    {
        $destroy = Jadwal::where('id', $id)->delete();
        return redirect('jadwal-kajian')->with('status', 'Item Berhasil Dihapus');
    }

    public function deletedJadwal()
    {
        $deleted = Jadwal::onlyTrashed()->get();
        return view('jadwal-deleted', ['deleted' => $deleted]);
    }

    public function restore($id)
    {
        $restoreJadwal = Jadwal::withTrashed()->where('id', $id)->first();
        $restoreJadwal->restore();
        return redirect('jadwal-kajian')->with('status', 'Item Berhasil DiKembalikan');
    }
}
