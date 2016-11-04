<div class="col-sm-6">
    <form role="form" method="post" action="/profile/profileimage" enctype="multipart/form-data">
        {{csrf_field()}}
      <input type="hidden" name="id" value="{{Auth::user()->id}}">
      <div class="form-group"><label>@if(Auth::user()->role=='user') Logo @else Upload Profile Picture @endif</label></div>
      <div>
        @if(Auth::user()->profile_image && file_exists('uploads/profile/'.Auth::user()->profile_image))
          <img class="img-thumbnail" alt="image" class="img-circle m-t-xs img-responsive" src="/uploads/profile/{{Auth::user()->profile_image}}">
        @else
          <img class="img-thumbnail" alt="image" class="img-circle m-t-xs img-responsive" src="/assets/img/profile.jpg">
        @endif
        <input type="file" name="profile_image" required>
      </div>
        <div class="form-group pull-right">
          <a href="/" class="btn btn-white">Cancel</a>
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
        @if ($errors->has('profile'))
            <span class="help-block">
                <strong>{{ $errors->first('profile') }}</strong>
            </span>
        @endif
    </form>
</div>
