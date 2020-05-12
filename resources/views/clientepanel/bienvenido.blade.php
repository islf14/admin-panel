@extends('layouts.cliente')

@section('link')

@endsection

@section('content')

  <div class="page-content">
      <div class="container-fluid">


          <!-- start page title -->
          <div class="row">
              <div class="col-12">
                  <div class="page-title-box d-flex align-items-center justify-content-between">
                      <h4 class="mb-0 font-size-18">Inicio</h4>

                      <div class="page-title-right">
                          <ol class="breadcrumb m-0">
                              <li class="breadcrumb-item"><a href="javascript: void(0);">Inicio</a></li>
                              <li class="breadcrumb-item active">Bienvenido</li>
                          </ol>
                      </div>

                  </div>
              </div>
          </div>
          <!-- end page title -->

          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="lnb">
                              <div class="lnb-new-schedule text-center ml-sm-3">
                                  {{-- <button id="btn-new-schedule" type="button" class="btn btn-primary lnb-new-schedule-btn" data-toggle="modal">New schedule</button> --}}
                                  <h2>Bienvenido</h2>
                              </div>
                              <div id="calendarList" class="lnb-calendars-d1 mt-4 mr-sm-0 mb-4"></div>
                              
                              
                              {{-- <div id="calendar" style="height: 800px;"></div> --}}
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- end row -->
          
      </div> <!-- container-fluid -->
  </div>

@endsection

@section('script')


@endsection