@extends('layouts.index')

@section('content')
<div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Edit data Dosen</h3>
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
                      <form method="POST" action="{{ route('dosenUpdate', [$dosen->nik]) }}">
                          @csrf
                          @method('PUT')
                        <div class="form-group">
                              <label for="nik">NIK</label>
                              <input
                                type="text"
                                class="form-control"
                                id="nik"
                                name="nik"
                                placeholder="Enter nik"
                                value="{{ $dosen->nik }}"
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
                                autofocus
                                value="{{ $dosen->name }}"
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
                                value="{{ $dosen->birth_date }}"
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
                                value="{{ $dosen->email }}"
                              />
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