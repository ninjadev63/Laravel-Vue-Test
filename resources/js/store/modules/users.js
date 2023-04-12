import axios from "axios";

export default {
	namespaced: true,
	state: {
		users: []
	},
	getters: {
	},
	mutations: {
		SET_USERS(state, users) {
			state.users = users;
		},
	},
	actions: {
		async fetchUsers({ commit }) {
			try {
				const { data: { data, success } } = await axios.get("/api/users");
				if (success) {
					commit('SET_USERS', data);
				}
			} catch (e) {
				//TODO: define global error handling
				console.error('error', e);
				throw e;
			}
		}
	},
};
