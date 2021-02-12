<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;
use App\Student;

class PageController extends Controller
{

    public function home()
    {
        return view('index');
    }
    public function about()
    {
        return view('about', ['nama' => 'Mahardika Kessuma Denie']);
    }
    public function mahasiswa()
    {
        // $mahasiswa = DB::table('students')->get();
        $mahasiswa = Mahasiswa::all();
        $students = Student::all();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa, 'students' => $students]);
    }
    public function mhs()
    {
        $mahasiswa = Mahasiswa::all();
        return response()->json(
            [
                "meta" => [
                    "message" => "Success",
                ],
                "data" => $mahasiswa
            ]
        );
    }
}