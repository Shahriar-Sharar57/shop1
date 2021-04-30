@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="post" action="{{url('admin/product/category/update')}}" enctype="multipart/form-all">
                  @csrf
                  <div class="card-header">
                      <div class="row">
                          <div class="col-md-8 card_top_title">
                              <i class="fa fa-gg-circle"></i> Update Product category Information
                          </div>
                          <div class="col-md-4 text-right">
                              <a href="{{url('admin/product/category')}}" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-th"></i> All Product Category</a>
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
                          swal({title: "Opps!", text: "category update failed!", icon: "error", timer:5000});
                      </script>
                    @endif
                    <div class="form-group row form_group{{$errors->has('title') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">caterory Title:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="pc_name" value="{{$data->pc_name}}">
                        <input type="hidden" name="id" value="{{$data->pc_id}}"/>
                        @if ($errors->has('pc_name'))
                            <span class="error">{{ $errors->first('pc_name') }}</span>
                        @endif
                      </div>
                    </div>



                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Product category Image:<span class="req_star">*</span></label>
                      <div class="col-sm-4">
                        <input type="file" name="pic">
                      </div>
                      <div class="col-md-2">
                        @if($data->pc_image!='')
                          <img height="100" width="100" src="{{asset('uploads/'.$data->pc_image)}}" class="img-thumbail"/>
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
