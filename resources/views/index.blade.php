<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="#" crossorigin="anonymous">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
              <a href="#" class="list-group-item list-group-item-action">User Management</a>
              <a href="#" class="list-group-item list-group-item-action">Used</a>
              <a href="#" class="list-group-item list-group-item-action">Enquiry</a>
              <a href="#" class="list-group-item list-group-item-action">Dealer</a>
              <a href="#" class="list-group-item list-group-item-action">Media</a>
              <a href="#" class="list-group-item list-group-item-action">Post</a>
              <a href="#" class="list-group-item list-group-item-action">Category</a>
              <a href="#" class="list-group-item list-group-item-action">New</a>
              <a href="#" class="list-group-item list-group-item-action">Comments</a>
              <a href="#" class="list-group-item list-group-item-action">Appearance</a>
              <a href="#" class="list-group-item list-group-item-action">Reports</a>
              <a href="#" class="list-group-item list-group-item-action">Settings</a>
              
              
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-2 border-right">
		                    <h4>Categories</h4>
		                </div>
		                <div class="col-md-6">
		                    <button type="button" class="btn btn-sm btn-primary">Add New</button>
		                </div>
		                
		            </div>
		            <hr>
		            <div class="row">
        		        <div class="col-md-4 bg-light card-body">
        		            <h5>Add New Category</h5>
        		            <form>
                              <div class="form-group row">
                                <label for="text" class="col-12 col-form-label">Name</label> 
                                <div class="col-12">
                                  <input id="text" name="text" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="slug" class="col-12 col-form-label">Slug</label> 
                                <div class="col-12">
                                  <input id="slug" name="slug" class="form-control here" type="text">
                                  <small>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</small>

                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="parent-category" class="col-12 col-form-label">Parent Category</label> 
                                <div class="col-12">
                                  <select id="parent-category" name="parent-category" class="custom-select">
                                    <option value="">None</option>
                                    <option value="uncategorized">Uncategorized</option>
                                    <option value="new category">New Category</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="description" class="col-12 col-form-label">Description</label> 
                                <div class="col-12">
                                  <textarea id="description" name="description" cols="40" rows="4" class="form-control"></textarea>
                                </div>
                              </div> 
                              <div class="form-group row">
                                <div class="col-12">
                                  <button name="submit" type="submit" class="btn btn-primary btn-sm">Add New Category</button>
                                </div>
                              </div>
                            </form>
        		        </div>
        		        <div class="col-md-8">
        		            <table class="table table-hover ">
                                <thead class="bg-light ">
                                  <tr>
                                    <th>
                                      <div class="form-check-inline">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="">
                                           </label>
                                       </div>
                                    </th>  
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Slug</th>
                                    <th>Count</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                        <div class="form-check-inline">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="">
                                           </label>
                                       </div>
                                    </td>  
                                    <td><a href="#"><small>Johnyahua</small></a></td>
                                    <td><small>Doe</small></td>
                                    <td><small>john@example.com</small></td>
                                    <td><a href="#"><small>5</small></a></td>
                                  </tr>
                              
                                 
                                 
                                </tbody>
                              </table>
        		        </div>
        		    </div>
		        </div>
		    </div>
		</div>
	</div>
</div>