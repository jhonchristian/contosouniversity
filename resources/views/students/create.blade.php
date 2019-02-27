@extends('layouts.app')
@section('content')
    <div class="container my-1">
        <a href="/students" class="btn btn-outline-secondary">Go Back</a>
        <h1 class="my-4"> Add New Student </h1>
        {!! Form::open(['action' => 'StudentsController@store', 'method' => 'POST', 'class' => 'border shadow p-4']) !!}
            <div class="form-group">
                {{Form::label('idnumber', 'ID Number')}}
                {{Form::text('idnumber', '', ['class' => 'form-control', 'placeholder' => 'Enter ID number'])}}
            </div>
            <div class="form-group">
                {{Form::label('gender', 'Gender')}}
                {{Form::select('gender', [
                    'Male' => 'Male',
                    'Female' => 'Female'
                ], null, ['class' => 'form-control', 'onchange' => 'hideSuffix();'])}}
            </div>
            <div class="form-group">
                {{Form::label('lastname', 'Last Name')}}
                {{Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
            </div>
            <div class="form-group" id="forSuffix">
                {{Form::label('suffix', 'Suffix')}}
                {{Form::select('suffix', [
                    '' => 'None',
                    'Jr.' => 'Jr.',
                    'Sr.' => 'Sr.'
            ], '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('firstname', 'First Name')}}
                {{Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('middlename', 'Middle Name')}}
                {{Form::text('middlename', '', ['class' => 'form-control', 'placeholder' => 'Enter Middle Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('course', 'Course')}}
                {{Form::select('course', [
                    '' => 'None',
                    'Information Technology' => 'Information Technology',
                    'Architecture' => 'Architecture',
                    'Mechanical Engineering' => 'Mechanical Engineering',
                    'Electrical Engineering' => 'Electrical Engineering'
            ], '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('birthday', 'Birthday')}}
                {{Form::date('birthday', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('phonenumber', 'Phone Number')}}
                {{Form::text('phonenumber', '', ['class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}
            </div>
            <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Enter Email'])}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection
@section('script')
    <script src="{{asset('/js/custom.js')}}"></script>
@endsection


<!--
    <div class="container my-1">
        <a href="/students" class="btn btn-outline-secondary">Go Back</a>
        <h1 class="my-4"> Add New Student </h1>
        <form method="POST" action={{action('StudentsController@store')}} class="border shadow p-4">
            @csrf
            <div class="form-group">
                <label for="idno">ID No:</label>
                <input type="text" class="form-control" id="idno" placeholder="Enter ID Number" name="idnumber">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" class="form-control" name="gender" onchange="hideSuffix()">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lastname">
            </div>
            <div class="form-group" id="forSuffix">
                <label for="suffix">Suffix:</label>
                <select id="suffix" class="form-control" name="suffix">
                    <option value="">None</option>
                    <option value="Jr.">Jr.</option>
                    <option value="Sr.">Sr.</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="firstname">
            </div>
            <div class="form-group">
                <label for="mname">Middle Name:</label>
                <input type="text" class="form-control" id="mname" placeholder="Enter Middle Name" name="middlename">
            </div>
            <div class="form-group">
                <label for="course">Course:</label>
                <select id="course" class="form-control" name="course">
                    <option value=""> None </option>
                    <option value="Information Technology"> Information Technology </option>
                    <option value="Architecture"> Architecture </option>
                    <option value="Electrical Engineering"> Electrical Engineering </option>
                </select>
            </div>
            <div class="form-group">
                <label for="birthday">Birthday:</label>
                <input type="date" class="form-control" id="bday" name="birthday">
            </div>
            <div class="form-group">
                <label for="number">Phone Number:</label>
                <input type="text" class="form-control" id="number" placeholder="Example: 09151234567" name="phonenumber">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="sample@demo.com" name="email">
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
-->