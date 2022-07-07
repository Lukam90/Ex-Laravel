@extends("layouts.app")

@section("content")
    @include("student.list")

    @include("student.add")
    @include("student.edit")
    {{--@include("student.delete")
    --}}
@endsection

@section("scripts")
    <script src="js/updateStudent.js"></script>
    <script src="js/deleteStudent.js"></script>

    <script src="js/fetchStudents.js"></script>

    <script src="js/addStudent.js"></script>
@endsection