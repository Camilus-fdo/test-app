<template>
	
	<div class="container">
		<h2>Add Product</h2>
		<form>
			<div class="form-group">
				<label for="exampleInputEmail1">Product Name</label>
				<input type="text" class="form-control" placeholder="Name" v-model="items.name">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Qantity</label>
				<input type="text" class="form-control" placeholder="Quantity" v-model="items.quantity">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Price</label>
				<input type="text" class="form-control" placeholder="Price" v-model="items.price">
			</div>
			<button type="submit" class="btn btn-primary" @click.prevent="addItems()">Add</button>
		</form>
	</div>
</template>
<script>
	export default{
		data: function() {
			return{
				items: {
					name 	 : '',
					quantity : '',
					price 	 : ''
				}
			}
		},

		methods: {
			addItems() {
				var _t = this;
				_t.axios.post("http://laravelk.com/api/addItems", _t.items).then(responce => {
					console.log("Sucesss");
				})
				
				
			}
		}
	}
</script>