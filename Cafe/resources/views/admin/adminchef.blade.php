@extends('admin.adminhome')
@section('content')
<form method="post" action="{{url('/uploadchef')}}" enctype="multipart/form-data">

    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="">
        </div>
        <div class="form-group">
            <label for="price">Speciality</label>
            <input type="text" name="speciality" class="form-control" id="speciality" placeholder="speciality" value="">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="speciality" placeholder="speciality" value="">

        </div>


    </div>

    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>

    <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>

            <th>Chef name</th>
            <th>Speciality</th>
            <th>Image</th>
            <th>Action</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($data as $data)
            <tr align="center">
                <td>{{ $data->name }}</td>
                <td>{{ $data->speciality }}</td>
                <td><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>
                <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
                <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>

            </tr>
        @endforeach
        </tbody>

    </table>
</form>

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
