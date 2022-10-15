@extends('dashboard.layouts.master')
@extends('dashboard.layouts.sidebar')
@extends('dashboard.layouts.wrap')
@extends('dashboard.layouts.navbar')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Sezione Ikut</p>
                  <h5 class="font-weight-bolder">

                    {{ $ikut }}

                  </h5>

                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                  <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Sezione Tidak Ikut</p>
                  <h5 class="font-weight-bolder">
                    {{ $tidakikut }}

                  </h5>
                  {{-- <p class="mb-0">
                    <span class="text-success text-sm font-weight-bolder">+3%</span>
                    since last week
                  </p> --}}
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                  <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Sezione</p>
                  <h5 class="font-weight-bolder">

                    {{ $total }}
                  </h5>
                  {{-- <p class="mb-0">
                    <span class="text-danger text-sm font-weight-bolder">-2%</span>
                    since last quarter
                  </p> --}}
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                  <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Member ikut</p>
                  <h5 class="font-weight-bolder">

                    {{$totalikut}}
                  </h5>
                  {{-- <p class="mb-0">
                    <span class="text-danger text-sm font-weight-bolder">-2%</span>
                    since last quarter
                  </p> --}}
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-info shadow-success text-center rounded-circle">
                  <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection

{{-- @extends('dashboard.layouts.footer') --}}
@extends('dashboard.layouts.endwrap')

