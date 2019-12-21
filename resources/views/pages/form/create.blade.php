@extends("admin.master")

@section('title', ' create')
@section('create')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{url('category')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Code</label>
                    <input type="text" class="form-control" placeholder="code" autocomplete="off" name="code">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control"  placeholder="name"  autocomplete="off" name="name">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
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