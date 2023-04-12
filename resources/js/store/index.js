import { createStore } from "vuex";
import users from "./modules/users";
import products from "./modules/products";
import categories from "./modules/categories";

export default createStore({
	state: {
		//
	},
	mutations: {
		//
	},
	actions: {
		//
	},
	modules: {
		users,
		categories,
		products
	},
	plugins: [],
});
