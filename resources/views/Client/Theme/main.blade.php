<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="{{asset('Client/dist/css/styles.css')}}" rel="stylesheet" />
        <!-- <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" /> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script> 
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- <a class="navbar-brand" href="">Start Bootstrap</a> -->
            <!-- <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button> -->
            <!-- Navbar Search-->
            
            <form role="form" >
                                    <!-- Input Group -->
                                    <div class="input-group mt-3" >
                                        <input type="text" class="form-control" name="txtLeftSearch"  id="txtLeftSearch" onKeyPress="myFunction()" placeholder="Type Something" >
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                    <ul id="myUL" style="display:none;" >
                                        @foreach($rec as $segment)
                                           <li><a href="{{url('/getcontent',$segment->id)}}">{{ $segment->category_name}}</a></li>
                                        @endforeach
                                    </ul>
            </form>
            <a href="/logout" style="margin-left:950px;">LOG OUT</a>
        </nav>
        <br>
       
            </div>
            <div id="layoutSidenav_content">
                
                @yield('content')

                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                <!-- </footer>
            </div>
        </div> -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('Client/dist/js/scripts.js')}}"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
        <!-- <script src="{{asset('Admin/dist/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('Admin/dist/assets/demo/chart-bar-demo.js')}}"></script> -->
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <!-- <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('Client/dist/assets/demo/datatables-demo.js')}}"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
                function myFunction() {
                var input, filter, ul, li, a, i, txtValue;
                input = document.getElementById("txtLeftSearch");
                
                filter = input.value.toUpperCase();
                // alert('testing');
                ul = document.getElementById("myUL");
                li = ul.getElementsByTagName("li");
                ul.style.display = "block";
                if(filter =="")
                {
                    ul.style.display = "none";
                }
                for (i = 0; i < li.length; i++) {
                    a = li[i].getElementsByTagName("a")[0];
                    txtValue = a.textContent || a.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = "";
                    } else {
                        li[i].style.display = "none";
                    }
                }
            }
        </script>

    </body>
</html>
