 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manage Cars</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Cars</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                   
     
        <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                      <div class="row"><div class="col-sm-6">
                        <div class="dataTables_length" id="datatable_length">
                        <label>Show 
                        <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                        <option value="10">10</option><option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select> entries</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div id="datatable_filter" class="dataTables_filter">
                      <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable">
                    </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                     <div class="col-sm-12">
                        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="datatable_info">
                      <thead>
                     <tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Title: activate to sort column ascending" style="width: 88.2px;">Title</th>
                      <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 98.2px;">Price</th>
                      <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Active: activate to sort column ascending" style="width: 111.2px;">Active</th>
                      <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 84.2px;">Edit</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Delete: activate to sort column descending" style="width: 111px;" aria-sort="ascending">Delete</th>
                    </tr>
                      </thead>


                      <tbody>
                       
                         <tbody>
                        <tr>
                          <td>Car 10</td>
                          <td>250</td>
                          <td>Yes</td>
                          <td><img src="{{ asset('admin/images/edit.png') }}" alt="Edit"></td>
                          <td><img src="{{ asset('admin/images/delete.png') }}" alt="Delete"></td>
                        </tr>
                        <tr>
                          <td>Car 1</td>
                          <td>150</td>
                          <td>Yes</td>
                          <td><img src="{{ asset('admin/images/edit.png') }}" alt="Edit"></td>
                          <td><img src="{{ asset('admin/images/delete.png') }}" alt="Delete"></td>
                        </tr>
                        <tr>
                          <td>Car 2</td>
                          <td>200</td>
                          <td>Yes</td>
                          <td><img src="{{ asset('admin/images/edit.png') }}" alt="Edit"></td>
                          <td><img src="{{ asset('admin/images/delete.png') }}" alt="Delete"></td>
                        </tr>
                        
                      </tbody>     
                    </table>
                  </div>
                </div>
                <div class="row">
                <div class="col-sm-5">
                <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries

                </div>
              </div>
              <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                  <ul class="pagination"><li class="paginate_button previous disabled" id="datatable_previous">
                    <a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a></li>
                    <li class="paginate_button active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a></li>
                    <li class="paginate_button next disabled" id="datatable_next">
                      <a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0">Next</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
         <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>