<template>	
	<div>
	    <section class="content">
	        <div class="container-fluid">
	            <div class="row justify-content-around" style =" padding-top: 20px;">
	                <!-- left column -->
	                <div class="col-md-6">
	                    <!-- general form elements -->
	                    <div class="card card-info">
	                        <div class="card-header">
	                            <h3 class="card-title">Add New Category</h3>
	                        </div>                      
	                        <form role="form" @submit.prevent = "addCategory()">
	                            <div class="card-body">
	                                <div class="form-group">
	                                    <label for="categoryId">Category name</label>
	                                    <input type="text" id="categoryId" placeholder="Category name"
	                                    	v-model = "form.cat_name" name="cat_name"
	                                    	class="form-control" 
	                                    	:class="{'is-invalid': form.errors.has('cat_name') } ">
	                                    	<has-error :form="form" field="cat_name"></has-error>
	                                </div>
	                            </div>

	                            <div class="card-footer">
	                                <button type="submit" class="btn btn-primary">Save</button>
	                            </div>
	                        </form>

	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	</div>

</template>

<script>
	
	export default {
		name: 'New',
		
		data() {
			return {
				form: new Form({
					cat_name: '',
				})
			};			
		},


		methods: {
			addCategory: function() {
				this.form.post('/add-category')
				.then(response => {
					this.$router.push('/category-list')
					Toast.fire({
					  icon: 'success',
					  title: 'Add Category successfully'
					})							
				})

				.catch(error => {
					console.log (error)
				})
			},
		}
	}

</script>

<style>
	
</style>