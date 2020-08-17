import Vue from 'vue';

let store = {
    user: {
        name: 'Mohn Doe'
    }
};

new Vue({
    el: '#one',

    data: {
        foo: 'bar',
        shared: store
    }
});

new Vue({
    el: '#two',

    data: {
        foo: 'other bar',
        shared: store
    }
});
