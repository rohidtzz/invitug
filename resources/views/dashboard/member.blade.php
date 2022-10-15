@extends('dashboard.layouts.master')
@extends('dashboard.layouts.sidebar')
@extends('dashboard.layouts.wrap')
@extends('dashboard.layouts.navbar')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">

            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                  <h3 class="mb-0">Member Table</h3>
                  <div class="justify-content-end ms-auto ">
                    <div class="input-group">

                        @if(Auth()->user()->status == "aktif")
                        <a href="{{ url('/home/member/ikut') }}" type="button" onclick="return confirm('yakin ikut?');" class="btn btn-success" >
                            ikut
                          </a>
                            <a href="{{ url('/home/member/tidakikut') }}" type="button" onclick="return confirm('yakin tidak ikut?');" class="btn btn-danger" >
                            Tidak ikut
                          </a>
                          @elseif (Auth()->user()->status == "ikut")
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambahkan Member
                          </button>
                          @elseif (Auth()->user()->status == "tidakikut")
                          <span class="btn btn-danger" >
                            {{ substr(Auth()->user()->name,24) }} Tidak ikut
                          </span>
                          @else


                        @endif



                    </div>
                </div>
                </div>
              </div>
              <br>

              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal Tambahkan Member</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('/home/member/create') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nama</label>
                              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                              <div id="emailHelp" class="form-text"></div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No Hp</label>
                                <input type="number" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                <div id="emailHelp" class="form-text"></div>
                              </div>


                            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>



          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                    <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">No Hp</th>
                    <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1
                    @endphp
                @foreach ($all as $a)
                  <tr>
                    <td>
                      <div class="">
                        <div class="text-center">
                            {{ $no++ }}
                        </div>



                    </td>
                    <td>
                        <div class="d-flex flex-column  justify-content-center">
                            <h6 class="mb-0 text-sm text-center">{{ $a->name }}</h6>
                          </div>
                    </td>

                    <td>
                        <div class="d-flex flex-column  justify-content-center">
                            <h6 class="mb-0 text-sm text-center">{{ $a->no_hp }}</h6>
                          </div>
                    </td>


                    <td class="text-center align-middle">
                      <a type="button" data-id="{{$a->id}}"  class="text-primary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#exampleModa-{{ $a->id }}" >
                        Edit
                      </a>






                      <a style="padding-left:10px;"  onclick="return confirm('are you sure?')" href="{{ url('/home/member/delete/'.$a->id) }}" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Delete
                      </a>
                    </td>

                    @foreach ($all as $al )


                    <div class="modal fade" id="exampleModa-{{ $al->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal Edit Member</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ url('/home/member/update') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $al->id }}">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                                        <input type="text" name="name" value="{{ $al->name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                        <div id="emailHelp" class="form-text"></div>
                                      </div>

                                      <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">No Hp</label>
                                          <input type="number" name="no_hp" value="{{ $al->no_hp }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                          <div id="emailHelp" class="form-text"></div>
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
                      @endforeach

                  </tr>
                @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>




@endsection

@extends('dashboard.layouts.footer')
@extends('dashboard.layouts.endwrap')
