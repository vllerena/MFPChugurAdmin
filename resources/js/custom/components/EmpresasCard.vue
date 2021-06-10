<template>
    <div class="row">
        <div class="col-lg-4" v-for="empresa in this.empresas" v-bind:key="empresa.id">
            <div class="card-box bg-pattern">
                <div class="text-center">
                    <img v-bind:src="empresa.logo_path" alt="logo" class="avatar-xl rounded-circle mb-3" />
                    <h4 class="mb-1 font-20">{{empresa.razon_social}}</h4>
                    <p class="text-muted  font-14">{{empresa.domicilio_fiscal}}</p>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-teal">Dashboard</a>
                    <a href="#" class="btn btn-tealdark">Ver sucursales</a>
                </div>
                <div class="row mt-4 text-center">
                    <div class="col-6">
                        <h5 class="font-weight-normal text-muted">Razon Social</h5>
                        <h4>{{empresa.razon_social}}</h4>
                    </div>
                    <div class="col-6">
                        <h5 class="font-weight-normal text-muted">RUC</h5>
                        <h4>{{empresa.ruc}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        axios.get('/api/admin/empresas')
            .then(response => {
                this.$store.commit("AGREGAR_EMPRESAS", response.data);
            })
    },
    computed: {
        empresas() {
            return this.$store.state.empresas;
        }
    }
}
</script>

<style scoped>

</style>
