document.getElementById('toggleButton').addEventListener('click', function(){
    var items = document.getElementById('items');
    if (items.classList.contains('hidden')) {
        items.classList.remove('hidden');
    } else {
        items.classList.add('hidden');
}});


document.getElementById('pdfUpload').addEventListener('change', function(event) {
    const fileInput = event.target;
    const fileNameDisplay = document.getElementById('fileName');
    const fileName = fileInput.files.length > 0 ? fileInput.files[0].name : "No file selected";
    fileNameDisplay.textContent = "Selected file: " + fileName;
});


document.getElementById('submitIcon').addEventListener('click', function() {
    document.getElementById('uploadForm').submit();
});

function toggleCheckbox(selectedId) {
    const checkboxes = ['checkbox1', 'checkbox2'];
    checkboxes.forEach(id => {
        if (id !== selectedId) {
            document.getElementById(id).checked = false;
        }
    });
}
function toggleCheckbox(selectedId) {
    const checkboxes = ['checkbox3', 'checkbox4'];
    checkboxes.forEach(id => {
        if (id !== selectedId) {
            document.getElementById(id).checked = false;
        }
    });
}