<template>
    <div>

        <slot></slot>

    </div>
</template>

<script>
    import Flickity from 'flickity';



    export default {
        props: {
            wrapAround: { default: true },
            autoPlay: { default: true }
        },

        mounted() {
            new Flickity(this.$el, {
                wrapAround: this.wrapAround,
                autoPlay: this.autoPlay,
                cellAlign: 'left',
                contain: true
            })
        }
    }
</script>

<style>
    @import "https://unpkg.com/flickity@2/dist/flickity.min.css";
</style>