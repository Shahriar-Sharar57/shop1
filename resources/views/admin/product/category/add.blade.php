@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="post" action="{{url('admin/product/category/insert')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="card-header">
                      <div class="row">
                          <div class="col-md-8 card_top_title">
                              <i class="fa fa-gg-circle"></i> Add product Category Information
                          </div>
                          <div class="col-md-4 text-right">
                              <a href="{{url('admin/product/category')}}" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-th"></i> All Product Category</a>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                    @if(Session::has('success'))
                      <script>
                          swal({title: "Successfully!", text: "Add product category information!", icon: "success", timer:5000});
                      </script>
                    @endif
                    @if(Session::has('error'))
                      <script>
                          swal({title: "Opps!", text: "banner upload failed!", icon: "error", timer:5000});
                      </script>
                    @endif
                    <div class="form-group row form_group{{$errors->has('pc_name') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Product Category Name:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="pc_name" value="{{old('pc_name')}}">
                        @if ($errors->has('pc_name'))
                            <span class="error">{{ $errors->first('pc_name') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row form_group{{$errors->has('mpc_name') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Product Main Category :<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        @php
                            $allMPC=App\Models\MainProductCategory::where('mpc_status',1)->orderBy('mpc_name','ASC')->get();
                        @endphp
                        <select class="form-control" name="mpc_name">
                          <option value="">select category</option>
                          @foreach($allMPC as $mpc)
                          <option value="{{$mpc->mpc_id}}">{{$mpc->mpc_name}}</option>
                          @endforeach
                        </select>
                        @if ($errors->has('mpc_name'))
                            <span class="error">{{ $errors->first('mpc_name') }}</span>
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
                      <button type="submit" class="btn btn-sm btn-success sub_buttton">SAVE</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
