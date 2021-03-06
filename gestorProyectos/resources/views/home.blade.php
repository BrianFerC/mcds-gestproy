@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <img src="{{ asset('imgs/bg-dashboard.svg') }}" width="300px" class="my-2 img-top-card">
                <div class="card-header text-center">
                    <h4>
                        <i class="fa fa-clipboard-list"></i>
                        Dashboard 
                        | 
                        <small>
                            <i class="fas fa-user-ninja"></i> Admin
                        </small>
                    </h4>
                </div>

                <div class="card-body row">
                    <div class="col-md-4 mt-5">
                        <div class="card">
                                <img src="{{ asset('imgs/bg-users.svg') }}" width="240px" class="my-2 img-top-card">
                                <div class="card-body">
                                    <a href="{{ route('users.index') }}" class="btn btn-block btn-larapp">
                                        <i class="fa fa-users"></i>
                                        Module Users
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-md-4 mt-5">
                        <div class="card">
                                <img src="{{ asset('imgs/bg-categories.svg') }}" width="240px" class="my-2 img-top-card" height="154px">
                                <div class="card-body">
                                    <a href="{{ route('categories.index') }}" class="btn btn-block btn-larapp">
                                        <i class="fas fa-list-alt"></i>
                                        Module Categories
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-md-4 mt-5">
                        <div class="card">
                                <img src="{{ asset('imgs/bg-games.svg') }}" width="240px" class="my-2 img-top-card" height="154px">
                                <div class="card-body">
                                    <a href="{{ route('projects.index') }}" class="btn btn-block btn-larapp">
                                        <i class="fas fa-globe"></i>
                                        Module Projects
                                    </a>
                                </div>
                            </div>
                        </div>

                           {{--  --}}
                           <div class="col-md-4 mt-5">
                            <div class="card">
                                    <img src="{{ asset('imgs/bg-categories.svg') }}" width="240px" class="my-2 img-top-card" height="154px">
                                    <div class="card-body">
                                        <a href="{{ route('providers.index') }}" class="btn btn-block btn-larapp">
                                            <i class="fas fa-user"></i>
                                            Module Proveedores
                                        </a>
                                    </div>
                                </div>
                            </div>

                               {{--  --}}
                        <div class="col-md-4 mt-5">
                            <div class="card">
                                    <img src="{{ asset('imgs/bg-categories.svg') }}" width="240px" class="my-2 img-top-card" height="154px">
                                    <div class="card-body">
                                        <a href="{{-- route('tracings.index') --}}" class="btn btn-block btn-larapp">
                                            <i class="fas fa-search"></i>
                                            Module Tracing
                                        </a>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection
