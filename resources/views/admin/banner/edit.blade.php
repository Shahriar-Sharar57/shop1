@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="post" action="{{url('admin/product/main/category/update')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="card-header">
                      <div class="row">
                          <div class="col-md-8 card_top_title">
                              <i class="fa fa-gg-circle"></i> Update Banner Information
                          </div>
                          <div class="col-md-4 text-right">
                              <a href="{{url('admin/banner')}}" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-th"></i> All Banner</a>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                    @if(Session::has('success'))
                      <script>
                          swal({title: "Successfully!", text: "update banner information!", icon: "success", timer:5000});
                      </script>
                    @endif
                    @if(Session::has('error'))
                      <script>
                          swal({title: "Opps!", text: "banner update failed!", icon: "error", timer:5000});
                      </script>
                    @endif
                    <div class="form-group row form_group{{$errors->has('title') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Banner Title:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <input type="hidden" name="id" value="{{$data->ban_id}}"/>
                        <input type="hidden" name="slug" value="{{$data->ban_slug}}"/>
                        <input type="text" class="form-control" name="title" value="{{$data->ban_title}}">
                        @if ($errors->has('title'))
                            <span class="error">{{ $errors->first('title') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Banner Subtitle:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="subtitle" value="{{$data->ban_subtitle}}">
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Banner Button:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="btn" value="{{$data->ban_button}}">
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Banner Button URL:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="url" value="{{$data->ban_url}}">
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Banner Image:<span class="req_star">*</span></label>
                      <div class="col-sm-4">
                        <input type="file" name="pic">
                      </div>
                      <div class="col-md-2">
                        @if($data->ban_image!='')
                          <img height="100" width="100" src="{{asset('uploads/'.$data->ban_image)}}" class="img-thumbail"/>
                        @else
                          <img height="100" width="100" src="{{asset('uploads/avatar.jpg')}}"/>
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
