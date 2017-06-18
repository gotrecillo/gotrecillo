<template>
    <div class="repositories-pane">
        <repository v-for="repository in repositories" :repository="repository" :key="repository.id"/>

        <a v-if="canLoadMore" v-on:click="loadMore()" class="button is-primary is-outlined">
            Load More
        </a>
        <a v-if="loading" class="button is-primary is-loading">
            Button
        </a>
    </div>
</template>

<script>
    import Repository from './Repository.vue'

    export default{
        props: ['repositoriesCount'],
        data() {
            return {
                loading: true,
                page: 1,
                repositories: []
            }
        },

        mounted() {
            github.get('users/gotrecillo/repos?sort=pushed&per_page=20').then(response => {
                this.repositories = response.data;
                this.loading = false;
            })
        },

        methods: {
            loadMore: function () {
                this.loading = true;

                github.get(`users/gotrecillo/repos?sort=pushed&per_page=20&page=${this.page + 1}`).then(response => {
                    this.repositories = this.repositories.concat(response.data);
                    this.loading = false;
                    this.page = this.page + 1;
                })
            }
        },
        computed: {
            canLoadMore: function () {
                return !this.loading && (this.repositories.length < this.repositoriesCount);
            }
        },
        components: {
            Repository,
        }
    }
</script>

