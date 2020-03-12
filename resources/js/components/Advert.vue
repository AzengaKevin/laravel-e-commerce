<template>
    <img class="glide__slide" v-bind:src="advert.image.url" alt="Image"/>
</template>

<script>
    export default {
        name: "Advert",
        props: ['advert']
    }
</script>

<style scoped>

</style>
