<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div id="success-message"></div>

            <div class="card">
                <div class="card-header">
                    <h4>
                        Student Data

                        <button 
                            type="button" 
                            class="btn btn-primary float-end" 
                            data-bs-toggle="modal"
                            data-bs-target="#add-student-modal"
                        >
                            Add Student
                        </button>
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>