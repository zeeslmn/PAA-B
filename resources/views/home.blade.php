@extends('master')

@section('konten')
  <h4>Selamat Datang <b>{{Auth::user()->name}}</b>, Anda Login sebagai <b>{{Auth::user()->role}}</b>.</h4>
  <a class="btn btn-success" href="{{route('tampilsantri')}}"><i class="fa fa-print"></i> Data Santri</a><br><br>
@endsection