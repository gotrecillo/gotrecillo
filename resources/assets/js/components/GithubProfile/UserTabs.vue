<template>
    <tabs alignment="centered" animation="slide" :only-fade="false">
        <tab-pane :label="starsLabel" icon="fa fa-star">
            <stars :starsCount="starsCount" />
        </tab-pane>
        <tab-pane :label="repositoriesLabel" icon="fa fa-code">
            <repositories :reposCount="user.public_repos" />
        </tab-pane>
    </tabs>
</template>

<script>
import { Tabs, TabPane } from 'vue-bulma-tabs';
import Stars from './Stars';
import Repositories from './Repositories';

const getStarsFromHeaderLink = (link) => link.replace('<https://api.github.com/user/9203112/starred?per_page=1&page=2>; rel="next", <https://api.github.com/user/9203112/starred?per_page=1&page=', '')
                                             .replace('>; rel="last"', '')

export default {
    props: ['user'],
    data() {
        return {
            starsCount: '',
        }
    },
    components: {
        Tabs,
        TabPane,
        Stars,
        Repositories,
    },
    mounted() {
        github.get('users/gotrecillo/starred?per_page=1').then(response => {
           this.starsCount = getStarsFromHeaderLink(response.headers.link);
        })
    },
    computed: {
        starsLabel: function() {
            return `Stars  ${this.starsCount}`
        },
        repositoriesLabel: function() {
            return `Repositories  ${this.user.public_repos}`
        }
    }
}
</script>