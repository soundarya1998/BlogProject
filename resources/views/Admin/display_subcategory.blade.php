@extends('Admin/Theme/main')
@section('content')
           
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">SubCategories</h1>
                <br>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>SubCategory Details 
                                <a href="subcategory/create" class="btn btn-primary btn-sm" style="float:right;">Add New SubCategory</a>
                        </div>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Category Name</th>
                                            <th>Subcategory Name</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($subcat as $row)
                                        <tr>
                                            <td>{{$row['id']}}</td>
                                            <td>{{$row['category_name']}}</td>
                                            <td>{{$row['subcategory_name']}}</td>
                                            <td><img src="{{$row['image']}}" height="100px" width="120px" style="margin-left:40px;"></td>
                                            <th>{{$row['price']}}.Rs</th>
                                            <td><a href="{{route('subcategory.edit',$row['id'])}}" class="btn btn-secondary btn-sm">Edit</a></td>
                                            <td>
                                            <form action="{{route('subcategory.destroy',$row['id'])}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are u Sure to Delete?')" type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </main>

@endsection
