<template>
    <div class="content">
        <img class="github-profile-logo github-user-avatar" :src="user.avatar_url" />
        <h1 class="has-text-centered"><a :href="user.html_url">{{user.login | capitalize}}</a></h1>
    </div>
</template>

<script>
    export default{
        props: ['user'],
    }
</script>

