@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('css')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Inicio - Bienvenido(a) {{ Auth::user()->name }}</h4>
                </div>
            </div>
        </div>
        <index-page></index-page>
    </div>
@endsection

@section('script')

@endsection
