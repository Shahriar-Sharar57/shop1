@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8 card_top_title">
                            <i class="fa fa-gg-circle"></i> View Banner Information
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{url('admin/banner')}}" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-th"></i> All Banner</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-10">
                          <table class="table table-bordered table-hover table-striped view_custom_table">
                              <tr>
                                  <td>Banner Title</td>
                                  <td>:</td>
                                  <td>{{$data->ban_title}}</td>
                              </tr>
                              <tr>
                                  <td>Banner Subtitle</td>
                                  <td>:</td>
                                  <td>{{$data->ban_subtitle}}</td>
                              </tr>
                              <tr>
                                  <td>Banner Button</td>
                                  <td>:</td>
                                  <td>{{$data->ban_button}}</td>
                              </tr>
                              <tr>
                                  <td>Banner Button URL</td>
                                  <td>:</td>
                                  <td>{{$data->ban_url}}</td>
                              </tr>
                              <tr>
                                  <td>Registration</td>
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
