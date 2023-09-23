<?php

namespace App\Http\Controllers;

use App\Models\Money;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Jadwal;
use App\Models\Text;

class PublicController extends Controller
{
    public function index()
    {
        date_default_timezone_set('UTC');
        $time = time();

        $Arabic = new \ArPHP\I18N\Arabic();

        $correction = $Arabic->dateCorrection ($time);

        $Arabic->setDateMode(8);

        // Latitude, Longitude, Zone, and Elevation
        $Arabic->setSalatLocation(-6.525111741042941, 107.03812487022984, 7);
        
        // Month, Day, and Year
        $Arabic->setSalatDate(date('n'), date('j'), date('Y'));

        // Salat calculation configuration: Egyptian General Authority of Survey
        $Arabic->setSalatConf('Shafi', -0.833333,  18, 20, 'Sunni');
        $times = $Arabic->getPrayTime();
        

        // date
        $day = date('D');
        $gdate = date('d F Y');
        $hdate = $Arabic->date('d F Y', $time, $correction);

        $today = date('l');

        // days in a week
        $sunday = "Sunday";
        $monday = "Monday";
        $tuesday = "Tuesday";
        $wednesday = "Wednesday";
        $thursday = "Thursday";
        $friday = "Friday";
        $saturday = "Saturday";

        $ctime = Carbon::now()->setTimezone("Asia/Jakarta")->format('H:i:s');
        $fajr = Carbon::parse('11:30:30')->format("H:i:s");

        $income = Money::where('status', 'income')->sum('total');
        $outcome = Money::where('status', 'outcome')->sum('total');
        $last_row = Money::latest('id')->first();
        $total_kas = $last_row->total_kas;

        $jadwal = Jadwal::get()->take(-3);

        $text = Text::all();
        
        // dd($ctime, $fajr);
        return view('index', [
            'day' => $day,
            'gdate' => $gdate, 
            'hdate' => $hdate, 
            'ptimes' => $times,
            'today' => $today,
            'sunday' => $sunday,
            'monday' => $monday,
            'tuesday' => $tuesday,
            'wednesday' => $wednesday,
            'thursday' => $thursday,
            'friday' => $friday,
            'saturday' => $saturday,
            'fajr' => $fajr,
            'ctime' => $ctime,
            'income' => $income, 
            'outcome' => $outcome, 
            'total_kas' => $total_kas,
            'jadwal' => $jadwal,
            'text' => $text,
        ]);
    }
}
