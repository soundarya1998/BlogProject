@extends('Admin/Theme/main')
@section('content')
                
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">SubCategory</h3></div>
                            @if(session('status'))
                                <div class="alert alert-success mb-1 mt-1">
                                        {{ session('status') }}
                                </div>
                            @endif
                                <div class="card-body">
                                    <form method="POST" action="{{route('subcategory.store')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputFirstName">Select Category Name</label>
                                                        <select name="category_id" class="form-control" >
                                                            <option value="">Select Category</option>
                                                            @foreach($cat as $row)
                                                                <option value="{{$row['id']}}">{{$row['category_name']}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('category_name')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputFirstName">Sub-Category Name</label>
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Sub-Category Name" name="subcategory_name" />
                                                        @error('subcategory_name')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputFirstName">Image(Only PNG,JPG,JPEG,GIF,WEBP file)</label>
                                                        <input class="form-control" type="file" name="image" />
                                                        @error('image')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputFirstName">Price</label>
                                                        <input class="form-control" type="text" name="price" />
                                                        @error('price')
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