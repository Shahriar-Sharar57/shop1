@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8 card_top_title">
                            <i class="fa fa-gg-circle"></i> All Banner Information
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{url('admin/banner/add')}}" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-plus-circle"></i> Add Banner</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  @if(Session::has('success_soft'))
                    <script>
                        swal({title: "Successfully!", text: "delete banner information!", icon: "success", timer:5000});
                    </script>
                  @endif
                  @if(Session::has('error'))
                    <script>
                        swal({title: "Opps!", text: "banner delete failed!", icon: "error", timer:5000});
                    </script>
                  @endif
                  <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                      <tr>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Button</th>
                        <th>Photo</th>
                        <th>Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($all as $data)
                      <tr>
                        <td>{{Str::words($data->ban_title,3)}}</td>
                        <td>{{Str::words($data->ban_subtitle,3)}}</td>
                        <td>{{$data->ban_button}}</td>
                        <td>
                            @if($data->ban_image!='')
                              <img height="40" width="40" src="{{asset('uploads/'.$data->ban_image)}}"/>
                            @else
                              <img height="40" width="40" src="{{asset('uploads/avatar.jpg')}}"/>
                            @endif
                        </td>
                        <td>
                            <a href="{{url('admin/banner/view/'.$data->ban_slug)}}" class="text-success"><i class="fa fa-plus-square fa-lg"></i></a>
                            <a href="{{url('admin/banner/edit/'.$data->ban_slug)}}" class="text-info"><i class="fa fa-pencil-square fa-lg"></i></a>
                            <a href="{{url('admin/banner/softdelete/'.$data->ban_slug)}}" class="text-danger"><i class="fa fa-trash fa-lg"></i></a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-sm btn-dark">Print</a>
                    <a href="#" class="btn btn-sm btn-success">Excel</a>
                    <a href="#" class="btn btn-sm btn-info">CSV</a>
                    <a href="#" class="btn btn-sm btn-danger">PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
