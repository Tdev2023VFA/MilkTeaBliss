@extends('masterAd')
@section('main')
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		@if(Session::has('themthanhcong'))
          <div class="alert alert-suscess" style="color:green;font-size: 20px;">{{Session::get('themthanhcong')}}<a href="{{route('sanpham')}}">Trở về trang sản phẩm</a></div>
        @endif
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Thêm sản phẩm</div>
					<div class="panel-body">
						<form method="post" action="{{route('themsanpham')}}" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên sản phẩm</label>
										<input required type="text" name="ten" class="form-control">
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select required name="loai" class="form-control">
										@foreach($loai as $lo)
											<option value="1">{{$lo->ten}}</option>
										@endforeach	
					                    </select>
									</div>
									<div class="form-group" >
										<label>Giá sản phẩm</label>
										<input required type="number" name="gia" class="form-control">
									</div>
									<div class="form-group" >
										<label>Giá khuyến mãi</label>
										<input required type="number" name="giakm" class="form-control">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<input required id="img" type="file" name="image" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('/source/assets/admin/img/new_seo-10-512.png')}}">
									</div>
									<div class="form-group" >
										<label>Miêu tả</label>
										<textarea rows="4" cols="100" name="mota"></textarea>
									</div>							
							
									<div class="form-group" >
										<label>Sản phẩm mới</label><br>
										Có: <input type="radio" name="new" value="1">
										Không: <input type="radio" checked name="new" value="0">
									</div>
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="#" class="btn btn-danger">Hủy bỏ</a>
									{{csrf_field()}}
								</div>
							</div>
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

	@endsection		
