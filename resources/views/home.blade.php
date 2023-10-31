@extends("layout.master")

@section("title","Home");

@section("navbar")
@parent
@endsection

@section("content")
<div class="container">
    <div class="row">
        <div class="col-6 mx-auto" >
            <div class="card mt-4">
                <div class="card-header">
                    <h1>Blog Form</h1>
                </div>
                <div class="card-body">
                    <form action="{{route("blog.store")}}"  method="POST" class=" p-4 shadow-lg">
                       @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Blog Title</label>
                            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Blog Content</label>
                            <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                          <button type="submit" class="btn btn-dark">Submit</button>
                        

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection