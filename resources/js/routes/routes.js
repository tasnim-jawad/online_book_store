import { createRouter, createWebHashHistory } from 'vue-router'

import App from '../App.vue'
import Dashboard from '../pages/admin/Dashboard.vue'
import IndexBook from '../pages/admin/book/Index.vue'
import CreateBook from '../pages/admin/book/Create.vue'
import EditBook from '../pages/admin/book/Edit.vue'
import ShowBook from '../pages/admin/book/Show.vue'


const routes = createRouter({
    history: createWebHashHistory(),
    routes: [
        {

            path: '/',
            component: App,
            children:[
                {
                    name: "Dashboard",
                    path: 'dashboard',
                    component: Dashboard,
                },
                {
                    name:'IndexBook',
                    path: 'book/index',
                    component: IndexBook,
                },
                {
                    name:'CreateBook',
                    path: 'book/create',
                    component: CreateBook,
                },
                {
                    name:'EditBook',
                    path: 'book/edit',
                    component: EditBook,
                },
                {
                    name:'ShowBook',
                    path: 'book/show',
                    component: ShowBook,
                },
            ]
        },
        // {
        //     name: "BookList",
        //     path: '/book',
        //     component: BookList,
        // },

        // {
        //     path: '/',
        //     component: Dashboard,
        //     children: [
        //         {
        //             name: "Dashboard",
        //             path: '',
        //         },
        //         {
        //             name: "BookList",
        //             path: 'book/index',
        //             component: BookList,
        //         },
        //         {
        //             name: "AddBook",
        //             path: 'book/create',
        //             component: AddBook,
        //         },
        //         {
        //             name: "EditBook",
        //             path: 'book/edit',
        //             component: EditBook,
        //         },
        //     ]
        // },
    ]
});

export default routes;
