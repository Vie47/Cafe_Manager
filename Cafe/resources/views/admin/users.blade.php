
@extends('admin.adminhome')

@section('content')
    <h1 class="m-0">USER</h1>
    <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($data as $data)
            <tr align="center">
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                @if($data->usertype=="0")
                    <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                @else
                    <td><a>Not Allowed</a></td>
                @endif
            </tr>
        @endforeach
        </tbody>

    </table>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('#staff_manage').addClass('active');
            $('#staff').addClass('menu-open');
            $('#staff_list').addClass('active');
        });
    </script>
@endpush
