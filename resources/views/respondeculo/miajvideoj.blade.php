@extends('layouts/_indexRespondecx')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <form class="d-flex align-items-center mb-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control border" id="dash-daterange">
                                        <span class="input-group-text bg-blue border-blue text-white">
                                                    <i class="mdi mdi-calendar-range"></i>
                                                </span>
                                    </div>
                                    <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-2">
                                        <i class="mdi mdi-autorenew"></i>
                                    </a>
                                    <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-1">
                                        <i class="mdi mdi-filter-variant"></i>
                                    </a>
                                </form>
                            </div>
                            <h4 class="page-title">
                                Ilaro por respondeculoj
                            </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card">
                            <div style="background-color: #38414a" class="card-body ">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-primary border-primary border text-center">
                                            <i class="fa fa-book font-22 avatar-title text-primary mt-3"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end">
                                            <h3 style="color: #fff !important;" class="text-dark mt-1"><span data-plugin="counterup text-white">{{$postsCount}}</span></h3>
                                            <p style="color: #fff !important;" class="text-muted mb-1 text-truncate text-white">Afiŝoj</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div>
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-success border-success border text-center">
                                            <i class="fa fa-video font-22 avatar-title text-success mt-3"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end">
                                            <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$UseVideojCount}}</span></h3>
                                            <p class="text-muted mb-1 text-truncate">videoj</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div>
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-info border-info border text-center">
                                            <i class="fa fa-calendar font-22 avatar-title text-info mt-3"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end">
                                            <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$UserAfishoj}}</span></h3>
                                            <p class="text-muted mb-1 text-truncate">Agadoj</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div>
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card">
                            <div style="background-color: #38414a" class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-warning border-warning border text-center justify-content-center ">
                                            <i class="fa fa-users mt-3 font-22 avatar-title text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end">
                                            <h3 style="color: #fff !important;" class="text-dark mt-1"><span data-plugin="counterup">{{$admin}}</span></h3>
                                            <p style="color: #fff !important;" class="text-muted mb-1 text-truncate">Respondeculoj</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div>
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->


                <!-- end row -->


                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <h4 class="my-4">
                            <a href="/videoj">Aldoni novan</a>
                            |
                            Miaj videoj
                        </h4>
                        <div class="row">
                            @foreach ($UseVideoj as $UseVideo)
                                <div class="col-lg-6">
                                    <div class="card mb-3">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <video  class="agado" width="100%" height="" controls>
                                                    <source src="{{ asset('storage/actuality_photos/'.$UseVideo->videos)}}" type="video/mp4">
                                                    <source src="movie.ogg" type="video/ogg">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{$UseVideo->title}}</h5>
                                                    <p class="card-text">
                                                        @php
                                                            $string = $UseVideo->desc;
                                                            $string = strip_tags($string);
                                                            if (strlen($string) > 100) {

                                                                // truncate string
                                                                $stringCut = substr($string, 0, 100);
                                                                $endPoint = strrpos($stringCut, ' ');

                                                                //if the string doesn't contain any space then it will cut without word basis.
                                                                $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);

                                                            }
                                                            echo $string;
                                                        @endphp
                                                    </p>

                                                    <p class="card-text"><small class="text-muted"></small></p>
                                                    <!-- make edit and delete icon button -->
                                                    <span class="d-flex mx-3">
                                                     <div class="d-flex ml-3">
                                            <a   onclick="return confirm('Chu vi certas?')" href="{{url('delete'.'/'.$UseVideo->id)}}" class="btn btn-secondary mt-2 mr-2" style="margin-left:1px;"><i style="color:#e95f71" class="fa fa-trash"></i>forigi</a>
                                            <a  href="/update_video/{{$UseVideo->id}}"  class="btn btn-warning mt-2 text-white" style="margin-left:1px;"><i style="color: red" class="fa fa-edit"></i>Modifii</a>
                                            </div>
                                                <!--<form style="margin-left: 10px" class="ml-3" action="" method="POST">
                                                    @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form> -->
                                                </span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                                <div class="row d-flex justify-content-center"><?php echo $UseVideoj->appends(Request::all())->links(); ?></div>


                        </div>

                    </div>
                </div>

            </div> <!-- container -->

        </div> <!-- content -->
@endsection

