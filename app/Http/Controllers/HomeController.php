<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;
use App\User, App\Profile;
use PDF;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pdfdownload(){
        $data = [];
        $pdf = PDF::loadView('pdf.pdftemplate1');
        return $pdf->download('sample.pdf');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $user = Profile::where('id_user', $id)
            ->leftJoin('users', 'users.id', '=', 'user_profiles.id_user')
            ->first();
        return view('home', ['user' => $user]);
    }

    public function formAvatarPhoto(Request $request) {
        $url = 'storage/avatar/';
        $img = $request['image-data'];
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $name = Auth::user()->id . '-' .uniqid() . '.png';
        $file = $url . $name;
        $success = file_put_contents($file, $data);

        $profile = Profile::where('id_user', Auth::user()->id)
                        ->update(['profile_photo' => $name]);

        return $file;
    }
    
    public function formCoverPhoto(Request $request) {
        $url = 'storage/background/';
        $img = $request['image-data'];
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $name = Auth::user()->id . '-' .uniqid() . '.png';
        $file = $url . $name;
        $success = file_put_contents($file, $data);

        $profile = Profile::where('id_user', Auth::user()->id)
                        ->update(['profile_cover' => $name]);

        return $file;
    }
}
