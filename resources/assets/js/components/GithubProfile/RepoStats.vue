<template>
    <p>
        <language-link :repo="repo"/>
        <span class="icon is-small left-margin"><i class="fa fa-star"></i></span>
        {{repo.stargazers_count}}
        <span class="icon is-small left-margin"><i class="fa fa-code-fork"></i></span>
        {{repo.forks_count}}
        <span class="left-margin"> Updated {{date}} </span>
    </p>
</template>

<script>
    import moment from 'moment'
    import LanguageLink from './LanguageLink.vue'

    export default{
        props: ['repo'],
        computed: {
            date: function () {
                return moment(this.repo.pushed_at).fromNow(false);
            },
        },
        components: {
            LanguageLink,
        }
    }
</script>

