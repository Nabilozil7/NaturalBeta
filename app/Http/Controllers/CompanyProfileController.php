<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;

class CompanyProfileController extends Controller
{
            public function detail()
        {
            $profile = CompanyProfile::first();
            return view('admin.profile.detail.profile', compact('profile'));
        }

        public function edit()
        {
            $profile = CompanyProfile::first();
            return view('admin.profile.edit', compact('profile'));
        }
   

        
    public function update(Request $request)
    {
        $profile = CompanyProfile::first();

        $data = $request->validate([
            'nama_perusahaan' => 'required',
            'tentang' => 'nullable',
            'visi' => 'nullable',
            'misi' => 'nullable',
            'alamat' => 'nullable',
            'telepon' => 'nullable',
            'email' => 'nullable|email',
            'website' => 'nullable'
        ]);

        if ($request->hasFile('logo')) {

            $logo = time().'.'.$request->logo->extension();

            $request->logo->move(
                public_path('logo_perusahaan'),
                $logo
            );

            $data['logo'] = $logo;
        }

        $profile->update($data);

        return redirect()->route('profile.detail')->with('success','Profil perusahaan berhasil diperbarui');
    }
}
