@extends('layouts.default')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Agile</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/agile">Agile</a>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        @include('pages.agile.to-do')
        @include('pages.agile.inprogress')
        @include('pages.agile.completed')
    </div>
</div>
@endsection
