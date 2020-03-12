<template>
    <div class="w-3/5 rounded glide">
        <div class="glide__track" data-glide-el="track">
            <div class="glide__slides">
                <Advert v-bind:key="advert.id" v-bind:advert="advert" v-for="advert in adverts"/>
            </div>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">Prev</button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">Next</button>
        </div>
    </div>
</template>

<script>
    import Glide, from '@glidejs/glide'
    import Advert from "./Advert";

    export default {
        components: {Advert},
        props: ['adverts'],
        mounted() {
            new Glide('.glide', {
                type: 'carousel'
            }).mount();
            console.table(this.adverts);
        }
    }
</script>

<style scoped>

</style>
