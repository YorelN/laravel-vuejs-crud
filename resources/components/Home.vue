<template>
    <div>
        <h1>Posts</h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link :to="{ name: 'create' }" class="btn btn-primary"
                    >Create Article</router-link
                >
            </div>
        </div>
        <br />

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="article in articles" :key="article.id">
                    <td>{{ article.id }}</td>
                    <td>{{ article.title }}</td>
                    <td>{{ article.body }}</td>
                    <td>
                        <router-link
                            :to="{ name: 'edit', params: { id: article.id } }"
                            class="btn btn-primary"
                            >Edit</router-link
                        >
                    </td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            posts: []
        };
    },
    created() {
        let uri = "http://localhost:8000/api/article";
        this.axios.get(uri).then(response => {
            this.posts = response.data.data;
        });
    }
};
</script>
