@extends('layouts/master')
@section('title')
Quản Lý Lĩnh Vực
@endsection
@section('head')
@parent
@endsection

@section('main-content')
   <!-- table start -->
   <div class="container-fluid">
   <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="responsive-table-plugin">
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                <!-- @if(session('success'))
                                   <script>alert('{{session('success')}}')</script>
                                @endif -->
                                <table id="tech-companies-1" class="table table-striped" border="2">
                                    <thead>
                                    <tr>
                                        <th data-priority="1">ID</th>
                                        <th data-priority="1">Tên Lĩnh Vực</th>
                                        <th data-priority="1">Chức Năng</th>
                                    </tr>
                                    </thead>
                                    <tbody>     
            <?php foreach ($linhVuc as $value): ?>
            <?php if($value->xoa==0){?>
                    <tr>
                    <td>{{$value['id']}}</td>
                    <td>{{$value['ten']}}</td>
                    <td><button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal-sua{{$value->id}}">Sửa</button>
                    <a href="{{route('linh-vuc.xoa',['id'=>$value->id])}}" onclick="return confirm('Bạn có muốn xóa ?')"  class="btn btn-danger waves-effect waves-light">Xóa</a></td>                                                       
                   </tr>    
            <?php }?>
                 <!-- modal sửa -->                  
                 <form action="{{route('linh-vuc.cap-nhat',['id'=>$value->id])}}" method="POST">
                                 @method('PATCH')
                                 @csrf
                                 <div id="con-close-modal-sua{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Sửa Lĩnh Vực</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body p-4">                                   
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="ten_linh_vuc" class="control-label">Tên Lĩnh Vực</label>
                                                        <input type="text" class="form-control" id="ten_linh_vuc" name="ten_linh_vuc" placeholder="Tên Lĩnh Vực" value="{{$value->ten}}" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ten_linh_vuc" class="control-label">Tên Lĩnh Vực Mới</label>
                                                        <input type="text" class="form-control" id="ten_linh_vuc_moi" required="" name="ten_linh_vuc_moi" placeholder="Tên Lĩnh Vực Mới">
                                                    </div>
                                                </div>
                                            </div>                                                                                     
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Lưu</button>
                                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Hủy</button>                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <!-- kết thúc modal sửa -->

            <?php endforeach ?>                                                                                                       
                                          <!-- them bang o day -->                                                                                                                                                                                                                     
                                    </tbody>
                                   <!-- <button class="btn btn-dark waves-effect waves-light"  style="margin-bottom:20px"><a href="">Thêm</a></button> -->
                                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal"  style="margin-bottom:20px" data-target="#con-close-modal">Thêm</button>
                            <!-- modalthemlinhvuc -->                                                                
                               
                                     @if($errors->any())
                                 <div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show" role="alert">
                                <button class="close" aria-label="Close" type="button" data-dismiss="alert">
                                    <span aria-hidden="true">×</span>
                                </button>
                                @foreach($errors->all() as $error)
                                <li> {{$error}}</li>
                                @endforeach
                            </div>  
                             @endif     
                             <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Thêm Mới Lĩnh Vực</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form action="{{route('linh-vuc.xl-them-moi')}}" method="POST" id="themmoi">
                                     @csrf
                                        <div class="modal-body p-4">                                   
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="ten_linh_vuc" class="control-label">Tên Lĩnh Vực</label>
                                                        <input type="text" class="form-control" name="ten"  placeholder="Tên Lĩnh Vực">
                                                    </div>
                                                </div>
                                            </div>                                                                                     
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Lưu</button>
                                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Hủy</button>                                         
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- /.ketthucmodalthem -->
                            
                            <!-- kethucmodalthemlinhvuc -->                     
                                    <!-- btn tim kiem -->
                                     <ul class="list-unstyled topnav-menu float-right mb-0">
                                    <li class="d-none d-sm-block">
                                     <form class="app-search">
                                    <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search..." style="margin-left:5px">
                                        <div class="input-group-append">
                                            <button class="btn btn-dark" type="submit" style="margin-left:5px">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>                                      
                                    </div>
                                </div>
                                    </form>
                                  </li>
                                  </ul>
                                  <!-- ket thuc tim kiem -->
                                                           
                                    </table>                                       
                                    </div> <!-- end .table-responsive -->

                                </div> <!-- end .table-rep-plugin-->
                            </div> <!-- end .responsive-table-plugin-->
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->
                </div>
            </div>
        <!-- end table -->
@endsection
@section('footer')
@parent
@endsection