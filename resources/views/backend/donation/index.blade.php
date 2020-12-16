@extends('backend.layouts.master')

@section('main-content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4" style="margin: auto;">
     <div class="row">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-left">Donations</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="order-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Donor First Name</th>
              <th>Donor Last Name</th>
              <th>Donor Email</th>
              <th>Donor Phone Number</th>
              <th>Project Name</th>
              <th>Amount</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Donor First Name</th>
              <th>Donor Last Name</th>
              <th>Donor Email</th>
              <th>Donor Phone Number</th>
              <th>Project Name</th>
              <th>Amount</th>
              </tr>
          </tfoot>
          <tbody>
                <tr> 
                @foreach($donations as $key => $donation)
                    <td>{{ $donation->donor_firstname ?? '' }}</td>
                    <td>{{ $donation->donor_lastname?? '' }}</td>
                    <td>{{ $donation->donor_email ?? '' }}</td>
                    <td>{{ $donation->donor_phonenumber ?? '' }}</td>
                    <td>{{ $donation->project_name ?? '' }}</td>
                    <td>{{ $donation->amount_donated ?? '' }}</td>
                </tr> 
                @endforeach 
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection

@push('styles')
  <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <style>
      div.dataTables_wrapper div.dataTables_paginate{
          display: none;
      }
  </style>
@endpush

@push('scripts')

  <!-- Page level plugins -->
  <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
  <script>
      
      $('#order-dataTable').DataTable( {
            "columnDefs":[
                {
                    "orderable":false,
                    "targets":[8]
                }
            ]
        } );

        // Sweet alert

        function deleteData(id){
            
        }
  </script>
  <script>
      $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          $('.dltBtn').click(function(e){
            var form=$(this).closest('form');
              var dataID=$(this).data('id');
              // alert(dataID);
              e.preventDefault();
              swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                       form.submit();
                    } else {
                        swal("Your data is safe!");
                    }
                });
          })
      })
  </script>
@endpush