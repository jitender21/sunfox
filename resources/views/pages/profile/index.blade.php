@extends('layouts.default') @section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Profile</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/profile">Profile</a>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6">
                @include('pages.profile.form')
            </div>
            <div class="col-lg-6">
                @include('pages.profile.password')
            </div>
        </div>
        <hr>
        <div class="row">
            @include('pages.profile.image')
        </div>
    </div>
</div>
@endsection
