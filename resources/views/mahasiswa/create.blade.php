@extends('layouts.index')

@section('content')
<div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Manage data Dosen</h3>
                <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Halaman 1</h6>
              </div>
            </div>
            <div class="card">
                  <div class="card-header">
                    
                    </div>
                  </div>
                  <div class="card-body">
                    <!-- Modal -->
                    <div class="row">
                      <form method="POST" action="{{ route('mahasiswaStore') }}" enctype="multipart/form-data">

                          @csrf
                        <div class="form-group">
                              <label for="nrp">NRP</label>
                              <input
                                type="text"
                                class="form-control"
                                id="nrp"
                                name="nrp"
                                placeholder="Enter nrp"
                                required
                              />
                            </div>
                        
                        <div class="form-group">
                              <label for="name">Name</label>
                              <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                placeholder="Enter Name"
                                required
                              />
                            </div>
                        
                        <div class="form-group">
                              <label for="birth_date">Birth Date</label>
                              <input
                                type="date"
                                class="form-control"
                                id="birth_date"
                                name="birth_date"
                                placeholder="Enter Birth Date"
                                required
                              />
                            </div>

                            <div class="form-group">
                              <label for="profile_picture">Profile Picture</label>
                              <input
                                type="file"
                                class="form-control"
                                id="profile_picture"
                                name="profile_picture"
                                accept="image/jpg,image/png,image/jpeg"
                              />
                            </div>
                        
                        <div class="form-group">
                              <label for="email">Email Address</label>
                              <input
                                type="email"
                                class="form-control"
                                id="emai"
                                name="email"
                                required
                                placeholder="Enter Email"
                              />
                            </div>

                            <div class="form-group">
                              <label for="address">Address</label>
                              <input
                                type="address"
                                class="form-control"
                                id="address"
                                name="address"
                                required
                                placeholder="Enter address"
                              />
                            </div>

                            <div class="form-group">
                              <label for="phone">phone number</label>
                              <input
                                type="phone"
                                class="form-control"
                                id="phone"
                                name="phone"
                                required
                                placeholder="Enter phone"
                              />
                            </div>
                        
                        <div class="form-group">
                          <label for="dosenWali">Dosen Wali</label>
                          <select name="dosen_nik" class="form-control">
                            @foreach ($dosens as $dosen )
                            <option value="{{ $dosen->nik }}">{{ $dosen->name }}</option>
                            @endforeach
                          </select>

                        </div>


                        <div class="card-action">
                          <input type="submit" class="btn btn-success">
                          <input type="reset" value="cancel" class="btn btn-danger">
                        </div>
                      </form>
                    </div>
                </div>
          </div>
        </div>
@endsection('content')

@section('ExtraCss')

@endsection

@section('ExtraJs')

@endsection