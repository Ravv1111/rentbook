@extends('layout.main')

@section('title', 'dashboard')
@section('content')
    <div class="row my-5">
        <div class="col-lg-4">
            <div class="card-data book">
                <div class="row">
                    <div class="col-lg-6">
                    <i class="bi bi-journal"></i>

                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">
                        books
                    </div>
                    <div class="card-count">
                        5
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data category">
                <div class="row">
                    <div class="col-lg-6">
                    <i class="bi bi-journal"></i>

                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">
                        category
                    </div>
                    <div class="card-count">
                        5
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data user">
                <div class="row">
                    <div class="col-lg-6">
                    <i class="bi bi-journal"></i>

                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">
                        user
                    </div>
                    <div class="card-count">
                        5
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection