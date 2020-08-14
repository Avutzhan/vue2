Vue.component('task-list', {
    template: '<div><task v-for="task in tasks">{{ task.task }}</task></div>',

    data() {
        return {
            tasks: [
                { task: 'go to shop', complete: true },
                { task: 'go to mall', complete: false },
                { task: 'go to bazar', complete: true },
                { task: 'go to toilet', complete: false },
            ]
        }
    }
});

Vue.component('task', {
    template: '<li><slot></slot></li>'
});

new Vue({
    el: '#root'
});