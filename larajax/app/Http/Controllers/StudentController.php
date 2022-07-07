<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function notFound()
    {
        return response()->json([
            "status" => 404,
            "student" => "No student found."
        ]);
    }

    public function hasError()
    {
        return response()->json([
            "status" => 400,
            "errors" => ["An error occurred"]
        ]);
    }

    public function index()
    {
        return view("student.index");
    }

    public function fetch()
    {
        $students = Student::all();

        return response()->json([
            "students" => $students
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|max:255",
            "course" => "required|max:255",
        ]);

        if (! $validator->fails()) {
            $student = new Student;
            $student->name = $request->input("name");
            $student->course = $request->input("course");
            $student->save();

            return response()->json([
                "status" => 200,
                "message" => "Student added successfully."
            ]);
        } else {
            return $this->hasError();
        }
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        if ($student) {
            $validator = Validator::make($request->all(), [
                "name" => "required|max:255",
                "course" => "required|max:255",
            ]);

            if (! $validator->fails()) {
                $student->name = $request->input("name");
                $student->course = $request->input("course");
                $student->update();

                return response()->json([
                    "status" => 200,
                    "message" => "Student updated successfully."
                ]);
            } else {
                return $this->hasError();
            }
        } else {
            return $this->notFound();
        }
    }

    public function destroy($id)
    {
        $student = Student::find($id);

        if ($student) {
            $student->delete();

            return response()->json([
                "status" => 200,
                "message" => "Student deleted successfully."
            ]);
        } else {
            return $this->notFound();
        }
    }
}
