@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="post" action="{{url('admin/product/main/category/insert')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="card-header">
                      <div class="row">
                          <div class="col-md-8 card_top_title">
                              <i class="fa fa-gg-circle"></i> Upload product Information
                          </div>
                          <div class="col-md-4 text-right">
                              <a href="#" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-th"></i> All Product</a>
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
                    <div class="form-group row form_group{{$errors->has('product_name') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Product Name:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="product_name" value="{{old('product_name')}}">
                        @if ($errors->has('product_name'))
                            <span class="error">{{ $errors->first('product_name') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Product Image:<span class="req_star">*</span></label>
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
