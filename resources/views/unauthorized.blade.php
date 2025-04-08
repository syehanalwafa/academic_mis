@extends('layouts.index')

@section('content')
<div class="container">
          <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
              <div>
                <h3 class="fw-bold mb-3">Unauthorized Access</h3>
              </div>
              <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <p>You are Unauthorized to access this  page.</p>
                        <a href="{{ route('dashboard')}}" class="status">
                          Back to Dashboard
                        </a>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
</div>
@endsection('content')

@section('ExtraCss')

@endsection

@section('ExtraJs')
<script src="{{ asset('assets/js/plugin/sweetalert2/sweetalert2.all.min.js') }}"></script>

<script>
    $(".edit-dosen").click(function() {
      window.location = $(this).data("url");
    });

  $(".delete-dosen").click(function(e) {
    e.preventDefault();
    Swal.fire({
      title:"Are You Sure Wnat to delete this data?",
      showCancelButton:true,
      confirmButtonText:"Yes"
    }).then((result) => {
        if(result.isConfirmed) {
          $(e.target).closest("form").submit()
        }
    })
  });
@if(session('success'))
  $.notify({
    message: "{{ session('success') }}"
  }, {
    delay:5000,
    type:info
  })
@endif
</script>
@endsection
