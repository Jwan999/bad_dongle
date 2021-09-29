<div class="flex justify-center mt-10">
    <div class="w-5/12">
        <form action="/" method="POST">
            @csrf
            <input name="task" @keyup.enter="addTasks" v-model="task" placeholder="Tasks..." type="text"
                   class="w-full rounded-md border border-blue-200 focus:border-blue-500 px-3 py-2">
            <button type="submit">
                submit
            </button>
        </form>

    </div>

</div>
<div class="flex justify-center mt-5 w-full">
    <div class="w-5/12">
        <h1 v-if="tasks.length > 0" class="my-2">
            Tasks
        </h1>

        {{--@for($tasks as $task)--}}
        <div v-for="task in tasks"
             class="w-full bg-white px-3 py-2 rounded-md border border-blue-500 flex justify-between my-2">
            {{--           {{task}}--}}
            @{{task.task}}
            {{--            <form method="delete" :action="`/task/${index}`">--}}
            {{--                @csrf--}}
            <button @click="deleteTask(task.id)" class="bg-red-200 text-sm text-red-500 px-2 py-1 rounded-md">
                delete
            </button>

            {{--            </form>--}}

        </div>
    </div>
    {{--@endfor--}}
</div>
