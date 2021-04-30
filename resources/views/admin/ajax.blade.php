@extends('layouts.admin')

@section('content')







<div class="animated fadeIn">
  <div class="row">
    <div class="col-md-10">
      <button type="button" name="button" id="ShowUser">Show All Data</button>
    </div>
  </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8 card_top_title">
                            <i class="fa fa-gg-circle"></i> All User Information
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{url('admin/user/add')}}" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-plus-circle"></i> Add User</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                  <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>User Role</th>
                        <th>Manage</th>
                      </tr>
                    </thead>
                    <tbody id="tbody">

                    <!--  -->
                    </tbody>
                  </table>
                </div>




                <div class="card-footer">
                    <a href="#" class="btn btn-sm btn-dark" id="dataUser"></a>
                    <a href="#" class="btn btn-sm btn-success">Excel</a>
                    <a href="#" class="btn btn-sm btn-info">CSV</a>
                    <a href="#" class="btn btn-sm btn-danger">PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')

<script>

   jQuery(document).ready(function() {

           jQuery('#ShowUser').click(function() {
             jQuery.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
           }
       });
       jQuery.ajax({

         url:"{{ url('admin/user') }}",
         type:"GET",
         dataType:"JSON",
         success: function (data){
           jQuery('table tbody').empty();

           jQuery.each(data , function(key , value) {

             var html =   '<td>'+value.name+'</td>'+
                         '<td>'+value.email+'</td>'+
                         '<td>'+value.phone+'</td>';

              jQuery('#tbody').append(html);
           });
          //  $.each(data, function(key, value){
          //     $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.name + '</option>');
          // });
         }
       });





     })

   })

</script>
@endpush

@endsection
