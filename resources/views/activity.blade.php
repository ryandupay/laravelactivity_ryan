@extends('master')

@section('title', 'Activity')

@section('about')
    <div class="col-sm-4 mt-5 text-left">
        <div class="card">            
            <div class="card-body"> 
                <h5 class="card-title">Food Choices</h5>
                <p class="card-text">
                    @switch($data['food'])
                    @case('sushi')
                        Healthy and GOOD!
                        @break
                    @case('french fries')
                        Oily but Yummy!
                        @break
                    @case('salad')
                        No comment :D
                        @break
                    @case('nori')
                        Is it food?
                        @break
                    @default
                       Your food is {{ $data['food'] }}!
                    @endswitch
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mt-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-left">Table Loop</h5>
                    <table class="table">
                        <thead>
                            <th>Number</th>
                            <th>Description</th>
                        </thead>
                        <tbody>
                            @for ($num = 1; $num < 5; $num++)
                            <tr>
                                <td>{{ $num }}</td>
                                <td>This is data {{ $num }}</td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mt-5">
        <div class="card">
            <div class="card-body">
               
            </div>
        </div>
    </div>
@endsection