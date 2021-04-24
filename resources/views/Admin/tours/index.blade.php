@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> Tours </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.tours')}}">Tours</a>
                                </li>
{{--                                <li class="breadcrumb-item active"><a href="{{route('admin.hotels')}}">اللغات</a>--}}
{{--                                </li>--}}
                                <li class="breadcrumb-item active"><a href="{{route('admin.tours.create')}}">Add Tours</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Tours</h4>
                                    <a class="heading-elements-toggle">
                                        <i class="la la-ellipsis-v font-medium-3"></i>
                                    </a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered ">
                                            <thead>
                                            <tr>
                                                <th>Tour Name</th>
                                                <th>Tour Image</th>
                                                <th>Tour Price</th>
                                                <th>Tour Details</th>
                                                <th>Tour Discount</th>
                                                <th>Tour Address</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Operations</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                    @isset($tours)
                                        @foreach($tours as $tour)
                                            <tr>
                                                <td>{{ $tour->tour_name}}</td>
                                                <td><img style="width: 150px; height: 120px" src="../../Images/Tours/{{ $tour['tour_image']}}"></td>
                                                <td>{{$tour ->tour_price}}</td>
                                                <td>{{$tour ->tour_details}}</td>
                                                <td>{{$tour ->tour_discount}}</td>
                                                <td>{{$tour->tour_address}}</td>
                                                <td>{{$tour->start_date}}</td>
                                                <td>{{$tour->end_date}}</td>
                                                <td>
                                                    <div class="btn-group" role="group"
                                                         aria-label="Basic example">
                                                        <a href="{{route('admin.tours.edit',$tour->id)}}"
                                                           class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Update</a>

                                                        <a href="{{route('admin.tours.delete',$tour->id)}}"
                                                           class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset

                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
