<template>
    <div class="w-3/5 rounded glide">
        <div class="glide__track" data-glide-el="track">
            <div class="glide__slides">
                <Advert v-bind:key="advert.id" v-bind:advert="advert" v-for="advert in adverts"/>
            </div>
        </div>
        <div class="glide__bullets" data-glide-el="controls[nav]">
            <button v-for="(advert, index) in adverts" class="glide__bullet" :data-glide-dir="index"></button>
        </div>
    </div>
</template>

<script>
    import Glide, { Autoplay } from '@glidejs/glide/dist/glide.modular.esm'
    import Advert from "./Advert";

    export default {
        components: {Advert},
        props: ['adverts'],
        mounted() {
            const glide = new Glide('.glide', {
                type: 'carousel',
                autoplay: 5000
            }).mount({ Autoplay });

            console.table(this.adverts);
        }
    }
</script>

<style scoped>

</style>
