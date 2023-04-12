import axios from "axios";

export default {
	namespaced: true,
	state: {
		categories: [],
		currentCategory: 0,
		currentSort: 'none'
	},
	getters: {
		categories(state) {
			return state.categories;
		},
		currentCategory(state) {
			return state.currentCategory;
		},
		currentSort(state) {
			return state.currentSort;
		}
	},
	mutations: {
		SET_CATEGORIES(state, categories) {
			state.categories = categories;
		},
		SET_CURRENT_CATEGORY(state, id) {
			state.currentCategory = id;
		},
		SET_CURRENT_SORT(state, id) {
			state.currentSort = id;
		}
	},
	actions: {
		async fetchCategories({ commit }) {
			try {
				const { data: { data, success } } = await axios.get("/api/categories");
				if (success) {
					commit('SET_CATEGORIES', data);
				}
			} catch (e) {
				//TODO: define global error handling
				console.error('error', e);
				throw e;
			}
		}
	},
};
