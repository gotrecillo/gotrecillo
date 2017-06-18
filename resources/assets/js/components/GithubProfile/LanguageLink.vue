<template>
    <span>
        <span class="repo-language-color" :style="{ 'background-color': color }"></span>
        <a :href="link" target="_blank">{{repo.language}}</a>
    </span>
</template>

<script>
    import moment from 'moment'
    import colors from './github-colors'

    export default{
        props: ['repo'],
        data() {
            return {
                colors
            }
        },
        computed: {
            date: function () {
                return moment(this.repo.pushed_at).fromNow(false);
            },
            color: function () {
                return _.get(this.colors, `${this.repo.language}.color`, '#000')
            },
            link: function() {
                return `https://github.com/trending?l=${this.repo.language}`
            }
        }
    }
</script>

