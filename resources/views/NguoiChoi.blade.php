
@extends('layouts.Master')
@section('head')
@parent
@endsection
<<<<<<< HEAD
@section('main-content')
       
=======


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
@section('main-content')
        
        <!-- end wrapper -->

>>>>>>> 44f9e738b9c2d970d9fc35d1926d20e7781f877c
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
        <!-- table start -->
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="responsive-table-plugin">
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                @if(session('success'))
                                   <script>alert('{{session('success')}}')</script>
                                @endif
                                <table id="tech-companies-1" class="table table-striped" border="2">
                                    <thead>
                                    <tr>
                                        <th data-priority="1">ID</th>
                                        <th data-priority="1">Tên Đăng nhập</th>
                                        <th data-priority="1">Mật Khẩu</th>
                                        <th data-priority="1">Email</th>
                                        <th data-priority="1">Hình Đại Diện</th>
                                        <th data-priority="1">Điểm Cao Nhất</th>
                                        <th data-priority="1"> Credit</th>
                                        <th data-priority="3"></th>
                                    </tr>
                                    </thead>
                                    <tbody>     
            <?php foreach ($NguoiChoi as $value): ?>
               <?php if($value->xoa==0)
               { ?>
                   <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->ten_dang_nhap}}</td>
                    <td>{{$value->mat_khau}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->hinh_dai_dien}}</td>
                    <td>{{$value->diem_cao_nhat}}</td>
                    <td>{{$value->credit}}</td>
                    <td>
                    <button class="btn btn-dark waves-effect waves-light"><a href="#">Sửa</a>
                     </button> 
                     
                    <button class="btn btn-dark waves-effect waves-light"><a href="{{route("nguoi-choi.xoa",['id'=>$value->id])}}">Xóa</a></button>
					               
                     </form>
                    </td>                                                       
                   </tr> 

             <?php } ?>                            
            <?php endforeach ?>                                   
                                           
                            
                                          <!-- them bang o day -->                                                                                                                                                                                                                     
                                    </tbody>
                                    <button class="btn btn-dark waves-effect waves-light"><a href="{{route('nguoi-choi.them-moi')}}">Thêm</a></button>
                                        </table>
                                    </div> <!-- end .table-responsive -->

                                </div> <!-- end .table-rep-plugin-->
                            </div> <!-- end .responsive-table-plugin-->
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->
                </div>
        <!-- end table -->
@endsection
@section('footer')
@parent
@endsection