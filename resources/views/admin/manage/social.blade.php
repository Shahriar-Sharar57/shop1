@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="post" action="{{url('admin/manage/update/social')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="card-header">
                      <div class="row">
                          <div class="col-md-8 card_top_title">
                              <i class="fa fa-gg-circle"></i> Update Social Media Information
                          </div>
                          <div class="col-md-4 text-right">
                              <a href="{{url('admin/manage/basic')}}" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-th"></i> Basic Information</a>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                    @if(Session::has('success'))
                      <script>
                          swal({title: "Successfully!", text: "update social media information!", icon: "success", timer:5000});
                      </script>
                    @endif
                    @if(Session::has('error'))
                      <script>
                          swal({title: "Opps!", text: "social media information update failed!", icon: "error", timer:5000});
                      </script>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-facebook-square"></i></div>
                            </div>
                            <input type="text" class="form-control" name="facebook" value="{{$data->sm_facebook}}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-twitter-square"></i></div>
                            </div>
                            <input type="text" class="form-control" name="twitter" value="{{$data->sm_twitter}}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-linkedin-square"></i></div>
                            </div>
                            <input type="text" class="form-control" name="linkedin" value="{{$data->sm_linkedin}}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-youtube"></i></div>
                            </div>
                            <input type="text" class="form-control" name="youtube" value="{{$data->sm_youtube}}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-google"></i></div>
                            </div>
                            <input type="text" class="form-control" name="google" value="{{$data->sm_google}}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-instagram"></i></div>
                            </div>
                            <input type="text" class="form-control" name="instagram" value="{{$data->sm_instagram}}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-pinterest-square"></i></div>
                            </div>
                            <input type="text" class="form-control" name="pinterest" value="{{$data->sm_pinterest}}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-skype"></i></div>
                            </div>
                            <input type="text" class="form-control" name="skype" value="{{$data->sm_skype}}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-vimeo"></i></div>
                            </div>
                            <input type="text" class="form-control" name="vimeo" value="{{$data->sm_vimeo}}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-whatsapp"></i></div>
                            </div>
                            <input type="text" class="form-control" name="whatsapp" value="{{$data->sm_whatsapp}}">
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
