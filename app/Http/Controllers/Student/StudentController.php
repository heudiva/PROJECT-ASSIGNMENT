<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        // dd($students);
        return view("admin.student.index", ['students' => $students]);

    }

    public function login() {
        return view('admin.student.auth.login');
    }

    public function create()
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'sex' => 'required|in:male,female',
            'dob' => 'required|date',
            'village' => 'nullable|string|max:255',
            'commune' => 'nullable|string|max:255',
            'district' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|unique:students,email',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $student = new Student();
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->sex = $request->sex;
        $student->dob = $request->dob;
        $student->village = $request->village;
        $student->commune = $request->commune;
        $student->district = $request->district;
        $student->province = $request->province;
        $student->phone = $request->phone;
        $student->email = $request->email;

        $extension = $request->file('image')->extension();
        $fileName = date('YmdHis').'wkst.'.$extension;
        $request->file('image')->move(public_path('uploads/students'), $fileName);

        $student->image = $fileName;

        $student->save();

        return redirect()->route('students')->with('success', 'Student saved successfully!');
    }


    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('admin.student.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'sex' => 'required|in:male,female',
            'dob' => 'required|date',
            'village' => 'nullable|string|max:255',
            'commune' => 'nullable|string|max:255',
            'district' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
        // dd($request('image'));

        try {
            $imageName = '';
            if ($request->hasFile('image')) {
                if ($student->image) {
                    if (file_exists((string)$student->image)) {
                        unlink($student->image);
                    }
                }
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/students'), $imageName);
            } else {
                $imageName = $student->image;
            }
                $student->firstname = $request->firstname;
                $student->lastname = $request->lastname;
                $student->sex = $request->sex;
                $student->dob = $request->dob;
                $student->village = $request->village;
                $student->commune = $request->commune;
                $student->district = $request->district;
                $student->province = $request->province;
                $student->phone = $request->phone;
                $student->email = $request->email;
                // $student->updated_by = auth()->user()->id;
                $student->image = $imageName;
                $student->update();

                return redirect()->route('students')->with('success', 'Student saved successfully!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy(Request $request, $id){
        $student = Student::findOrFail($id);
        dd('delete', $id);
        $student->delete();

        return redirect()->route('students')->with('success', 'Student saved successfully!');
    }


    public function student_detail(){
        return view("admin.student.student-detail");
    }

    public function score(Request $request){
        $student = Student::All();

        if($request->student()->studentid){

            return redirect('admin/dashboard', ['id'=>$id]);
        }
    }

}
