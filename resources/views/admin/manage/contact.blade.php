@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="post" action="{{url('admin/manage/update/contact')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="card-header">
                      <div class="row">
                          <div class="col-md-8 card_top_title">
                              <i class="fa fa-gg-circle"></i> Update Contact Information
                          </div>
                          <div class="col-md-4 text-right">
                              <a href="{{url('admin/manage/basic')}}" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-th"></i> Basic Information</a>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                    @if(Session::has('success'))
                      <script>
                          swal({title: "Successfully!", text: "update contact information!", icon: "success", timer:5000});
                      </script>
                    @endif
                    @if(Session::has('error'))
                      <script>
                          swal({title: "Opps!", text: "Contact information update failed!", icon: "error", timer:5000});
                      </script>
                    @endif
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-phone"></i></div>
                          </div>
                          <input type="text" class="form-control" name="phone1" value="{{$data->ci_phone1}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-phone"></i></div>
                          </div>
                          <input type="text" class="form-control" name="phone2" value="{{$data->ci_phone2}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-phone"></i></div>
                          </div>
                          <input type="text" class="form-control" name="phone3" value="{{$data->ci_phone3}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-phone"></i></div>
                          </div>
                          <input type="text" class="form-control" name="phone4" value="{{$data->ci_phone4}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                          </div>
                          <input type="text" class="form-control" name="email1" value="{{$data->ci_email1}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                          </div>
                          <input type="text" class="form-control" name="email2" value="{{$data->ci_email2}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                          </div>
                          <input type="text" class="form-control" name="email3" value="{{$data->ci_email3}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                          </div>
                          <input type="text" class="form-control" name="email4" value="{{$data->ci_email4}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-home"></i></div>
                          </div>
                          <textarea class="form-control" name="add1" rows="2">{{$data->ci_add1}}</textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-home"></i></div>
                          </div>
                          <textarea class="form-control" name="add2" rows="2">{{$data->ci_add2}}</textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-home"></i></div>
                          </div>
                          <textarea class="form-control" name="add3" rows="2">{{$data->ci_add3}}</textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-home"></i></div>
                          </div>
                          <textarea class="form-control" name="add4" rows="2">{{$data->ci_add4}}</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-center">
                      <button type="submit" class="btn btn-sm btn-success sub_buttton">UPDATE</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
