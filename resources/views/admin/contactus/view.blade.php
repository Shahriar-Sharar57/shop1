@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8 card_top_title">
                            <i class="fa fa-gg-circle"></i> View Contact Information
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{url('admin/contactus')}}" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-th"></i> All Message</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-10">
                          <table class="table table-bordered table-hover table-striped view_custom_table">
                              <tr>
                                  <td>Name</td>
                                  <td>:</td>
                                  <td>{{$data->conus_name}}</td>
                              </tr>
                              <tr>
                                  <td>Phone</td>
                                  <td>:</td>
                                  <td>{{$data->conus_phone}}</td>
                              </tr>
                              <tr>
                                  <td>Email</td>
                                  <td>:</td>
                                  <td>{{$data->conus_email}}</td>
                              </tr>
                              <tr>
                                  <td>Subject</td>
                                  <td>:</td>
                                  <td>{{$data->conus_subject}}</td>
                              </tr>
                              <tr>
                                  <td>Message</td>
                                  <td>:</td>
                                  <td>{{$data->conus_message}}</td>
                              </tr>
                              <tr>
                                  <td>Message Time</td>
                                  <td>:</td>
                                  <td>{{$data->created_at->format('d M Y | h:i:s A')}}</td>
                              </tr>
                          </table>
                      </div>
                      <div class="col-md-1"></div>
                  </div>
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
