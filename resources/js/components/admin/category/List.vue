<template>
	<div>
	    <section class="content" style = "padding-top: 20px;">
	    	<div class="row justify-content-around">
	            <div class="col-10">
	                <div class="card">


	                    <div class="card-header">
	                        <h3 class="card-title">Category List</h3>

	                        <div class="card-tools">
	                        	<button class="btn btn-primary">
                                    <router-link to="/add-category" style="color:#fff; text-decoration: none;"> 
                                    Add Category</router-link>
                                </button>
	                        </div>
	                    </div>


	                    <!-- /.card-header -->
	                    <div class="card-body">
	                        <table id="example2" class="table table-bordered table-hover">
	                            <thead>
	                                <tr>
	                                    <th>ID</th>
	                                    <th>Category name</th>
	                                    <th>Date</th>
	                                    <th>Actions</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr v-for="(category, index) in getallCategory" :key="category.id">
	                                    <td>{{ category.id }}</td>
	                                    <td>{{ category.cat_name }}</td>
	                                    <td>{{ category.created_at | timeformat }}</td>
	                                    <td>
	                                    	<button class = "btn btn-success">
	                                    		<router-link :to="`/edit-category/${category.id}`" style="color:#fff; text-decoration: none;">
	                                    			Edit
	                                    		</router-link>
	                                    	</button> 
	                                    	
	                                    	<button class="btn btn-danger" 
	                                    	@click.prevent = "deleteCategory(category.id)">Delete</button> 

	                                    </td>
	                                </tr>
	                               
                                    <tr>
	                                    <th>ID</th>
	                                    <th>Category name</th>
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
		name: 'List',

		mounted(){
			this.$store.dispatch('allCategory')
        },

		computed:{
           getallCategory: function(){
            	return this.$store.getters.getCategory
           }
        },

		methods: {
			deleteCategory: function(id){
				axios.delete('/deletecate/' + id)

				.then (response => {
					this.$store.dispatch('allCategory')
					Toast.fire({
					  icon: 'success',
					  title: 'Delete Category successfully'
					})
				})
			}
		},
	}

</script>

<style>
	
</style>