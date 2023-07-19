<!-- Modal -->
<form action="{{ route('task.destroy', $task->id) }}" method="post">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="deleteTaskModal{{ $task->id }}" tabindex="-1" role="dialog"
        aria-labelledby="deleteTaskModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this task?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Confirm delete</button>
                </div>
            </div>
        </div>
    </div>
</form>
