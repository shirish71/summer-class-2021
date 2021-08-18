@extends('layouts.master')
@section('site_title','Create Student')
@section('content')
    <h1>Create student</h1>
    <form action="{{route('student.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="roll-no">Roll no</label>
            <input type="text" name="roll_no" id="roll-no" class="form-control">
            <span class="text-danger">{{$errors->first('roll_no')}}</span>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name">
            <span class="text-danger">{{$errors->first('name')}}</span>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" id="address">
            <span class="text-danger">{{$errors->first('address')}}</span>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email">
            <span class="text-danger">{{$errors->first('email')}}</span>
        </div>
        <div class="form-group">
            <label for="contact-no">Contact</label>
            <input type="tel" name="contact_no" class="form-control" id="contact-no">
            <span class="text-danger">{{$errors->first('contact_no')}}</span>
        </div>
        <div class="form-check">
            <input type="checkbox" name="active" checked class="form-check-input" id="active">
            <label class="form-check-label" for="active">Active</label>
            <span class="text-danger">{{$errors->first('active')}}</span>
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
@endsection
