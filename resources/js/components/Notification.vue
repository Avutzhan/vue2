<template>
    <div class="notification">
        <h1>test</h1>
        <h1 v-text="message"></h1>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'Hello World'
            };
        }
    }
</script>

<style>
    .notification { background: green; }
</style>
