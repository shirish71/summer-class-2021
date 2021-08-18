@extends('layouts.master')
@section('site_title','Student')
@section('content')
    <h1>This is Student</h1>
    <a class="btn btn-primary" href="{{route('student.create')}}">Create Student</a>
    <table class="table">
        <tr>
            <th>SN.</th>
            <th>Id</th>
            <th>Roll No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Contact no</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$student->id}}</td>
                <td>{{$student->roll_no}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->contact_no}}</td>
                <td>{{$student->active}}</td>
                <td>
                    <a class="btn btn-success" href="{{route('student.show',$student->id)}}">Show</a>
                    <a class="btn btn-warning mb-1" href="{{route('student.edit',$student->id)}}">Edit</a>
                    <form action="{{route('student.destroy',$student->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

