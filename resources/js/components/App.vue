<template>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
                <h1>{{ msgGuests }}</h1>
            </div>
            <div class="col-md-6 col-xs-12 mb-4" v-for="post in postsList" :key="post.id">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">{{ post.title }}</h5>
                        <p class="card-text">{{ post.content }}</p>
                        <p class="card-text"><small class="text-muted">{{ post.author }}</small></p>
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
    name: "App",
    data() {
        return {
            msgGuests: "Pagina Guests",
            postsList: []
        };
    },
    mounted() {
        window.axios.get("/api/posts").then((resp)=>{
            this.postsList = resp.data;
        });
    }
};
</script>

<style>
</style>