import { defineStore } from "pinia";

export const useBookStore = defineStore('bookStore',{
    state:() =>({
        books:[],
    }),
    getters:{
        isBooksEmpty(state) {
            return state.books.length === 0;
        }
    },
    actions:{
        async getBook() {
            try {
                const response = await fetch('/book');
                if (!response.ok) {
                    throw new Error('Failed to fetch books');
                }
                const data = await response.json();
                this.books = data;
            } catch (error) {
                console.error('Error:', error);
            }
        },
        limit_sentence(sentence) {
            const maxLength = 20;
            if (sentence.length <= maxLength) {
                return sentence;
            } else {
                return sentence.substring(0, maxLength) + '...';
            }
        },
        addBook(event){
            console.log("submited");
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            let formData = new FormData(event.target);
            fetch('/book',{
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                      },
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    console.log(data);
                })
        }

    }
})
