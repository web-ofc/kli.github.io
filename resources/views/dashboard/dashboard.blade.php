@extends('layout')
@section('content')
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h3 text-primary mb-1" style="font-weight: 600">
                                Line
                            </div>
                            <div class="text-xs text-primary mb-1">
                                Total
                            </div>
                            <div class="h5 mb-0 text-gray-800">40</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-shuffle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h3 text-success mb-1" style="font-weight: 600">
                                Aproved
                            </div>
                            <div class="text-xs text-success mb-1">
                                Total
                            </div>
                            <div class="h5 mb-0 text-gray-800">10</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-regular fa-circle-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h3 text-danger mb-1" style="font-weight: 600">
                                Reject
                            </div>
                            <div class="text-xs text-danger mb-1">
                                Total
                            </div>
                            <div class="h5 mb-0 text-gray-800">5</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-regular fa-circle-xmark fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h3 text-warning mb-1" style="font-weight: 600">
                                Running
                            </div>
                            <div class="text-xs text-warning mb-1">
                                Total
                            </div>
                            <div class="h5 mb-0 text-gray-800">40</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-truck-fast fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection