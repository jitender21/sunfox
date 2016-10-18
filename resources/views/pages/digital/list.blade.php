<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Description</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {{--*/$i=1;/*--}} @if(count($digitals)>0)
         @foreach($digitals as $digital)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$digital->firstname}}</td>
            <td>{{$digital->description}}</td>
            <td>{{$digital->address}}</td>
            <td>
                <a href="/digital/edit/{{$digital->id}}" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                <a href="/digital/delete/{{$digital->id}}" class="btn btn-danger" onclick="return confirm ('Are u sure u delete row?')"><i class="fa fa-trash"></i> Delete</a>

            </td>
        </tr>
        @endforeach @endif
    </tbody>
</table>
