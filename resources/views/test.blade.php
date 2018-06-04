@extends('testhome')
@section('content')
<div class="container-fluid">
	  <div class="content">
	     <div class="row">
		    <div class="col-sm-12 con">
			   <div class="row">
			      <div class="col-sm-9">
					  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
							<div class="item active">
							  <img src="{{asset('pages/images/slider1.jpg') }}" class="img-responsive">
							</div>
							<div class="item ">
							  <img src="{{asset('pages/images/slider2.jpg') }}" class="img-responsive">
							  
							</div>
							<div class="item ">
							  <img src="{{asset('pages/images/slider3.jpg') }}" class="img-responsive">
							 
							</div>
							 <div class="item ">
				             <img src="{{asset('pages/images/slider4.jpg') }}" class="img-responsive">
				   
				            </div>
						  </div>
						</div>
				  </div>
				  <div class="col-sm-3 new-news">
				 <div class="row">
					<div class="col-sm-12">
						<h3 class="title">KHOÁ HỌC MỚI</h3>
						<hr>
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12 post">
								<img src="{{asset('pages/images/hot-news.jpg')}}" class="img-responsive">
								<a href="#">CÂU CHUYỆN ANH KỸ SƯ CỦA FACEBOOK KHÔNG CÓ BẰNG CẤP 3 LẪN ĐẠI HỌC</a>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 post">
								<img src="{{asset('pages/images/hot-news.jpg')}}"" class="img-responsive">
								<a href="#">CÂU CHUYỆN ANH KỸ SƯ CỦA FACEBOOK KHÔNG CÓ BẰNG CẤP 3 LẪN ĐẠI HỌC</a>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 post">
								<img src="{{asset('pages/images/hot-news.jpg')}}"" class="img-responsive">
								<a href="#">CÂU CHUYỆN ANH KỸ SƯ CỦA FACEBOOK KHÔNG CÓ BẰNG CẤP 3 LẪN ĐẠI HỌC</a>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 post">
								<img src="{{asset('pages/images/hot-news.jpg')}}"" class="img-responsive">
								<a href="#">CÂU CHUYỆN ANH KỸ SƯ CỦA FACEBOOK KHÔNG CÓ BẰNG CẤP 3 LẪN ĐẠI HỌC</a>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 post">
								<img src="{{asset('pages/images/hot-news.jpg')}}"" class="img-responsive">
								<a href="#">CÂU CHUYỆN ANH KỸ SƯ CỦA FACEBOOK KHÔNG CÓ BẰNG CẤP 3 LẪN ĐẠI HỌC</a>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 post">
								<img src="{{asset('pages/images/hot-news.jpg')}}"" class="img-responsive">
								<a href="#">CÂU CHUYỆN ANH KỸ SƯ CỦA FACEBOOK KHÔNG CÓ BẰNG CẤP 3 LẪN ĐẠI HỌC</a>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 post">
								<img src="{{asset('pages/images/hot-news.jpg')}}"" class="img-responsive">
								<a href="#">CÂU CHUYỆN ANH KỸ SƯ CỦA FACEBOOK KHÔNG CÓ BẰNG CẤP 3 LẪN ĐẠI HỌC</a>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 post">
								<img src="{{asset('pages/images/hot-news.jpg')}}"" class="img-responsive">
								<a href="#">CÂU CHUYỆN ANH KỸ SƯ CỦA FACEBOOK KHÔNG CÓ BẰNG CẤP 3 LẪN ĐẠI HỌC</a>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 post">
								<img src="{{asset('pages/images/hot-news.jpg')}}"" class="img-responsive">
								<a href="#">CÂU CHUYỆN ANH KỸ SƯ CỦA FACEBOOK KHÔNG CÓ BẰNG CẤP 3 LẪN ĐẠI HỌC</a>
								<hr>
							</div>
						</div>
					</div>
				</div>
				  </div>
			   </div>
			</div>
		 </div>
	  </div>
	  	<div class="row menu">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-6 title-post text-left">
						<h3>Khoá học mới</h3>
					</div>
					<div class="col-sm-6 title-post continues-post text-right">
						<a>Xem thêm</a>
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-3">
							    <div class="thumbnail">
							      <img src="{{asset('pages/images/hot-news.jpg')}}"" alt="...">
							      <div class="caption">
							        <h3>C LANGUAGE, HTML5, CSS3, JAVASCRIPT</h3>
							        <p>
							        	Xây dựng và phát triển website doanh nghiệp, website thương mại điện tử; tự phân tích, chuẩn hóa và quản trị cơ sở dữ liệu trên nền SQL Server,…
							        </p>
							        <p>
							        	<a href="#" class="btn btn-primary" role="button">Xem chi tiết</a>
							        </p>
							      </div>
							    </div>
							</div>
							<div class="col-sm-3">
							    <div class="thumbnail">
							      <img src="{{asset('pages/images/hot-news.jpg')}}"" alt="...">
							      <div class="caption">
							        <h3>C LANGUAGE, HTML5, CSS3, JAVASCRIPT</h3>
							        <p>
							        	Xây dựng và phát triển website doanh nghiệp, website thương mại điện tử; tự phân tích, chuẩn hóa và quản trị cơ sở dữ liệu trên nền SQL Server,…
							        </p>
							        <p>
							        	<a href="#" class="btn btn-primary" role="button">Xem chi tiết</a>
							        </p>
							      </div>
							    </div>
							</div>
							<div class="col-sm-3">
							    <div class="thumbnail">
							      <img src="{{asset('pages/images/hot-news.jpg')}}"" alt="...">
							      <div class="caption">
							        <h3>C LANGUAGE, HTML5, CSS3, JAVASCRIPT</h3>
							        <p>
							        	Xây dựng và phát triển website doanh nghiệp, website thương mại điện tử; tự phân tích, chuẩn hóa và quản trị cơ sở dữ liệu trên nền SQL Server,…
							        </p>
							        <p>
							        	<a href="#" class="btn btn-primary" role="button">Xem chi tiết</a>
							        </p>
							      </div>
							    </div>
							</div>
							<div class="col-sm-3">
							    <div class="thumbnail">
							      <img src="{{asset('pages/images/hot-news.jpg')}}"" alt="...">
							      <div class="caption">
							        <h3>C LANGUAGE, HTML5, CSS3, JAVASCRIPT</h3>
							        <p>
							        	Xây dựng và phát triển website doanh nghiệp, website thương mại điện tử; tự phân tích, chuẩn hóa và quản trị cơ sở dữ liệu trên nền SQL Server,…
							        </p>
							        <p>
							        	<a href="#" class="btn btn-primary" role="button">Xem chi tiết</a>
							        </p>
							      </div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
			<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-6 title-post text-left">
						<h3>Môn học mới</h3>
					</div>
					<div class="col-sm-6 title-post continues-post text-right">
						<a>Xem thêm</a>
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-3">
							    <div class="thumbnail">
							      <img src="{{asset('pages/images/hot-news.jpg')}}"" alt="...">
							      <div class="caption">
							        <h3>C LANGUAGE, HTML5, CSS3, JAVASCRIPT</h3>
							        <p>
							        	Xây dựng và phát triển website doanh nghiệp, website thương mại điện tử; tự phân tích, chuẩn hóa và quản trị cơ sở dữ liệu trên nền SQL Server,…
							        </p>
							        <p>
							        	<a href="#" class="btn btn-primary" role="button">Xem chi tiết</a>
							        </p>
							      </div>
							    </div>
							</div>
							<div class="col-sm-3">
							    <div class="thumbnail">
							      <img src="{{asset('pages/images/hot-news.jpg')}}"" alt="...">
							      <div class="caption">
							        <h3>C LANGUAGE, HTML5, CSS3, JAVASCRIPT</h3>
							        <p>
							        	Xây dựng và phát triển website doanh nghiệp, website thương mại điện tử; tự phân tích, chuẩn hóa và quản trị cơ sở dữ liệu trên nền SQL Server,…
							        </p>
							        <p>
							        	<a href="#" class="btn btn-primary" role="button">Xem chi tiết</a>
							        </p>
							      </div>
							    </div>
							</div>
							<div class="col-sm-3">
							    <div class="thumbnail">
							      <img src="{{asset('pages/images/hot-news.jpg')}}"" alt="...">
							      <div class="caption">
							        <h3>C LANGUAGE, HTML5, CSS3, JAVASCRIPT</h3>
							        <p>
							        	Xây dựng và phát triển website doanh nghiệp, website thương mại điện tử; tự phân tích, chuẩn hóa và quản trị cơ sở dữ liệu trên nền SQL Server,…
							        </p>
							        <p>
							        	<a href="#" class="btn btn-primary" role="button">Xem chi tiết</a>
							        </p>
							      </div>
							    </div>
							</div>
							<div class="col-sm-3">
							    <div class="thumbnail">
							      <img src="{{asset('pages/images/hot-news.jpg')}}"" alt="...">
							      <div class="caption">
							        <h3>C LANGUAGE, HTML5, CSS3, JAVASCRIPT</h3>
							        <p>
							        	Xây dựng và phát triển website doanh nghiệp, website thương mại điện tử; tự phân tích, chuẩn hóa và quản trị cơ sở dữ liệu trên nền SQL Server,…
							        </p>
							        <p>
							        	<a href="#" class="btn btn-primary" role="button">Xem chi tiết</a>
							        </p>
							      </div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
			<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-6 title-post text-left">
						<h3>Giáo Viên</h3>
					</div>
					<div class="col-sm-6 title-post continues-post text-right">
						<a>Xem thêm</a>
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-3">
							    <div class="thumbnail">
							      <img src="{{asset('pages/images/hot-news.jpg')}}"" alt="...">
							      <div class="caption">
							        <h3>C LANGUAGE, HTML5, CSS3, JAVASCRIPT</h3>
							        <p>
							        	Xây dựng và phát triển website doanh nghiệp, website thương mại điện tử; tự phân tích, chuẩn hóa và quản trị cơ sở dữ liệu trên nền SQL Server,…
							        </p>
							        <p>
							        	<a href="#" class="btn btn-primary" role="button">Xem chi tiết</a>
							        </p>
							      </div>
							    </div>
							</div>
							<div class="col-sm-3">
							    <div class="thumbnail">
							      <img src="{{asset('pages/images/hot-news.jpg')}}"" alt="...">
							      <div class="caption">
							        <h3>C LANGUAGE, HTML5, CSS3, JAVASCRIPT</h3>
							        <p>
							        	Xây dựng và phát triển website doanh nghiệp, website thương mại điện tử; tự phân tích, chuẩn hóa và quản trị cơ sở dữ liệu trên nền SQL Server,…
							        </p>
							        <p>
							        	<a href="#" class="btn btn-primary" role="button">Xem chi tiết</a>
							        </p>
							      </div>
							    </div>
							</div>
							<div class="col-sm-3">
							    <div class="thumbnail">
							      <img src="{{asset('pages/images/hot-news.jpg')}}"" alt="...">
							      <div class="caption">
							        <h3>C LANGUAGE, HTML5, CSS3, JAVASCRIPT</h3>
							        <p>
							        	Xây dựng và phát triển website doanh nghiệp, website thương mại điện tử; tự phân tích, chuẩn hóa và quản trị cơ sở dữ liệu trên nền SQL Server,…
							        </p>
							        <p>
							        	<a href="#" class="btn btn-primary" role="button">Xem chi tiết</a>
							        </p>
							      </div>
							    </div>
							</div>
							<div class="col-sm-3">
							    <div class="thumbnail">
							      <img src="{{asset('pages/images/hot-news.jpg')}}"" alt="...">
							      <div class="caption">
							        <h3>C LANGUAGE, HTML5, CSS3, JAVASCRIPT</h3>
							        <p>
							        	Xây dựng và phát triển website doanh nghiệp, website thương mại điện tử; tự phân tích, chuẩn hóa và quản trị cơ sở dữ liệu trên nền SQL Server,…
							        </p>
							        <p>
							        	<a href="#" class="btn btn-primary" role="button">Xem chi tiết</a>
							        </p>
							      </div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
@endsection