@extends('Admin/Theme/main')
@section('content')
           
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Users</h1>
                <br>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>Users Details 
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
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ureg as $row)
                                        <tr>
                                            <td>{{$row['id']}}</td>
                                            <td>{{$row['name']}}</td>
                                            <td>{{$row['address']}}</td>
                                            <td>{{$row['contact']}}</td>
                                            <td>{{$row['email']}}</td>
                                            <td>{{$row['password']}}</td>
                                            <td>
                                            <form action="{{route('ureg.destroy',$row['id'])}}" method="POST">
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
