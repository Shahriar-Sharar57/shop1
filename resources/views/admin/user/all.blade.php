@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8 card_top_title">
                            <i class="fa fa-gg-circle"></i> All User Information
                        </div>
                        <div class="col-md-4 text-right print_none">
                            <a href="{{url('admin/user/add')}}" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-plus-circle"></i> Add User</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  <table id="creative" class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>User Role</th>
                        <th>Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($allUser as $data)
                      <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td></td>
                        <td>{{$data->userRole->role_name}}</td>
                        <td>
                            <a href="{{url('admin/user/view/'.$data->id)}}" class="text-success"><i class="fa fa-plus-square fa-lg"></i></a>
                            <a href="#" class="text-info"><i class="fa fa-pencil-square fa-lg"></i></a>
                            <a href="#" class="text-danger"><i class="fa fa-trash fa-lg"></i></a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="card-footer print_none">
                    <a href="#" onclick="window.print()" class="btn btn-sm btn-dark">Print</a>
                    <a href="{{url('admin/user/excel')}}" class="btn btn-sm btn-success">Excel</a>
                    <a href="{{url('admin/user/pdf')}}" class="btn btn-sm btn-danger">PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
