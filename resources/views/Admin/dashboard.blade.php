<!doctype html>
<html lang="en">

<head>
    @include('Admin.theme.css')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('Admin.theme.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            
            <!--  Header End -->
            <div class="container-fluid" style="padding-top:0">
                <!--  Row 1 -->
                <div class="row">
                    <div class="col-lg-8 d-flex align-items-strech">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
                                    <div class="mb-3 mb-sm-0">
                                        <h5 class="card-title fw-semibold">Your Dashboard</h5>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                
                                    <h1 class="card-title fw-semibold">Welcome Admin
                                
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items order-1 order-lg-2"
                                    style="float:right;   ">
                                    <img src="{{url('assets/images/admin-dash.jpg')}}" height="350px" alt="Sample image">
                                </div>
                                <div class="col-lg-12">
                                <!-- Monthly Earnings -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row alig n-items-start">
                                            <div class="col-8">
                                                <h5 class="card-title mb-9 fw-semibold"> Total No. Sci-fiction </h5>
                                                <h4 class="fw-semibold mb-3"><?php echo $sciFiction;?></h4>
                                                <div class="d-flex align-items-center pb-1">


                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-end">
                                               

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <!-- Monthly Earnings -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row alig n-items-start">
                                            <div class="col-8">
                                                <h5 class="card-title mb-9 fw-semibold"> Total No. of books whose genre is fiction </h5>
                                                <h4 class="fw-semibold mb-3"><?php echo $fiction;?></h4>
                                                <div class="d-flex align-items-center pb-1">


                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-end">
                                                

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <!-- Monthly Earnings -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row alig n-items-start">
                                            <div class="col-8">
                                                <h5 class="card-title mb-9 fw-semibold"> Total No. Non-fiction </h5>
                                                <h4 class="fw-semibold mb-3"><?php echo $nonFiction;?></h4>
                                                <div class="d-flex align-items-center pb-1">


                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-end">
                                                

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Yearly Breakup -->
                                <div class="card overflow-hidden">
                                    <div class="card-body p-4">
                                        <h5 class="card-title mb-9 fw-semibold">Total BOOKS</h5>
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="fw-semibold mb-3"><?php echo $Books;?></h4>
                                                <div class="d-flex align-items-center mb-3">

                                                    <p class="text-dark me-1 fs-3 mb-0"></p>
                                                    <p class="fs-3 mb-0"></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-4">

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-center">
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <!-- Monthly Earnings -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row alig n-items-start">
                                            <div class="col-8">
                                                <h5 class="card-title mb-9 fw-semibold"> Total Users </h5>
                                                <h4 class="fw-semibold mb-3"><?php echo $User;?></h4>
                                                <div class="d-flex align-items-center pb-1">


                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-end">
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id=""></div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    @include('Admin.theme.script')
</body>

</html>