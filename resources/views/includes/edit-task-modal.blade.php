<!-- Modal -->
<form action="{{ route('task.update', $task->id) }}" method="post">
    @csrf
    @method('put')
    <div class="modal fade" id="editTaskModal{{ $task->id }}" tabindex="-1" role="dialog"
        aria-labelledby="editTaskModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="task">Task</label>
                        <input type="text" name="task" id="task" class="form-control"
                            value="{{ $task->task }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
