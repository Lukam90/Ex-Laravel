{{-- Delete Modal --}}

<div class="modal fade" id="delete-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Student Data</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <h4>Confirm to Delete Data ?</h4>

                <input type="hidden" id="delete-id">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
                <button type="button" id="delete-student" class="btn btn-primary">Yes Delete</button>
            </div>
        </div>
    </div>
</div>