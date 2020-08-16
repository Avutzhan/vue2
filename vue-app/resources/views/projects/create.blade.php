<!DOCTYPE html>
<html>
<head>

    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">
    <style type="text/css">
        body { padding-top: 40px; }
    </style>
</head>
<body>
<div id="app" class="container">
    @include('projects.list')

    <form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
        @csrf
        <div class="control">
            <label for="name" class="label">Project name:</label>

            <input type="text " id="name" name="name" class="input" v-model="form.name" >

            <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
        </div>

        <div class="control">
            <label for="description" class="label">Project description:</label>

            <input type="text " id="name" name="description" class="input" v-model="form.description" >

            <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
        </div>

        <div class="control">
            <button class="button is-primary" :disabled="form.errors.any()">Create</button>
        </div>
    </form>
</div>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@2.1.6/dist/vue.js"></script>
<script src="/js/app.js"></script>

</body>
</html>
