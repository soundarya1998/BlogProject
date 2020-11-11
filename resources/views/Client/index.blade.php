@extends('Client/Theme/main')
@section('content')
<!-- session_start() -->
<?php session_start(); 
$name = session('user'); 

?>
<br>
<br>
<h4> Welcome {{$name}}</h4>
                <main>
                    <div class="container-fluid ml-4">
                        <br>
                        <div class="row">
                    @foreach($data as $row)
                    
                    <div class="card ml-4" style="width: 18rem; ">

                        <img class="card-img-top" src="{{asset($row['image'])}}" alt="Card image cap" height="300px" width="400px">
                            <div class="card-body">
                                <h5 class="card-title">{{$row['subcategory_name']}}</h5>
                                    <p class="card-text">{{$row['price']}}.Rs</p>
                                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                            </div>
                    
                    @endforeach
                    </div>
                                </div>
                            </div>  

                            <div class="row mt-5">
                               <div class="col text-center">    
                            {{$data->links()}}
                         </div>
                    </div> 
                        </div>
                    </div>
                </main>

                <style>
                    .w-5{
                        display:none;
                    }
                </style>
                <!-- <script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                </script> -->

@endsection