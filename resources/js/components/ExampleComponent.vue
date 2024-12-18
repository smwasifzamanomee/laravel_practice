<template>
    <div>
        <form>
            <div class="row">
                <div class="col">
                    <input class="form-control" type="text" v-model="fields.name" placeholder="Product Name">
                </div>
            
                <div class="col">
                    <input class="form-control" type="number" v-model="fields.landed_cost" placeholder="Landed Cost">
                </div>
                <div class="col">
                    <input class="form-control" type="number" v-model="fields.sell_margin" placeholder="Sell Margin">
                </div>
                <div class="col">
                    <input class="form-control" type="number" v-model="fields.selling_price" placeholder="Selling Price">
                </div>
                <div class="col">
                    <button class="btn btn-primary btn-sm" type="button" @click="save()">Save</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: 'TestComponent',
    data(){
        return {
            fields:{},
        }
    },
    methods: {
        save(){
            axios.post('/product', this.fields).then(response => {
                location.reload();
            });
        }
    }
}
</script>

<style scoped>
h1 {
    color: blue;
}
</style>