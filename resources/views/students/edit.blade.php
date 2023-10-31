@extends("layout.master")

@section("title","Edit");

@section("navbar")
@parent
@endsection

@section("content")
<div class="card">
    <div class="card-header">
        <h2>Edit User</h2>
    </div>
    <div class="card-body">
        <form action="{{route("students.edit",["id" => $student->id]) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Student Name</label>
                <input name="name" type="text" class="form-control"  value="{{ $student->name }}"  @error("name") is-invalid @enderror id="name" placeholder="student name">
                @error("name")
                <p class="text-danger">
                    {{ $message }}
                </p>

                @enderror
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Student Email</label>
                <input name="email" type="text" class="form-control" value="{{ $student->email }}"  @error("email") is-invalid @enderror id="email" placeholder="student email">
                @error("email")
                <p class="text-danger">
                    {{ $message }}
                </p>

                @enderror
            </div>

              <div class="mb-3"><button type="submit" class="btn btn-dark">
                Update
            </button></div>
        </form>
    </div>
</div>
@endsection
