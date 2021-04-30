@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="post" action="{{url('admin/manage/update/basic')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="card-header">
                      <div class="row">
                          <div class="col-md-8 card_top_title">
                              <i class="fa fa-gg-circle"></i> Basic Information
                          </div>
                          <div class="col-md-4 text-right">
                              <a href="{{url('admin/manage/social')}}" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-th"></i> Social Media</a>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                    @if(Session::has('success'))
                      <script>
                          swal({title: "Successfully!", text: "update basic information!", icon: "success", timer:5000});
                      </script>
                    @endif
                    @if(Session::has('error'))
                      <script>
                          swal({title: "Opps!", text: "basic information update failed!", icon: "error", timer:5000});
                      </script>
                    @endif
                    <div class="form-group row form_group{{$errors->has('title') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Title:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="title" value="{{$data->basic_title}}">
                        @if ($errors->has('title'))
                            <span class="error">{{ $errors->first('title') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Subtitle:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="subtitle" value="{{$data->basic_subtitle}}">
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Logo:<span class="req_star">*</span></label>
                      <div class="col-sm-4">
                        <input type="file" name="logo">
                      </div>
                      <div class="col-md-2">
                          @if($data->basic_logo!='')
                            <img src="{{asset('uploads/'.$data->basic_logo)}}" class="rounded img_100"/>
                          @else
                            <img src="{{asset('uploads/avatar.png')}}" class="rounded img_100"/>
                          @endif
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Favicon:<span class="req_star">*</span></label>
                      <div class="col-sm-4">
                        <input type="file" name="favicon">
                      </div>
                      <div class="col-md-1">
                          @if($data->basic_favicon!='')
                            <img src="{{asset('uploads/'.$data->basic_favicon)}}" class="rounded img_50"/>
                          @else
                            <img src="{{asset('uploads/avatar.png')}}" class="rounded img_50"/>
                          @endif
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Footer Logo:<span class="req_star">*</span></label>
                      <div class="col-sm-4">
                        <input type="file" name="flogo">
                      </div>
                      <div class="col-md-2">
                          @if($data->basic_flogo!='')
                            <img src="{{asset('uploads/'.$data->basic_flogo)}}" class="rounded img_100"/>
                          @else
                            <img src="{{asset('uploads/avatar.png')}}" class="rounded img_100"/>
                          @endif
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
