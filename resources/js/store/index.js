export default {
	state: {
		category: []
	},

	getters: {
		getCategory(state) {
			return state.category
		}
	},

	
	actions: {
		allCategory(context) {
			axios.get('/category')
				.then(response => {
					// console.log(response.data.categories)
					context.commit('categories', response.data.categories)
				})
		}
	},
	mutations: {
		categories: function(state,data) {
			return this.state.category = data
		}
	},
}