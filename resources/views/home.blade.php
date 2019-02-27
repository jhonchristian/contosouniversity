@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center" data-ride="carousel">
        <h1> Contoso University</h1>
        <p> Your imaginary university for imaginary students </p>
    </div>

    <div class="container">
        <div class="card-deck text-center">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"> Students </h2>
                    <p> Here in Contoso University, we have a list of our imaginary students, so we can track their course and also their teachers. </p>
                </div>
                <div class="card-footer">
                    <a href="/students" class="card-link">See List</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"> Teachers </h2>
                    <p> Here in Contoso University, we have a list of our imaginary Teachers, so we can track their course specialization and students assigned to them. </p>
                </div>
                <div class="card-footer">
                    <a href="/teachers" class="card-link">See List</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"> Courses </h2>
                    <p> Here in Contoso University, we have a lot of  imaginary courses that you want to take. </p>      
                </div>
                <div class="card-footer">
                    <a href="/students" class="card-link">See List</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4 text-center">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title"> Contoso University </h2>
                <p> Contoso University is an imaginary university which focused on the development of its staff and students. Established by an Anonymous Web Developer in 2019, the purpose of this university is to serve as an improvement to our precious developer. <br><br>
                Our specialty are focused on different courses and subjects, students and staff, and different facilities to help our students to learn more. </p>
            </div>
        </div>
    </div>
@endsection