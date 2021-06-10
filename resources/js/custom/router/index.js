import Vue from "vue";
import VueRouter from "vue-router";
import IndexEmpresas from "../components/IndexEmpresas";
import MostrarEmpresa from "../components/MostrarEmpresa";
import EmpresasIndex from "../components/EmpresasIndex";
import EmpresasSelect from "../components/EmpresasSelect";

const routes = [
    {
        path: '/admin/dashboard/index',
        component: IndexEmpresas
    },
    {
        path: '/admin/empresa/index',
        component: EmpresasIndex
    },
]

const router = new VueRouter({
    mode: 'history',
    routes
});

Vue.use(VueRouter);
export default router;
