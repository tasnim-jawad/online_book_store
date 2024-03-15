<template>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <router-link :to="{ name: 'CreateBook' }" class="btn btn-primary waves-effect">
                <i class="material-icons">add</i>
                <span>Add Book</span>
            </router-link>
        </div>

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ALL BOOK <span class="badge bg-blue"></span>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>srl#</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>category</th>
                                        <th>language</th>
                                        <th>country</th>
                                        <th>edition</th>
                                        <th>pages</th>
                                        <th>summary</th>
                                        <th>image</th>
                                        <th>quantity</th>
                                        <th>taka</th>
                                        <th>Status</th>
                                        <th>Createed-at</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>srl#</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>category</th>
                                        <th>language</th>
                                        <th>country</th>
                                        <th>edition</th>
                                        <th>pages</th>
                                        <th>summary</th>
                                        <th>image</th>
                                        <th>quantity</th>
                                        <th>taka</th>
                                        <th>Status</th>
                                        <th>Createed-at</th>
                                        <th>action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr v-for="(book, index) in bookStore.books" :key="index">
                                        <td>{{ index + 1}}</td>
                                        <td>{{book.title}}</td>
                                        <td>{{book.author}}</td>
                                        <td>{{book.category}}</td>
                                        <td>{{book.language}}</td>
                                        <td>{{book.country}}</td>
                                        <td>{{book.edition}}</td>
                                        <td>{{book.pages}}</td>
                                        <td>{{bookStore.limit_sentence(book.summary)}}</td>
                                        <td>{{book.image}}</td>
                                        <td>{{book.quantity}}</td>
                                        <td>{{book.taka}}</td>
                                        <td>{{book.status}}</td>
                                        <td>{{book.createed-at}}</td>
                                        <td>edit delete</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>


</template>

<script>
import { useBookStore } from '../../../stores/BookStore'


export default {
    setup(){
        const bookStore = useBookStore()
        bookStore.getBook()
        return { bookStore }
    }
}
</script>

<style>

</style>
