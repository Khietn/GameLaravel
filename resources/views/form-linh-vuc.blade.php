

@extends('layouts.Master')
@section('title')
Thêm Mới Lĩnh Vực
@endsection
@section('head')
    @parent
@endsection

@section('main-content')
<!-- <div class="container-fluid">
<div class="row" >
   <div class="col-lg-6">
   	<div class="card">
   		<div class="card-body">
	  <h4 class="mb-3 header-title">Thêm Mới Lĩnh Vực</h4>
   <form action="{{route('linh-vuc.xl-them-moi')}}" method="POST">
   	@csrf
       <div class="form-group mb-3">
          <label for="ten_linh_vuc">Tên Lĩnh Vực</label>
          <input type="text" id="ten_linh_vuc" name="ten_linh_vuc"class="form-control" placeholder="Tên Lĩnh Vực">          
           </div>
            <button type="submit" class="btn btn-primary waves-effect waves-light" style="margin-bottom:20px">Lưu</button>
            <button type="submit" class="btn btn-danger waves-effect waves-light" style="margin-bottom:20px"><a href="{{route('danhsach')}}">Hủy</a></button>
               </form>
      </div>
</div>
</div> -->
   <!-- // </form> -->
@endsection 
