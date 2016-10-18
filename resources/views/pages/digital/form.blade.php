@extends('layouts.default') @section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Digital</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/digital">Digital</a>
            </li>
            <li>
                <a href="">Digital Form</a>
            </li>

        </ol>
    </div>
</div>
@include('errors.validation')
<div class="ibox-content">
    <form method="post" action="/digital/store" class="form-horizontal">
        {{ csrf_field() }}
        <input type='hidden' name='id' value="{{isset($digital)? $digital->id :''}}">
        <!--- edit -->
        <div class="form-group">
            <label class="col-sm-2 control-label">Firstname</label>
            <div class="col-sm-10">
                <input type="text" name="firstname" required value="{{isset($digital)? $digital->firstname :''}}" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
        <textarea  type="text" class="form-control"  name="description" required  >{{isset($digital)? $digital->description :''}}
        </textarea>
        </div>
      </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <input type="text" name="address" required value="{{isset($digital)? $digital->address :''}}" class="form-control">
            </div>
        </div>

        <div class="hr-line-dashed"></div>

        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-2">
                <button class="btn btn-white" type="submit">Cancel</button>
                <button class="btn btn-primary" type="submit">{{isset($digital)? 'Update Changes' :'Save Changes'}}</button>
            </div>

        </div>
    </form>
</div>
@endsection
