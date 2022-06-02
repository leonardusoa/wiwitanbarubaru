<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function downloadEssay($fileName)
    {
        try {
            $file = Register::where('essay', $fileName)->firstOrFail();

            if(empty($file->essay) || is_null($file->essay)) {
                return redirect(route('view_data'));
            } else {

                $extension = explode(".", $file->essay);
                $fileName = Str::slug("essay-".$file->nama.'-'.$file->tempat_lahir.'-'.$file->tanggal_lahir);

                return response()->download(public_path('uploads/essay/'.$file->essay), $fileName.".".$extension[1]);
            }
        } catch (\Exception $e) {
            return redirect(route('view_data'));
        }
    }

    public function downloadIjazah($fileName)
    {
        try {
            $file = Register::where('scan_ijazah', $fileName)->firstOrFail();

            if(empty($file->scan_ijazah) || is_null($file->scan_ijazah)) {
                return redirect(route('view_data'));
            } else {

                $extension = explode(".", $file->scan_ijazah);
                $fileName = Str::slug("ijazah-".$file->nama.'-'.$file->tempat_lahir.'-'.$file->tanggal_lahir);

                return response()->download(public_path('uploads/ijazah/'.$file->scan_ijazah), $fileName.".".$extension[1]);
            }
        } catch (\Exception $e) {
            return redirect(route('view_data'));
        }
    }

    public function loginProcess(Request $request)
    {
        if(isset($request->email) && isset($request->password)) {
            $email = $request->email;
            $password = $request->password;

            if($email == 'admin@wiwitanbaru.com' && $password == 'wb@2021') {
                session()->put('user_has_login', "loggedin");
                return redirect()->back();
            }
        } else {
            return redirect()->back()->withErrors(['msg' => 'Email and password not valid']);
        }
    }

    public function logout()
    {
        session()->forget('user_has_login');
        return redirect()->route('view_data');
    }

    public function viewDb()
    {
        if(empty(session('user_has_login'))) {
            return view('admin_login');
        }

        $registed_user = Register::latest()->get();
        return view('view_data', compact('registed_user'));
    }

    public function submit(RegisterRequest $request)
    {
        $data = $request->all();

        $data['tanggal_lahir'] = date("Y-m-d", strtotime($request->tanggal_lahir));
        $data['nama'] = ucfirst($request->nama);
        $data['tempat_lahir'] = ucfirst($request->tempat_lahir);
        $data['alamat'] = ucfirst($request->alamat);
        $data['email'] = strtolower($request->email);
        $data['konfirmasi'] = strtoupper($request->konfirmasi);
        $data['bantuan_finansial'] = strtoupper($request->bantuan_finansial);
        $data['jurusan_pendidikan'] = ucfirst($request->jurusan_pendidikan);

        // if($request->hasFile('scan_ijazah')) {
        //     $file = $request->file('scan_ijazah');
        //     $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
        //     $destinationPath = public_path('uploads/ijazah/');
        //     $file->move($destinationPath, $randomName);
        //     $data['scan_ijazah'] = $randomName;
        // } else {
        //     $data['scan_ijazah'] = 'no_file.png';
        // }

        // if($request->hasFile('essay')) {
        //     $file = $request->file('essay');
        //     $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
        //     $destinationPath = public_path('uploads/essay/');
        //     $file->move($destinationPath, $randomName);
        //     $data['essay'] = $randomName;
        // } else {
        //     $data['essay'] = 'no_file.png';
        // }

        Register::create($data);

        return redirect()->route('register_index')->with('message', 'Data anda berhasil dikirim dan akan segera kami proses. Terima kasih');
    }
}
