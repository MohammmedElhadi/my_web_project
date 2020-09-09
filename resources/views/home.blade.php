@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
            <div class="card-body-icon">
                <i class="fas fa-fw fa-user"></i>
            </div>
            <div class="mr-5">{{ $users->count() }} Nouveau Utulisateur </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
                <i class="fas fa-angle-right"></i>
            </span>
            </a>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
            <div class="card-body-icon">
                <i class="fas fa-fw fa-list"></i>
            </div>
            <div class="mr-5">  Evenments : {{ $evenments->count() }}</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
                <i class="fas fa-angle-right"></i>
            </span>
            </a>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
            <div class="card-body-icon">
                <i class="fas fa-list    "></i>
            </div>
            <div class="mr-5"> Categories : {{ $categories->count() }}</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
                <i class="fas fa-angle-right"></i>
            </span>
            </a>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
            <div class="card-body-icon">
                <i class="fas fa-fw fa-life-ring"></i>
            </div>
            <div class="mr-5"> Domaines :{{ $domaines->count() }}</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
                <i class="fas fa-angle-right"></i>
            </span>
            </a>
        </div>
        </div>
    </div>
    
  @endsection

@section('js')
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>


<script src="{{ asset('vendor/chart.js/Chart.min.js')}}"></script>

@endsection