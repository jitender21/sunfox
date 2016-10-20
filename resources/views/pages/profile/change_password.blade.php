<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>Password</h5>
    </div>
    <div class="ibox-content">
        <form role="form" method="POST" action="/profile/change-password">
            {{csrf_field()}}
            <input type="hidden" name="id" value={{Auth::id()}}>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control"> @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span> @endif
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control"> @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
              </span> @endif
            </div>
            <div>
                <button class="btn btn-sm btn-primary pull-right" type="submit"><strong>Update</strong></button>
            </div>
        </form>
    </div>
</div>
