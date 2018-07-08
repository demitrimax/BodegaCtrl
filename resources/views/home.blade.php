@extends('layouts.app')
@section('body-class','landing-page')
@section('page-header') page-header-small @endsection
@section('content')
            <div class="page-header-image" data-parallax="true" style="background-image: url('nowuikit/img/bg6.jpg');">
            </div>
            <div class="container">
                <div class="content-center">
                    <h1 class="title">Bienvenido a nuestra aplicación.</h1>
                    <div class="text-center">
                        <h2>Si usted tiene los permisos necesarios, sientase libre de entrar a la administración.</h2>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                    @endif
                        @if(auth()->user()->rol=='admin')
                        <a class="btn btn-primary btn-lg" href="{{ url('admin/') }}">Entrar a la aplicación</a>
                        <br>
                        @endif
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
            </div>


@endsection
