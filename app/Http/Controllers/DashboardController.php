<?php

namespace App\Http\Controllers;

use App\Models\Disposition;
use App\Models\Inbox;
use App\Models\Send;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use \Milon\Barcode\DNS1D;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inbox=Inbox::count();
        $send=Send::count();
        $disposition=Disposition::count();
        $user=User::count();
        return view('dashboard.index', compact('inbox','send','disposition','user'));
    }

    public function inbox()
    {
        $idlogin=Auth::user()->email;
        // return($idlogin);
        // die;
        // $qr=DNS2D::getBarcodePNG('16', 'QRCODE');
        $inbox=Inbox::all();
        $pdf = FacadePdf::loadView('dashboard.inbox', compact('inbox','idlogin'))->setPaper('a4','landscape');
         return $pdf->stream('datainbox.pdf');
    }

    public function send()
    {
        $idlogin=Auth::user()->email;
        // return($idlogin);
        // die;
        // $qr=DNS2D::getBarcodePNG('16', 'QRCODE');
        $send = Send::all();
        $pdf = FacadePdf::loadView('dashboard.send', compact('send','idlogin'))->setPaper('a4','landscape');
        return $pdf->stream('datasend.pdf');
    }

    public function disposition()
    {
        $idlogin=Auth::user()->email;
        // return($idlogin);
        // die;
        // $qr=DNS2D::getBarcodePNG('16', 'QRCODE');
        $disposition=Disposition::all();
        $pdf=FacadePdf::loadView('dashboard.disposition', compact('disposition','idlogin'))->setPaper('a4','landscape');
        return $pdf->stream('datadisposition.pdf'); 
    }

    public function user()
    {
        $emailusr=Auth::user()->email;
        // return($idlogin);
        // die;
        // $qr=DNS2D::getBarcodePNG('16', 'QRCODE');
        $user=User::all();
        $pdf = FacadePdf::loadView('dashboard.user', compact('user','emailusr'))->setPaper('a4','landscape');
         return $pdf->stream('datauser.pdf');
    }
}
