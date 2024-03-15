import { defineStore } from "pinia";


export const useCategoryStore = defineStore('categoryStore',{
    state:() =>({
        books:[],
    }),
    getters:{

    },
    actions:{
        getBook(){
            fetch('/book')
                .then(responce => responce.json())
                .then( data =>{
                    console.log(data);
                    this.books = data
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        },
        // async getTask(){
        //     this.loading = true
        //     const res = await fetch('http://localhost:3000/tasks')
        //     const data = await res.json()
        //     this.tasks = data
        //     this.loading = false
        // },
    },
    mounted() {
        this.getBook();
    }

})
