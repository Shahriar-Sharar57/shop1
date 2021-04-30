@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="post" action="{{url('admin/product/submit')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="card-header">
                      <div class="row">
                          <div class="col-md-8 card_top_title">
                              <i class="fa fa-gg-circle"></i> Add product  Information
                          </div>
                          <div class="col-md-4 text-right">
                              <a href="{{url('admin/product')}}" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-th"></i> All Product </a>
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
                    <div class="form-group row form_group{{$errors->has('name') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Product Name:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        @if ($errors->has('name'))
                            <span class="error">{{ $errors->first('name') }}</span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group row form_group{{$errors->has('mProcate') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Main Product Category :<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        @php
                            $mainProCate=App\Models\MainProductCategory::where('mpc_status',1)->orderBy('mpc_id','ASC')->get();
                        @endphp
                        <select class="form-control" name="mProcate">
                            <option value="">Select Main Product Category</option>
                            @foreach($mainProCate as $data)
                            <option value="{{$data->mpc_id}}">{{$data->mpc_name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('mProcate'))
                            <span class="error">{{ $errors->first('mProcate') }}</span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group row form_group{{$errors->has('pcate') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Product Category :<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        @php
                            $proCate=App\Models\ProductCategory::where('pc_status',1)->orderBy('pc_id','ASC')->get();
                        @endphp
                        <select class="form-control" name="pcate">
                            <option value="">Select Product Category</option>
                            @foreach($proCate as $data)
                            <option value="{{$data->pc_id}}">{{$data->pc_name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('pcate'))
                            <span class="error">{{ $errors->first('pcate') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Product In Feature:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="infeature" value="{{old('infeature')}}">
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Product Main Price:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="mprice" value="{{old('mprice')}}">
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Product Discount Price:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="dprice" value="{{old('dprice')}}">
                      </div>
                    </div>
                    <div class="form-group row form_group{{$errors->has('price') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Product  Price:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="price" value="{{old('price')}}">
                        @if ($errors->has('price'))
                            <span class="error">{{ $errors->first('price') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row form_group{{$errors->has('quantity') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Product  Quantity:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="quantity" value="{{old('quantity')}}">
                        @if ($errors->has('quantity'))
                            <span class="error">{{ $errors->first('quantity') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row form_group{{$errors->has('sdescription') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Product  Short Description:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <textarea name="sdescription" rows="3" class="form-control">{{old('sdescription')}}</textarea>
                        @if ($errors->has('sdescription'))
                            <span class="error">{{ $errors->first('sdescription') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Product Description:</label>
                      <div class="col-sm-7">
                        <textarea name="description" rows="3" class="form-control">{{old('description')}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Product Feature:</label>
                      <div class="col-sm-7">
                        <input type="text" name="feature" class="form-control" value="{{old('feature')}}">
                      </div>
                    </div>
                    <div class="form-group row form_group{{$errors->has('tags') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Product Tags:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" name="tags" class="form-control" value="{{old('tags')}}">
                        @if ($errors->has('tags'))
                            <span class="error">{{ $errors->first('tags') }}</span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group row form_group{{$errors->has('pic') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Product Image:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <input type="file" name="pic"><br>
                        @if ($errors->has('pic'))
                            <span class="error">{{ $errors->first('pic') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Product Image 2:</label>
                      <div class="col-sm-7">
                        <input type="file" name="pic2">
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Product Image 3:</label>
                      <div class="col-sm-7">
                        <input type="file" name="pic3">
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
