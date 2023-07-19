<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task list</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <div class="py-5 text-center">
            <h1>Task List</h1>
        </div>
        <a href="#" class="btn btn-success my-4" data-toggle="modal" data-target="#addTaskModal">
            Add a task
        </a>
        <table class="table" aria-describedby="task table">
            <thead>
                <tr>
                    <th scope="col" class="task-row">Task</th>
                    <th scope="col" class="action"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tasks as $task)
                    <tr>
                        <td>{{ $task->task }}</td>
                        <td>
                            <a href="#" class="btn btn-info" data-toggle="modal"
                                data-target="#editTaskModal{{ $task->id }}">
                                Edit
                            </a>
                            <a href="#" class="btn btn-danger" data-toggle="modal"
                                data-target="#deleteTaskModal{{ $task->id }}">
                                Delete
                            </a>
                        </td>
                    </tr>

                    {{-- Action modals  --}}
                    @include('includes.edit-task-modal')
                    @include('includes.delete-task-modal')
                @empty
                    <tr>
                        <td colspan="3" class="text-center">
                            <span>Tasklist empty!</span>
                        </td>
                    </tr>
                @endforelse
            </tbody>

            {{-- Pagination --}}

            @include('includes.add-task-modal')
        </table>

        <div class="d-flex flex row align-items-center justify-content-center w-100 mt-4">
            {{ $tasks->onEachSide(5)->links() }}
        </div>
    </div>

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
