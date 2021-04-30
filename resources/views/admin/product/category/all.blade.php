@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8 card_top_title">
                            <i class="fa fa-gg-circle"></i> All Product Category Information
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{url('admin/product/category/add')}}" class="btn btn-sm btn-dark card_top_btn"><i class="fa fa-plus-circle"></i> Add Product Category</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  @if(Session::has('soft_success'))
                    <script>
                        swal({title: "Successfully!", text: "delete Product Category information!", icon: "success", timer:5000});
                    </script>
                  @endif
                  @if(Session::has('soft_error'))
                    <script>
                        swal({title: "Opps!", text: "Product Category delete failed!", icon: "error", timer:5000});
                    </script>
                  @endif
                  <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                      <tr>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($all as $data)
                      <tr>
                        <td>{{$data->pc_name}}</td>
                        <td>
                            @if($data->pc_image!='')
                              <img height="40" width="40" src="{{asset('uploads/'.$data->pc_image)}}"/>
                            @else
                              <img height="40" width="40" src="{{asset('uploads/avatar.jpg')}}"/>
                            @endif
                        </td>
                        <td>
                            <a href="{{url('admin/product/category/view/'.$data->pc_slug)}}" class="text-success"><i class="fa fa-plus-square fa-lg"></i></a>
                            <a href="{{url('admin/product/category/edit/'.$data->pc_slug)}}" class="text-info"><i class="fa fa-pencil-square fa-lg"></i></a>
                            <a href="{{url('admin/product/category/softdelete/'.$data->pc_slug)}}" class="text-danger"><i class="fa fa-trash fa-lg"></i></a>
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
