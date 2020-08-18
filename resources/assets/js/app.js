
require('./bootstrap');

window.Vue = require('vue');

import PopperTooltip from 'tooltip.js';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.directive('tooltip', {
    bind(elem, bindings) {
        new PopperTooltip(elem, {
            placement: bindings.arg,
            title: bindings.value
        });
    }
});

import Tooltip from './components/Tooltip.vue';

Vue.component('tooltip', Tooltip);

const app = new Vue({
    el: '#app',

    mounted() {
        document.querySelectorAll('[data-tooltip]').forEach(elem => {
            new PopperTooltip(elem, {
                placement: elem.dataset.tooltipPlacement || 'top',
                title: elem.dataset.tooltip
            });
        });
    }
});

