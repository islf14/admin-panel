@extends('layouts.admin')

@section('link')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Example</h4>
                            <form class="repeater" enctype="multipart/form-data" role="form" method="POST" action="{{ route('archivo.store') }}">
                                @csrf
                                <div data-repeater-list="group_a">
                                    <div data-repeater-item class="row">
                                        <div  class="form-group col-lg-4">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="name" class="form-control"/>
                                        </div>

                                        {{-- <div  class="form-group col-lg-2">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" class="form-control"/>
                                        </div> --}}

                                        {{-- <div  class="form-group col-lg-2">
                                            <label for="subject">Subject</label>
                                            <input type="text" id="subject" class="form-control"/>
                                        </div> --}}

                                        <div class="form-group col-lg-6">
                                            <label for="archivo">Archivo</label>
                                            <input type="file" class="form-control-file" id="archivo" name="archivo">
                                        </div>

                                        {{-- <div class="form-group col-lg-2">
                                            <label for="message">Message</label>
                                            <textarea id="message" class="form-control"></textarea>
                                        </div> --}}
                                        
                                        <div class="col-lg-2 align-self-center">
                                            <input data-repeater-delete type="button" class="btn btn-primary btn-block" value="Delete"/>
                                        </div>
                                    </div>
                                    
                                </div>
                                <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
    

            
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection

@section('script')
    <!-- Plugins js -->
    {{-- <script src="{{asset('assets/libs/dropzone/min/dropzone.min.js')}}"></script> --}}

    <!-- form repeater js -->
        <script src="{{asset('assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>

        <script src="{{asset('assets/js/pages/form-repeater.int.js')}}"></script>

@endsection