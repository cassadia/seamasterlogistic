<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SideMenuCotroller extends Controller
{
    public function menuKalkulator() {
        return view('sidemenu.kalkulator');
    }

    public function menuPembayaran() {
        return view('sidemenu.pembayaran');
    }

    public function menuDailyQuotes() {
        return view('sidemenu.dailyquotes');
    }

    public function menuCekResi() {
        return view('sidemenu.cekresi');
    }

    public function menuHubKerjaSama() {
        return view('sidemenu.hubkerjasama');
    }

    public function menuWarehousing() {
        return view('sidemenu.warehousing');
    }

    public function menuTrucking() {
        return view('sidemenu.trucking');
    }

    public function menuEducationalVid() {
        return view('sidemenu.educationalvideos');
    }
}
