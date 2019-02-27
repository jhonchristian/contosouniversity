@extends('layouts.app')
@section('content')
    <div class="container my-1">
        <a href="/students" class="btn btn-outline-secondary">Go Back</a>
        <h1 class="my-4"> Add New Student </h1>
        {!! Form::open(['action' => ['StudentsController@update', $student->id], 'method' => 'POST', 'class' => 'border shadow p-4']) !!}
            <div class="form-group">
                {{Form::label('idnumber', 'ID Number')}}
                {{Form::text('idnumber', $student->IDnumber, ['class' => 'form-control', 'placeholder' => 'Enter ID number'])}}
            </div>
            <div class="form-group">
                {{Form::label('gender', 'Gender')}}
                {{Form::select('gender', [
                    'Male' => 'Male',
                    'Female' => 'Female'
                ], $student->Gender, ['class' => 'form-control', 'onchange' => 'hideSuffix();'])}}
            </div>
            <div class="form-group">
                {{Form::label('lastname', 'Last Name')}}
                {{Form::text('lastname', $student->Lastname, ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
            </div>
            <div class="form-group" id="forSuffix">
                {{Form::label('suffix', 'Suffix')}}
                {{Form::select('suffix', [
                    '' => 'None',
                    'Jr.' => 'Jr.',
                    'Sr.' => 'Sr.'
            ], $student->Suffix, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('firstname', 'First Name')}}
                {{Form::text('firstname', $student->Firstname, ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('middlename', 'Middle Name')}}
                {{Form::text('middlename', $student->Middlename, ['class' => 'form-control', 'placeholder' => 'Enter Middle Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('course', 'Course')}}
                {{Form::select('course', [
                    '' => 'None',
                    'Information Technology' => 'Information Technology',
                    'Architecture' => 'Architecture',
                    'Mechanical Engineering' => 'Mechanical Engineering',
                    'Electrical Engineering' => 'Electrical Engineering'
            ], $student->Course, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('birthday', 'Birthday')}}
                {{Form::date('birthday', $student->Birthday, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('phonenumber', 'Phone Number')}}
                {{Form::text('phonenumber', $student->PhoneNumber, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}
            </div>
            <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::email('email', $student->Email, ['class' => 'form-control', 'placeholder' => 'Enter Email'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection
@section('script')
    <script src="{{asset('/js/custom.js')}}"></script>
@endsection