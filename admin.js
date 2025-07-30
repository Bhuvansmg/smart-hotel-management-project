document.querySelectorAll('.view-more').forEach(button => {
    button.addEventListener('click', function () {
        const id = this.getAttribute('data-id');

        fetch(`staff.php?id=${id}`)
            .then(response => response.text())
            .then(data => {
                document.getElementById('modal-content').innerHTML = data; // Load structured content
                document.getElementById('details-modal').style.display = 'block'; // Show modal
                document.getElementById('modal-overlay').style.display = 'block'; // Show overlay
            });
    });
});

// Function to close the modal
function closeModal() {
    document.getElementById('details-modal').style.display = 'none';
    document.getElementById('modal-overlay').style.display = 'none';
}