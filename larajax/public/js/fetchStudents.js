function fetchStudents() {
    fetch("/students/fetch", {
        method: "GET",
        headers: {
            'Content-Type': 'application/json',
        }
    })
    .then(data => {
        return data.json();
    })
    .then(response => {
        const students = response.students;

        const fields = ["id", "name", "course"];

        const buttons = [
            { text: "Edit", style: "btn-primary", type: "edit" },
            { text: "Delete", style: "btn-danger", type: "delete" },
        ];

        const tbody = document.querySelector("tbody");
    
        tbody.innerHTML = "";

        const fragment = new DocumentFragment();
    
        for (let student of students) {
            let line = document.createElement("tr");

            for (let field of fields) {
                let tdField = document.createElement("td");

                tdField.textContent = student[field];

                line.appendChild(tdField);

                fragment.appendChild(line);
            }

            for (let button of buttons) {
                let tdButton = document.createElement("td");

                let crudButton = document.createElement("button");
                crudButton.textContent = button.text;
                crudButton.className = `btn btn-primary btn-sm ${button.style}`;
                crudButton.value = student.id;

                if (button.type == "edit")
                    crudButton.setAttribute("onclick", "updateStudent(event)");
                else
                    crudButton.setAttribute("onclick", "deleteStudent(event)");

                tdButton.appendChild(crudButton);

                line.appendChild(tdButton);

                fragment.appendChild(line);
            }
    
            tbody.appendChild(fragment);
        }
    })
    .catch(error => console.log(error));
}

fetchStudents();