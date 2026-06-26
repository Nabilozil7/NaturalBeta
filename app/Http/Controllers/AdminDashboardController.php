<?php

namespace App\Http\Controllers;

use App\Models\properti;
use App\Models\Article; 
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Total Properti
        $properti = properti::count();

      
        $statusData = properti::selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');

        $jenisData = properti::selectRaw('jenis, COUNT(*) as total')
            ->groupBy('jenis')
            ->pluck('total', 'jenis');

        $artikel = Article::count();

        $user = User::count();

        $roleData = User::selectRaw('role, COUNT(*) as total')
            ->groupBy('role')
            ->pluck('total', 'role');

        return view('admin.dashboard', compact(
                        'properti',
                            'artikel',
                            'user',
                            'statusData',
                            'jenisData',
                            'roleData',
    
        ));
    }
}