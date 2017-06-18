<template>
    <div class="content repository">
        <h3><a target="_blank" :href="repository.html_url">{{repository.owner.login}} / <b>{{repository.name}}</b></a></h3>
        <p>{{repository.description}}</p>
        <repo-stats :repo="repository" />
        <hr>
    </div>
</template>

<script>
    import moment from 'moment'
    import RepoStats from './RepoStats.vue'

    export default{
        props: ['repository'],
        computed: {
            date: function () {
                return moment(this.repository.pushed_at).fromNow(false);
            },
        },
        components: {
            RepoStats,
        }
    }
</script>

