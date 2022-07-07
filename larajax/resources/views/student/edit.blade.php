{{-- Edit Modal --}}

<div class="modal fade" id="edit-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit & Update Student Data</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <input type="hidden" id="student-id" />

                <div class="form-group mb-3">
                    <label for="name">Full Name</label>

                    <input type="text" name="name" id="edit-name" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="course">Course</label>

                    <input type="text" name="course" id="edit-course" class="form-control">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                <button type="submit" id="update-student" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>