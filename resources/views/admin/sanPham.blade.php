@extends('masterAd')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Sản phẩm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
				Có: {{count($ssp)}} sản phẩm</h3>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách sản phẩm</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{route('themsanpham')}}" class="btn btn-primary">Thêm sản phẩm</a>								
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="20%">Tên Sản phẩm</th>
											<th width="10%">Danh mục</th>
											<th height="10%">Ảnh sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th>Giá khuyến mãi</th>
											<th>Mô tả</th>										
											<th>Sản phẩm mới</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@foreach($sp as $s)
										<tr>
											<td>{{$s->id}}</td>
											<td>{{$s->ten}}</td>

											@if($s->id_loai == 1)
											<td>Milk Tea</td>
											@elseif($s->id_loai == 2)
											<td>Macchiato</td>
											@elseif($s->id_loai == 3)
											<td>Latte</td>
											@else
											<td>Trà đá</td>
											@endif

											<td>
												<img height="100px" width="100px" src="source/image/product/{{$s->image}}" class="thumbnail">
											</td>

											<td>{{number_format($s->gia)}} Đồng</td>
											@if($s->giakm != 0)
											<td>{{number_format($s->giakm)}} Đồng</td>
											@else
											<td>không khuyến mãi</td>
											@endif

											<td>{{$s->mota}}</td>											

											@if($s->new == 1)
											<td>Có</td>
											@else
											<td>Không</td>
											@endif
											<td>
												<a href="{{route('suasanpham',$s->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{route('xoasanpham',$s->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
										</tr>
									@endforeach											
									</tbody>
								</table>
								<div class=row>{{$sp->links()}}</div>								
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	@endsection	
