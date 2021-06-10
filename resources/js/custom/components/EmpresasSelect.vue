<template>
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Selecciona una empresa</label>
                                <select class="form-control">
                                    <slot></slot>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Select2 from "select2"
export default {
    name: "EmpresasSelect",
    props : [ 'options', 'value', 'name'],
    mounted(){
        var vm = this;
        $(this.$el).select2({
            data: this.options
        })
        .val(this.value)
        .trigger('change')
        .on('change', function (){
            vm.$emit('input', this.value);
        })
    },
    watch: {
        value: function (param){
            $(this.$el).val(param).trigger('change');
        },
        options: function (param) {
            $(this.$el).select2({
                data: param
            });
        },
        destroyed: function () {
            $(this.$el).off().select2('destroy');
        }
    }
}
</script>

<style scoped>
    select{
        width: 100%;
    }
</style>
