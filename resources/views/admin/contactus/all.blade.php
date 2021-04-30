@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8 card_top_title">
                            <i class="fa fa-gg-circle"></i> All Contact Information
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="#" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-plus-circle"></i> Demo</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  @if(Session::has('success_soft'))
                    <script>
                        swal({title: "Successfully!", text: "delete contact information!", icon: "success", timer:5000});
                    </script>
                  @endif
                  @if(Session::has('error'))
                    <script>
                        swal({title: "Opps!", text: "contact information delete failed!", icon: "error", timer:5000});
                    </script>
                  @endif
                  <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                      <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($all as $data)
                      <tr>
                        <td>{{Str::words($data->conus_name,3)}}</td>
                        <td>{{$data->conus_phone}}</td>
                        <td>{{$data->conus_email}}</td>
                        <td>{{Str::words($data->conus_subject,3)}}</td>
                        <td>
                            <a href="{{url('admin/contactus/view/'.$data->conus_slug)}}" class="text-success"><i class="fa fa-plus-square fa-lg"></i></a>
                            <a href="{{url('admin/contactus/softdelete/'.$data->conus_slug)}}" class="text-danger"><i class="fa fa-trash fa-lg"></i></a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-sm btn-dark">Print</a>
                    <a href="#" class="btn btn-sm btn-success">Excel</a>
                    <a href="#" class="btn btn-sm btn-info">CSV</a>
                    <a href="#" class="btn btn-sm btn-danger">PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
