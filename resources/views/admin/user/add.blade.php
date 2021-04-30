@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="post" action="{{url('admin/user/submit')}}">
                  @csrf
                  <div class="card-header">
                      <div class="row">
                          <div class="col-md-8 card_top_title">
                              <i class="fa fa-gg-circle"></i> User Registration
                          </div>
                          <div class="col-md-4 text-right">
                              <a href="{{url('admin/user')}}" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-th"></i> All User</a>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group row form_group{{$errors->has('name') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Name:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        @if ($errors->has('name'))
                            <span class="error">{{ $errors->first('name') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row form_group{{$errors->has('email') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Email:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                        @if ($errors->has('email'))
                            <span class="error">{{ $errors->first('email') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row form_group{{$errors->has('role') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">User Role:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        @php
                            $allRole=App\Models\UserRole::where('role_status',1)->orderBy('role_id','ASC')->get();
                        @endphp
                        <select class="form-control" name="role">
                            <option value="">Select Role</option>
                            @foreach($allRole as $urole)
                            <option value="{{$urole->role_id}}">{{$urole->role_name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('role'))
                            <span class="error">{{ $errors->first('role') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row form_group{{$errors->has('password') ? ' has-error':''}}">
                      <label class="col-sm-3 col-form-label">Password:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <input type="password" class="form-control" name="password">
                        @if ($errors->has('password'))
                            <span class="error">{{ $errors->first('password') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row form_group">
                      <label class="col-sm-3 col-form-label">Confirm-Password:<span class="req_star">*</span></label>
                      <div class="col-sm-7">
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-center">
                      <button type="submit" class="btn btn-sm btn-success sub_buttton">REGISTRATION</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
