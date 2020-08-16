import Vue from  'vue';
import axios from  'axios';
import Form from  './core/Form';

import Example from './components/Example';

window.axios = axios;
window.Form = Form;

new Vue({
    el: '#app',

    components: {
        Example
    },

    data: {
        form: new Form({
            name: '',
            description: ''
        })
    },

    methods: {
        onSubmit() {
            this.form.post('/projects')
                .then(response => alert('Wahoo!'));
        }
    }
});

//во второй части я зашел в гитхаб той серии и решил просто чекнуть что как и в итоге переписал код оттуда и оказалось что там был код и за 3 часть так что я просто посмотрел видос

