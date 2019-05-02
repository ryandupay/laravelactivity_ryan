@extends('master')

@section('title', 'Home Page')

@section('home')
<div class="col-sm-3">
    <div class="card mt-3">
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <p><a href="#">My Profile</a></p>
                    <img src="img/bird.jpg" class="rounded-circle" height="65" width="65" alt="Avatar">
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <p><a href="#">Interests</a></p>
                    <p>
                        <span class="badge badge-default">News</span>
                        <span class="badge badge-primary">W3Schools</span>
                        <span class="badge badge-success">Labels</span>
                        <span class="badge badge-info">Football</span>
                        <span class="badge badge-warning">Gaming</span>
                        <span class="badge badge-danger">Friends</span>
                    </p>
                </div>
            </div>
            <div class="alert alert-success mt-3">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p><strong>Ey!</strong></p>
                People are looking at your profile. Find out who.
            </div>
        </div>
    </div>
</div>    
<div class="col-sm-7 mb-5">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-default text-left mt-3">
                <div class="card-body">
                    <p contenteditable="true">Status: Feeling Blue</p>
                    <button type="button" class="btn btn-primary btn-sm">
                        <i class="fas fa-thumbs-up"></i> Like
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="card mt-3">
                <div class="card-body">
                    <p>John</p>
                    <img src="img/bird.jpg" class="rounded-circle" height="55" width="55" alt="Avatar">
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="card mt-3">
                <div class="card-body">
                    <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="card mt-3">
                <div class="card-body">
                    <p>John</p>
                    <img src="img/bird.jpg" class="rounded-circle" height="55" width="55" alt="Avatar">
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="card mt-3">
                <div class="card-body">
                    <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="card mt-3">
                <div class="card-body">
                    <p>John</p>
                    <img src="img/bird.jpg" class="rounded-circle" height="55" width="55" alt="Avatar">
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="card mt-3">
                <div class="card-body">
                    <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-3">
            <div class="card mt-3">
                <div class="card-body">
                    <p>John</p>
                    <img src="img/bird.jpg" class="rounded-circle" height="55" width="55" alt="Avatar">
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="card mt-3">
                <div class="card-body">
                    <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                </div>
            </div>
        </div>
    </div>     
</div>
<div class="col-sm-2">
    <div class="card mt-3">
        <div class="card-body">
            <p>Upcoming Events:</p>
            <img src="img/paris.jpg" class="img-thumbnail" alt="Paris">
            <p><strong>Paris</strong></p>
            <p>Fri. 27 November 2015</p>
            <button class="btn btn-primary">Info</button>
        </div>
    </div>
</div>
@endsection