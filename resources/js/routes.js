const Home =()=> import('./components/Home.vue');

// componentes para el CRUD
const Mostrar = ()=> import('./components/pastel/Mostrar.vue');
const Crear = ()=> import('./components/pastel/Crear.vue');
const Editar = ()=> import('./components/pastel/Editar.vue');

export const routes = [
    {
        name:'home',
        path: '/',
        component:Home
    },
    {
        name:'mostrarPasteles',
        path: '/pasteles',
        component:Mostrar
    },
    {
        name:'crearPasteles',
        path: '/crear',
        component:Crear
    },
    {
        name:'editarPasteles',
        path: '/editar/:id',
        component:Editar
    }
];