import "./bootstrap"
import { createApp } from "vue";
import App from "./App.vue";
import router from "./router/index";
import store from "./store";

store.dispatch('users/fetchUsers').then(() => { });
store.dispatch('products/fetchProducts').then(() => { });
store.dispatch('categories/fetchCategories').then(() => { });

createApp(App).use(store).use(router).mount("#app");
