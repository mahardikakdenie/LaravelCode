<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('students.index', ['students' => $student]);
    }
    public function get()
    {
        $mahasiswa = Student::all();
        return response()->json(
            [
                "meta" => [
                    "message" => "Success",
                ],
                "data" => $mahasiswa
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:9',
            'email' => 'required',
            'Jurusan' => 'required',
        ]);
        Student::create($request->all());

        return redirect('/students')->with('status', 'data mahasiswa berhasil di tambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
    public function params(Student $student)
    {
        return response()->json(
            [],
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:9',
            'email' => 'required',
            'Jurusan' => 'required',
        ]);
        $student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'email' => $request->email,
                'Jurusan' => $request->Jurusan,
            ]);
        return redirect('/students')->with('status', 'data mahasiswa berhasil di Ubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('delete', 'data mahasiswa berhasil di Hapus !');
    }
}