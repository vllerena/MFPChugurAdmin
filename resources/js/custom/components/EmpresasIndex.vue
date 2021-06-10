<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Lista de Empresas</h4>
                    <p class="text-muted font-13 mb-4">
                        Hola
                    </p>
                    <div id="vue-root">
                        <bootstrap-4-datatable :columns="columns" :data="rows" :filter="filter" :per-page="perPage"></bootstrap-4-datatable>
                        <bootstrap-4-datatable-pager v-model="page" type="abbreviated"></bootstrap-4-datatable-pager>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            columns: [
                {label: 'Id', field: 'id'},
                {label: 'RUC', field: 'ruc'},
                {label: 'Razon Social', field: 'razon_social'},
                {label: 'Domicilio', field: 'domicilio_fiscal'}
            ],
            rows: [],
            page: 1,
            filter: '',
            perPage: 10,
        }
    },
    methods:{
        getEmpresas: function() {
            axios.get('/api/admin/empresas').then(function(response){
                this.rows = response.data;
            }.bind(this));
        }
    },
    created: function(){
        this.getEmpresas()
    }
}
</script>

<style scoped>

</style>
