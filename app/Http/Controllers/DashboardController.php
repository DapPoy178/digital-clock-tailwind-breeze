<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Money;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
        $jadwal = Jadwal::get()->take(-3);

        return view('dashboard', ['income' => $income, 'outcome' => $outcome, 'total_kas' => $total_kas, 'jadwal' => $jadwal]);
    }
}
