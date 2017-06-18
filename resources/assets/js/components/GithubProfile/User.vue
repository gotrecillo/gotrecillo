<template>
    <div>
        <user-header :user="user" />
        <user-tabs :user="user" />
    </div>
</template>

<script>
    import UserHeader from './UserHeader.vue'
    import UserTabs from './UserTabs.vue'

    export default{
        props: ['user'],

        components:{
            UserHeader,
            UserTabs,
        }
    }
</script>

