import Vue from "vue";
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
   state: {
       empresas: [],
   },
    mutations: {
       AGREGAR_EMPRESAS(state, empresas){
           state.empresas = empresas;
       }
    },
    getters: {
       obtenerEmpresa: state => {
           return state.empresas;
       }
    }
});
