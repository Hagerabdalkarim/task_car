@extends('Admin.layouts.pages')
@section('content')

<div class="right_col" role="main" style="min-height: 957.8px;">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Manage Cars</h3>
						</div>
						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Add Car</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link">
											<i class="fa fa-chevron-up">
	                                      </i>   
										</a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
												<i class="fa fa-wrench">
											</i>  
										    	</a>
											   <ul class="dropdown-menu" role="menu">
											  <li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
											<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i>
									</a>
										</li>
									</ul>
									<div class="clearfix">
                                </div>
								   </div>
								<div class="x_content">
									<br>
									<form id="demo-form2"  method="post" data-parsley-validate="" action="{{ route('store_car') }}" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate="">
										 @csrf	
										<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
										</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="title" required="required" class="form-control " name="title">
												  @error('title')
                                                 {{ $message }}
                                                  @enderror
											</div>
										</div>
								     <div class="item form-group">
                                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="category">Category <span class="required">*</span>
								    </label>
                                       <select name="category_id" id="category_id">
                                          <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                          <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                                            @endforeach
                                         </select>
                                          @error('category_id')
                                         {{ $message }}
                                          @enderror
                                           </div>
											<div class="item form-group">
										<label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea id="content" name="content" required="required" class="form-control">Contents</textarea>
												  @error('content')
                                                 {{ $message }}
                                                   @enderror
											</div>
										</div>
										<div class="item form-group">
									<label for="luggage" class="col-form-label col-md-3 col-sm-3 label-align">Luggage <span class="required">*</span>
										</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="luggage" class="form-control" type="number"min="1" max="6" name="luggage" required="required">
												  @error('luggage')
                                                 {{ $message }}
                                                   @enderror
											</div>
										</div>
										<div class="item form-group">
									<label for="doors" class="col-form-label col-md-3 col-sm-3 label-align">Doors <span class="required">*</span>
										</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="doors" class="form-control" type="number"min="1" max="4" name="doors" required="required">
												  @error('doors')
                                                 {{ $message }}
                                                   @enderror
											</div>
										</div>
										<div class="item form-group">
									<label for="passengers" class="col-form-label col-md-3 col-sm-3 label-align">Passengers <span class="required">*</span>
										</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="passenger" class="form-control" type="number"min="1" max="8" name="passenger" required="required">
												  @error('passenger')
                                                 {{ $message }}
                                                   @enderror
											</div>
										</div>
										<div class="item form-group">
											<label for="price" class="col-form-label col-md-3 col-sm-3 label-align">Price <span class="required">*</span>
										</label>
											<div class="col-md-6 col-sm-6 ">
											<input  for="price" id="price" class="form-control" type="number" step="0.01" value="0.00" name="price" required="required">	
												  @error('price')
                                                 {{ $message }}
                                                   @enderror
											</div>
										</div>
								  <div class="form-check">
								   	<input class="form-check-input" type="checkbox" name="active" id="flexCheckChecked" checked />
										<label class="form-check-label" for="flexCheckChecked" name="active">Active</label>			  
								 	</div>
									<div class="item form-group">
										<label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" id="image" name="image" required="required" class="form-control">
												  @error('image')
                                                 {{ $message }}
                                                   @enderror
											</div>
										</div>
									<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button type="submit" class="btn btn-success">Add</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div> 
@endsection