<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>Basic Info </h5>
    </div>
    <div class="ibox-content">
        <div class="row">
            <div class="col-sm-12">
                <form role="form" method="POST" action="/profile/store">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value={{Auth::id()}}>
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" placeholder="Full Name" value='{{Auth::user()->name}}' class="form-control"> @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span> @endif
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Enter email" value='{{Auth::user()->email}}' class="form-control"> @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span> @endif
                    </div>

                    <div>
                        <button class="btn btn-sm btn-primary pull-right" type="submit"><strong>Update</strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
