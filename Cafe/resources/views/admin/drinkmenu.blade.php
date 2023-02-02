@extends('admin.adminhome')
@section('content')
    <form method="post" action="uploaddrink" enctype="multipart/form-data">

        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="num" name="price" class="form-control" id="price" placeholder="price" value="">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image" placeholder="" value="">
            </div>
            <div class="form-group">
                <label for="phone">Description</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

    <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Drink name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
            <th>Action2</th>

        </tr>
        </thead>
        <tbody>
        @foreach($data as $data)
            <tr align="center">
                <td>{{ $data->title }}</td>
                <td>{{ $data->price }}</td>
                <td>{{ $data->description }}</td>
                <td><img height="100" width="100" src="/drinkimage/{{$data->image}}"> </td>
                <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>

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
            $('#staff_create').addClass('active');
        });
    </script>
@endpush
