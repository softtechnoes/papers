<template>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Create Question Paper</div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    Questions
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-info" @click="addNewQuestion">Add Question</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card text-white bg-primary mt-2" >
                                        <div class="card-header">
                                            <input type="text" class="form-control" placeholder="Type your question........">
                                        </div>
                                        <div class="card-body">
                                            
                                            <input type="radio" id="first-option" name="selector">
                                            <label for="first-option"><input type="text" class="form-control"></label>
                                            <input type="radio" id="f-option" name="selector">
                                            <label for="f-option"><input type="text" class="form-control"></label>
                                            <input type="radio" id="f-option" name="selector">
                                            <label for="f-option"><input type="text" class="form-control"></label>
                                            <input type="radio" id="f-option" name="selector">
                                            <label for="f-option"><input type="text" class="form-control"></label>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
