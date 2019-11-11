import Vue from 'vue'
import VueRouter from 'vue-router' 

Vue.use(VueRouter);

import AddProduct from './components/AddProduct.vue'
import ProductList from './components/ProductList.vue'

const router = new VueRouter({
	mode : 'history',
	routes : [
		{path: "/add", component: AddProduct},
		{path: "/list", component: ProductList}

	]
});


export default router