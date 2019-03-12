@extends('layouts.app')
@section('content')
    <div class="container my-1 text-center m-auto">
        <div class="card m-auto" style="width:400px;">
            <div class="card-header bg-success text-white">
                <h3 class="card-title">Contoso University</h3>
                <p class="card-text">Imagination Street, Imagination Village</p>
            </div>
            <div class="card-body">
                <img src="/storage/idpicture/{{$student->IDpicture}}" class="card-img-top" style="max-width: 50%;">
                <h4 class="card-title text-success">{{$student->Firstname}}&nbsp;{{$student->Middlename}}&nbsp;{{$student->Lastname}}&nbsp;{{$student->Surname}}</h4>
                <div class="card-column">
                    <div class="card">
                        <h5 class="card-title"><u>{{$student->IDnumber}}</u></h5>
                        <p class="card-subtitle">ID Number</p>
                    </div>
                    <div class="card">
                        <h5 class="card-title"><u>{{$student->Course}}</u></h5>
                        <p class="card-subtitle">Course</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <a href="/students/{{$student->id}}/edit" class="btn btn-outline-success"> Edit </a>
    </div>
@endsection()