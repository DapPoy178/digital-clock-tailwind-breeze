<?php

namespace App\Http\Controllers;

use App\Models\Money;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MoneyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $income = Money::where('status', 'income')->sum('total');
        $outcome = Money::where('status', 'outcome')->sum('total');
        $last_row = Money::latest('id')->first();
        $total_kas = $last_row->total_kas;

        $logs = Money::all();

        return view('uang-kas', ['income' => $income, 'outcome' => $outcome, 'total_kas' => $total_kas, 'logs' => $logs]);
    }

    public function edit($id)
    {
        $data = Money::where('id', $id)->first();
        return view('uang-kas-edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'keterangan' => 'required|max:255',
            'total' => 'required|numeric',
            'status' => 'required|in:income,outcome',
        ]);

        $data = Money::where('id', $id)->first();
        $data->update($request->all());
        return redirect('uang-kas')->with('status', 'Item berhasil di update');
    }

    public function form()
    {
        return view('uang-kas-form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'keterangan' => 'required|max:255',
            'total' => 'required|numeric',
            'status' => 'required|in:income,outcome',
        ]);

        $prev_total_kas = Money::orderBy('id', 'desc')->skip(0)->take(1)->pluck('total_kas')->first();
        $request['tanggal'] = Carbon::now()->toDateString();

        if ($request->status == 'income') {
            $request['total_kas'] = $prev_total_kas + $request->total;
        } elseif ($request->status == 'outcome') {
            $request['total_kas'] = $prev_total_kas - $request->total;
        } else {
            return "";
        }

        $add = Money::create($request->all());

        return redirect('uang-kas')->with('status', 'Item Berhasil Di Tambahkan');
    }

    public function destroy($id)
    {
        Money::where('id', $id)->delete();
        return redirect('uang-kas')->with('status', 'Item Berhasil Dihapus');
    }

    public function deletedMoney()
    {
        $deleted = Money::onlyTrashed()->get();
        return view('uang-kas-deleted', ['deleted' => $deleted]);
    }

    public function restore($id)
    {
        $restoreMoney = Money::withTrashed()->where('id', $id)->first();
        $restoreMoney->restore();
        return redirect('uang-kas')->with('status', 'Item Berhasil DiKembalikan');
    }
}
