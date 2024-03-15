<template>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>FORM EXAMPLES</h2>
        </div>

        <form @submit.prevent="bookStore.addBook" enctype="multipart/form-data">
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ADD NEW BOOK
                            </h2>
                        </div>
                        <div class="body">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="title" name="title" class="form-control" placeholder="add book name">
                                </div>
                                <div class="form-line">
                                    <input type="text" id="author" name="author" class="form-control" placeholder="add author name">
                                </div>
                                <div class="form-line">
                                    <input type="text" id="language" name="language" class="form-control" placeholder="add language">
                                </div>
                                <div class="form-line">
                                    <input type="text" id="country" name="country" class="form-control" placeholder="add country name">
                                </div>
                                <div class="form-line">
                                    <input type="text" id="edition" name="edition" class="form-control" placeholder="add edition">
                                </div>
                                <div class="form-line">
                                    <input type="text" id="pages" name="pages" class="form-control" placeholder="add page number">
                                </div>
                                <div class="form-line">
                                    <input type="text" id="quantity" name="quantity" class="form-control" placeholder="add quantity">
                                </div>
                                <div class="form-line">
                                    <input type="text" id="taka" name="taka" class="form-control" placeholder="add price">
                                </div>

                            </div>
                            <legend>category</legend>
                                    <div class="form-check d-flex flex-wrap gap-3 select_flex">
                                        <input class="form-check-input" type="checkbox" value="one" id="one" name="category[]">
                                        <label class="form-check-label" for="one">
                                            one
                                        </label>
                                        <input class="form-check-input" type="checkbox" value="two" id="two" name="category[]">
                                        <label class="form-check-label" for="two">
                                            two
                                        </label>
                                        <input class="form-check-input" type="checkbox" value="three" id="three" name="category[]">
                                        <label class="form-check-label" for="three">
                                            three
                                        </label>
                                        <input class="form-check-input" type="checkbox" value="four" id="four" name="category[]">
                                        <label class="form-check-label" for="four">
                                            four
                                        </label>
                                        <input class="form-check-input" type="checkbox" value="five" id="five" name="category[]">
                                        <label class="form-check-label" for="five">
                                            five
                                        </label>
                                        <input class="form-check-input" type="checkbox" value="six" id="six" name="category[]">
                                        <label class="form-check-label" for="six">
                                            six
                                        </label>
                                    </div>
                            <div class="form-group mt-3">
                                <div class="form-control">
                                    <label for="image" class="form-label">Upload Image</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                </div>


                            </div>
                            <br>
                            <div class="form-group">
                                <input type="checkbox" id="status" name="status" class="filled-in" >
                                <label for="status">Publish</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Write Summery
                            </h2>
                        </div>
                        <div class="body">
                            <textarea class="width_100" id="summery" name="summery" rows="10" cols="50" ></textarea>
                            <br>
                                <a href="" class="btn btn-danger waves-effect m-t-15">BACK</a>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
        </form>
    </div>
</section>

</template>

<script>
import { useBookStore } from '../../../stores/BookStore'
export default {
    setup(){
        const bookStore = useBookStore()
        return { bookStore }
    }

}
</script>

<style>
    .select_flex{
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }
    .width_100{
        width: 100%;
        padding: 10px;
    }
</style>
