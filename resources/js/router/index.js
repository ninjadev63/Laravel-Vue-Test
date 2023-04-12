import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Products.vue";
import Product from "../views/Product.vue"

const routes = [
	{
		path: "/",
		name: "products",
		component: Home,
	},
	{
		path: "/:id",
		name: "product",
		component: Product,
	},
];

const router = createRouter({
	history: createWebHistory(import.meta.env.BASE_URL),
	routes,
});

export default router;
