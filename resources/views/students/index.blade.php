@extends('layouts.app')
@section('content')
    <!-- Modal -->      
    <!-- End Modal -->
    </div>
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
                    </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <a href="/students/{{$student->id}}">
                    <tr>
                        <td><a href="students/{{$student->id}}">{{$student->IDnumber}}</a></td>
                        <td>{{$student->Lastname}}</td>           
                        <td>{{$student->Firstname}}</td>
                        <td>{{$student->Middlename}}</td>
                        <td>{{$student->Suffix}}</td>
                        <td>{{$student->Course}}</td>
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