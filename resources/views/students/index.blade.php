@extends('layouts.app')
@section('content')
    <div class="container my-4 text-center">
        <h1 class="float-left"> Students </h1>
        <a href="students/create" class="btn btn-outline-primary float-right "> Add </a><br>
        <hr>
        @if(count($students) > 0)
            <table class="table table-responsive-lg table-hover table-condensed table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID No.</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Suffix</th>
                        <th>Course</th>
                        <th>Email</th>
                        <th>PhoneNumber</th>
                        <th>Birthday</th>
                        <th>Gender</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <a href="/students/{{$student->id}}">
                    <tr>
                        <td><a href="students/{{$student->id}}/edit">{{$student->IDnumber}}</a></td>
                        <td>{{$student->Lastname}}</td>                        
                        <td>{{$student->Firstname}}</td>
                        <td>{{$student->Middlename}}</td>
                        <td>{{$student->Suffix}}</td>
                        <td>{{$student->Course}}</td>
                        <td>{{$student->Email}}</td>
                        <td>{{$student->PhoneNumber}}</td>
                        <td>{{$student->Birthday}}</td>
                        <td>{{$student->Gender}}</td>
                    </tr>
                    </a>
                @endforeach
                </tbody>    
            </table>
        @else 
            <p> No list of students yet </p>
        @endif
    </div>
@endsection