@extends('master')

@section('title', 'About Page')

@section('temp')

  @php
    $records = ['ryan'];
  @endphp

  @if (count($records) === 1)
    <p> I have one record! </p>
  @elseif (count($records) > 1)
    <p> I have multiple records! </p>
  @else
    <p> I don't have any records! </p>
  @endif

  @php
    $name = 'Ryan'
  @endphp

  @switch($name)
    @case('Aubrey')
        First case...
        @break
    @case('Ryan')
        Second case...
        @break
    @default
        Default case...
  @endswitch


  @php
  $users = ['Aubrey', 'Ryan', 'Hayato', 'Koki', 'Maki', 'Naoki', 'Kenichi'];
  @endphp

  @for ($i = 0; $i < 10; $i++)
  <p> The current value is {{ $i }} </p>
  @endfor

  @foreach ($users as $user)
  <p>This is user {{ $user }}</p>
  @endforeach

  @while (false)
  <p>I'm looping forever.</p>
  @endwhile


@endsection