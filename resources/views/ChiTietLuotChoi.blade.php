@extends('layouts/master')
@section('title')
Quản Lý Chi Tiết Lượt Chơi
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
                                        <th data-priority="1">Lượt Chơi</th>
                                        <th data-priority="1">Câu Hỏi</th>
                                        <th data-priority="3">Phương Án</th>
                                        <th data-priority="1">Điểm</th>
                                    </tr>
                                    </thead>
                                    <tbody>       @foreach($chitiet as $lc)
                                         <tr>                                                                                                    
                                          
                                            <td>{{$lc->id}}</td>
                                            <td>{{$lc->luot_choi_id}}</td>
                                            <td>{{$lc->cau_hoi_id}}</td>
                                            <td>{{$lc->phuong_an}}</td>
                                            <td>{{$lc->diem}}</td>
                                            
                                        </tr>            
                                        @endforeach                                                                                                                 
                                    </tbody>
                                    <!-- <button class="btn btn-dark waves-effect waves-light" style="margin-bottom:20px"><a href="{{route('linh-vuc.them-moi')}}">Thêm</a></button> -->
                                    <!-- btn tim kiem -->
                                     <ul class="list-unstyled topnav-menu float-right mb-0">
                                    <li class="d-none d-sm-block">
                                     <form class="app-search" action="{{route('chi-tiet.tim-kiem')}}" method="get">
                                    <div class="app-search-box">
                                    <div class="input-group" style="margin-bottom:20px">
                                        <input type="text" name="luot_choi_id" class="form-control" placeholder="Search..." style="margin-left:5px">
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