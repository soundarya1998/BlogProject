@extends('Admin/Theme/main')
@section('content')
                
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Category</h3></div>
                            @if(session('status'))
                                <div class="alert alert-success mb-1 mt-1">
                                        {{ session('status') }}
                                </div>
                            @endif
                                <div class="card-body">
                                    <form method="POST" action="{{route('category.store')}}">
                                    {{ csrf_field() }}
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputFirstName">Category Name</label>
                                                        <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Category Name" name="category_name"/>
                                                        @error('category_name')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <br>

@endsection