<base href="/public">
@extends('admin.adminhome')
@section('content')




    <form method="post" action="{{url('/updatedrinkchef',$data->id)}}" enctype="multipart/form-data">

        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Chef name</label>
                <input type="text" name="chefname" class="form-control" id="chefname" placeholder="Enter name" value="{{$data->name}}">
            </div>
            <div class="form-group">
                <label for="price">Speciality</label>
                <input type="num" name="speciality" class="form-control" id="speciality" placeholder="speciality" value="{{$data->speciality}}">
            </div>
            <div class="form-group">
                <label for="image">Old Image</label>
                <img height="200" width="200" src="/chefimage/{{$data->image}}">
            </div>
            <div class="form-group">
                <label for="image">New Image</label>
                <input type="file" name="image" class="form-control" id="image" placeholder="" value="">
            </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update chef</button>
        </div>
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
