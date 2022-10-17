@extends('dashboard.layouts.master')
@extends('dashboard.layouts.sidebar')
@extends('dashboard.layouts.wrap')
@extends('dashboard.layouts.navbar')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-auto">
              <p class="mb-0">Profile</p>

              <div class="justify-content-end ms-auto ">
                <div class="input-group">

                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Settings
                  </button>

                </div>

            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">User Information</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Logo</label><br>
                      <img width="100px" src="{{ asset('landing/img/logo/'.$all->logo) }}" alt="">
                    </div>
                  </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Name</label>
                  <input class="form-control" value="{{ $all->name }}" type="text" disabled>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Email</label>
                  <input class="form-control" value="{{ $all->email }}" type="text" disabled>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Username</label>
                  <input class="form-control" value="{{ $all->no_hp }}" type="text" disabled>
                </div>
              </div>



              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">No Hp</label>
                  <input class="form-control" value="{{ $all->no_hp }}" type="text" disabled>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal Settings</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('/home/profile/update/') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $all->id }}">

                <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Logo</label>
                      <input type="file" name="image" id="">
                    </div>
                  </div>
                <div class="md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nama</label>
                      <input class="form-control" name="name" value="{{ $all->name }}" type="text" required>
                    </div>
                  </div>

                  <div class="md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Email</label>
                      <input class="form-control" name="email" value="{{ $all->email }}" type="text" required>
                    </div>
                  </div>

                  <div class="md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Username</label>
                      <input class="form-control" name="username" value="{{ $all->username }}" type="text" required>
                    </div>
                  </div>

                  {{-- <div class="md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Password</label>
                      <input class="form-control" name="password" value="" type="text" required>
                    </div>
                  </div> --}}

                  <div class="md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">No Hp</label>
                      <input class="form-control" name="no_hp" value="{{ $all->no_hp }}" type="text" required>
                    </div>
                  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@endsection

@extends('dashboard.layouts.footer')
@extends('dashboard.layouts.endwrap')
