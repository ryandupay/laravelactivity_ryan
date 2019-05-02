@extends('master')

@section('title', 'Profile Page')

@section('about')
    <div class="col-sm-4 mt-5">
        <div class="card">
            <div class="card-body">
                <h3>Basic Information</h3>
                <p>Name: {{ $data['name'] }}</p>
                <p>Image: {{ $data['image'] }}</p>
                <p>Age: {{ $data['age'] }}</p>
                <p>Address: {{ $data['address'] }}</p>
                <p>Sex: {{ $data['sex'] }}</p>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mt-5">
        <div class="card">
            <div class="card-body">
                <h3>Contact Information</h3>
                <p>Email Address: {{ $data['email'] }}</p>
                <p>Phone Number: {{ $data['phone'] }}</p>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mt-5">
        <div class="card">
            <div class="card-body">
                <h3>Employment Details</h3>
                <p>Employer: {{ $data['employer'] }}</p>
                <p>Job Title: {{ $data['jobtitle'] }}</p>
                <p>Job Description: {{ $data['jobdescription'] }}</p>
            </div>
        </div>
    </div>
@endsection