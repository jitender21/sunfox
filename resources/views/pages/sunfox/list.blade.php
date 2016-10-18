<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {{--*/$i=1;/*--}}  @foreach($sunfoxs as $sunfox)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$sunfox->firstname}}</td>
            <td>{{$sunfox->lastname}}</td>
            <td>{{$sunfox->address}}</td>
            <td>
                <a href="/sunfox/edit/{{$sunfox->id}}" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                <a href="/sunfox/delete/{{$sunfox->id}}" class="btn btn-danger" onclick="return confirm ('Are u sure u delete row?')"><i class="fa fa-trash"></i> Delete</a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $sunfoxs->links() }}
<!-- pagenation -->
