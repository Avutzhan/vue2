import Vue from 'vue';

Vue.component('coupon', {
    props: ['code'],

    template: `
        <input type="text" :value="code" @input="updateCode($event.target.value)" ref="input">
    `,

    data() {
      return {
          invalids: ['ALL', 'MALL', 'BALL']
      }
    },

    methods: {
        updateCode(code) {
            if (this.invalids.includes(code)) {
                alert('invalid coupon');

                this.$refs.input.value = code = '';
            }

            this.$emit('input', code);
        }
    }
});

new Vue({
    el: '#app',

    data: {
        coupon: 'FREEBITE'
    }
});
