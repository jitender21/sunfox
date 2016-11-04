@extends('layouts.default')
@section('title',isset($post)? 'Update Post' : 'Create Post')

@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">

          <h2>{{isset($poster)? 'Update' : 'Create'}} Poster</small></h2>
          <ol class="breadcrumb">
  <li>
      <a href="/poster">Poster</a>
  </li>
</ol>
        </div>
        <div class="ibox-content">


          <form method="post" action="/poster/store" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{isset($poster)? $poster->id: ''}}">


            <div class="form-group"><label class="col-sm-2 control-label">Poster</label>
              <div class="col-sm-6">
                <select class="form-control" name="poster_id" >
                  <option value="poster">poster1</option>
                  <option value="poster">poster2</option>
                </select>
              </div>
            </div>
          </br>

            <div class="form-group"><label class="col-sm-2 control-label">Picture</label>
              <div class="col-sm-6"><input type="file" name="picture" value="{{isset($poster)? $poster->picture: old('picture')}}"></div>
              <div class="col-sm-6"><img class="img-responsive" src="{{isset($poster)? url($poster->picture) : ''}}" alt="No Image" width="80"></div>
            </div>

            <div class="hr-line-dashed"></div>
            <div class="form-group"><label class="col-sm-2 control-label">Post</label>
              <div class="col-sm-6"><textarea name="message" class="form-control" >{{isset($poster)?($poster->post):''}}</textarea></div>
            </div>

            <div class="form-group">
              <div class="col-sm-4 col-sm-offset-2">
                <a href="/poster" class="btn btn-default">Cancel</a>
                <button class="btn btn-primary" type="submit">{{isset($poster)? 'Update' : 'Create'}}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@stop
