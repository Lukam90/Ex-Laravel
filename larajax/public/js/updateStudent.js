function updateStudent(e) {
    e.preventDefault();

    let id = e.target.value;

    let data = {
        'name': document.querySelector('#edit-name').value,
        'course': document.querySelector('#edit-course').value,
    };

    fetch(`/students/update/${id}`, {
        method: "PUT",
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute("content")
        },
        body: JSON.stringify(data),
    })
    .then(data => {
        return data.json();
    })
    .then(response => {
        const successMsg = document.querySelector("#success-message");

        if (response.status == 200) {
            successMsg.classList.add("alert");
            successMsg.classList.add("alert-success");
            successMsg.textContent = response.message;

            fetchStudents();
        }
    })
    .catch(error => console.log(error));
}