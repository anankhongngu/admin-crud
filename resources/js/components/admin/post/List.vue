<template>
	<div>
	    <section class="content" style = "padding-top: 20px;">
	    	<div class="row justify-content-around">
	            <div class="col-10">
	                <div class="card">


	                    <div class="card-header">
	                        <h3 class="card-title">Post List</h3>

	                        <div class="card-tools">
	                        	<button class="btn btn-primary">
                                    <router-link to="/add-post" style="color:#fff; text-decoration: none;"> 
                                    Add Post</router-link>                                    
                                </button>
	                        </div>
	                    </div>


	                    <!-- /.card-header -->
	                    <div class="card-body">
	                        <table id="example2" class="table table-bordered table-hover">
	                            <thead>
	                                <tr>
	                                    <th>ID</th>
	                                    <th>User</th>
	                                    <th>Category</th>
	                                    <th>Title</th>
	                                    <th>Description</th>
	                                    <th>Photo</th>
	                                    <th>Date</th>
	                                    <th>Actions</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>1</td>
	                                    <td>person</td>
	                                    <td>danh mục</td>
	                                    <td>tiêu đề</td>
	                                    <td>miêu tả</td>
	                                    <td>photo</td>
	                                    <td></td>
	                                    <td>
	                                    	<button class = "btn btn-success">Edit
	                                    		<router-link to="/edit-post" style="color:#fff; text-decoration: none;">
	                                    			Edit
	                                    		</router-link>
	                                    	</button> 
	                                    	
	                                    	<button class="btn btn-danger" >Delete</button> 

	                                    </td>
	                                </tr>
	                               
                                    <tr>
	                                   	<th>ID</th>
	                                    <th>User</th>
	                                    <th>Category</th>
	                                    <th>Title</th>
	                                    <th>Description</th>
	                                    <th>Photo</th>
	                                    <th>Date</th>
	                                    <th>Actions</th>

	                                </tr>
	                               
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
		</section>	
	</div>

</template>

<script>
	export default {
		name: 'List'
	}
</script>
<style lang = "">
	
</style>