@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="post" action="{{url('admin/banner/submit')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="card-header">
                      <div class="row">
                          <div class="col-md-8 card_top_title">
                              <i class="fa fa-gg-circle"></i> Upload Banner Information
                          </div>
                          <div class="col-md-4 text-right">
                              <a href="{{url('admin/banner')}}" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-th"></i> All Banner</a>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                    @if(Session::has('success'))
                      <script>
                          swal({title: "Successfully!", text: "upload banner information!", icon: "success", timer:5000});
                      </script>
                    @endif
                    @if(Session::has('error'))
                      <script>
                          swal({title: "Opps!", text: "banner upload failed!", icon: "error", timer:5000});
                      </script>
                    @endif
                    <div class="form-group row form_group{{$errors->has('title') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Banner Title:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="title" value="{{old('title')}}">
                        @if ($errors->has('title'))
                            <span class="error">{{ $errors->first('title') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Banner Subtitle:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="subtitle" value="{{old('subtitle')}}">
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Banner Button:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="btn" value="{{old('btn')}}">
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Banner Button URL:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="url" value="{{old('url')}}">
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Banner Image:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <input type="file" name="pic">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-center">
                      <button type="submit" class="btn btn-sm btn-success sub_buttton">UPLOAD</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
