<template>
    <div class="box container">
        <spinner v-if="loading" />
        <user v-else :user="user" />
    </div>
</template>

<script>
    import Spinner from './Spinner.vue'
    import User from './User.vue'

    export default{
        data() {
            return {
                loading: true,
                user: {},
            };
        },

        mounted() {
            github.get('users/gotrecillo').then(response => {
                this.user = response.data;
                this.loading = false;
            })
        },

        components:{
            Spinner,
            User,
        }
    }
</script>
