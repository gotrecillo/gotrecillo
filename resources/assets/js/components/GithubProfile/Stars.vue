<template>
    <div class="repositories-pane">
        <repository v-for="star in stars" :repository="star" :key="star.id"/>

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
        props: ['starsCount'],
        data() {
            return {
                loading: true,
                page: 1,
                stars: []
            }
        },

        mounted() {
            github.get('users/gotrecillo/starred?per_page=20').then(response => {
                this.stars = response.data;
                this.loading = false;
            })
        },

        methods: {
            loadMore: function () {
                this.loading = true;

                github.get(`users/gotrecillo/starred?per_page=20&page=${this.page + 1}`).then(response => {
                    this.stars = this.stars.concat(response.data);
                    this.loading = false;
                    this.page = this.page + 1;
                })
            }
        },
        computed: {
            canLoadMore: function () {
                return !this.loading && (this.stars.length < this.starsCount);
            }
        },
        components: {
            Repository,
        }
    }
</script>

