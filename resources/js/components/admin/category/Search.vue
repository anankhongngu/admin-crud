<template>
	<div id="search-cate">
	<!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search"

                    v-model = "searchText" @keyup="search()""

                    >
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
    </div>


</template>

<script >
	export default {
		data: {
			searchText: '',
			searchArr: [],
		},

		methods: {
			search() {
                axios.post('/search-cate', {
                    cat_name: this.searchText
                })
                .then((response) => {
                    this.searchArrs = response.data;
                });
            }
		}

	}
</script>
<style lang = "scss">
	
</style>