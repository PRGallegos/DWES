function submitForm(event) {
    event.preventDefault();
    const formData = new FormData(document.getElementById('userForm'));
    const userId = document.getElementById('userId').value;

    fetch('process.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert(data.message);
                location.reload();
            } else {
                alert(data.message);
            }
        });
}

function editUser(id, name, email) {
    document.getElementById('userId').value = id;
    document.getElementById('name').value = name;
    document.getElementById('email').value = email;
    document.getElementById('submitBtn').textContent = 'Update User';
}

function deleteUser(id) {
    if (confirm('Are you sure you want to delete this user?')) {
        fetch(`process.php?delete=${id}`)
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert(data.message);
                    document.getElementById(`row-${id}`).remove();
                } else {
                    alert(data.message);
                }
            });
    }
}