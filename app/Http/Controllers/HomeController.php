<?php

namespace App\Http\Controllers;

use App\Models\properti;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
 public function index()
{
    $totalProperti = Properti::count();

    $projectSelesai = Properti::where('status', 'sold')->count();

    $asetDikelola = Properti::whereIn('status', ['available','acquisition','booking','negotiation'])->count();

    $mitra = 20; // sementara statis

    return view('home', compact(
        'totalProperti',
        'projectSelesai',
        'asetDikelola',
        'mitra'
    ));
}
public function sendContact(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    $profile = CompanyProfile::first();

    Mail::raw(
        "Nama: {$request->name}\nEmail: {$request->email}\n\nPesan:\n{$request->message}",
        function ($mail) use ($profile, $request) {
            $mail->to($profile->email ?? 'admin@example.com')
                 ->subject($request->subject);
        }
    );

    return back()->with('success', 'Pesan berhasil dikirim!');
}
public function contact()
{
    $profile = CompanyProfile::first();

    return view('contact', compact('profile'));
}

}