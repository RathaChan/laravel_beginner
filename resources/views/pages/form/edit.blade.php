
@extends("admin.master")

@section('title', ' create')
@section('create')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">edit</h3>
        </div>
        <form action="{{url('/category/')}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$categories->id}}">
            <div class="card-body">
                <div class="form-group">
                    <label>Code</label>
                    <input type="text" class="form-control" placeholder="code" autocomplete="off" name="code" value="{{$categories->code}}">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control"  placeholder="name"  autocomplete="off" name="name" value="{{$categories->name}}">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image" value="">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

@endsection