import axios from "axios";

export default {
	namespaced: true,
	state: {
		products: [],
	},
	getters: {
		products(state) {
			return state.products
		}
	},
	mutations: {
		SET_PRODUCTS(state, products) {
			state.products = products;
		},
	},
	actions: {
		async fetchProducts({ commit, rootState }, payload={}) {
			try {
				const paramObject = {
					currentCategory: rootState.categories.currentCategory,
					currentSort: rootState.categories.currentSort,
					...payload
				}
				const query = `category=${paramObject['currentCategory']}&sort=${paramObject['currentSort']}`;

				if (Object.prototype.hasOwnProperty.call(payload, 'currentCategory')) {
					commit('categories/SET_CURRENT_CATEGORY', payload.currentCategory, { root: true });
				} else if (Object.prototype.hasOwnProperty.call(payload, 'currentSort')) {
					commit('categories/SET_CURRENT_SORT', payload.currentSort, { root: true });
				}

				// TODO: set loading
				const { data: { data, success } } = await axios.get("/api/products?" + query);

				if (success) {
					commit('SET_PRODUCTS', data);
				}
			} catch (e) {
				//TODO: define global error handling
				console.error('error', e);
				throw e;
			}
		}
	},
};
