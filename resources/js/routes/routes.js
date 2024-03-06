import { createRouter, createWebHistory } from 'vue-router'

import Dashboard from '../pages/admin/Dashboard.vue'
import BookList from '../pages/admin/book/BookList.vue'
import AddBook from '../pages/admin/book/AddBook.vue'
import EditBook from '../pages/admin/book/EditBook.vue'

const routes = createRouter({
    history: createWebHistory(),
    routes: [
        // {
        //     name: "Dashboard",
        //     path: '/',
        //     component: Dashboard,
        // },
        // {
        //     name: "BookList",
        //     path: '/book',
        //     component: BookList,
        // },

        {
            path: '/',
            component: Dashboard, // A layout component for the book section
            children: [
                {
                    name: "Dashboard",
                    path: '',
                },
                {
                    name: "BookList",
                    path: 'book/index',
                    component: BookList,
                },
                {
                    name: "AddBook",
                    path: 'book/create',
                    component: AddBook,
                },
                {
                    name: "EditBook",
                    path: 'book/edit',
                    component: EditBook,
                },
            ]
        },
    ]
});

export default routes;
