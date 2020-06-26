<template>
    <div>
        <h1>Create A article</h1>
        <form @submit.prevent="addArticle">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>article name:</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="article.name"
                        />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>article price:</label>
                        <input
                            type="number"
                            step="0.01"
                            class="form-control"
                            v-model="article.price"
                        />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>article Body:</label>
                        <textarea
                            class="form-control"
                            v-model="article.description"
                            rows="5"
                        ></textarea>
                    </div>
                </div>
            </div>
            <br />
            <div class="form-group">
                <button class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            article: {}
        };
    },
    methods: {
        addArticle() {
            let uri = "http://localhost:8000/api/articles/create";
            this.axios.post(uri, this.article).then(response => {
                this.$router.push({ name: "articles" });
            });
        }
    }
};
</script>
