<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel session</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body class="bg-gray-300">

<div id="app">
    @include('layout.navbar')

    @include('tasks')

</div>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
{{--<script src="../js/app.js"></script>--}}
<script>
    new Vue({
        el: '#app',
        data: {
            task: '',
            tasks: []
        },
        methods: {

            getTasks() {
                axios.get('/api/tasks').then(response => {
                    this.tasks = response.data
                })
            },
            deleteTask(id) {

                axios.delete(`/task/${id}`).then(response => {
                    console.log(response)
                    location.reload()
                }).catch(function (error) {
                    // handle error
                    console.log(error);
                })
            }
        },
        mounted() {
            this.getTasks()
        }
    })
</script>
</body>
</html>