// all admin panel JavaScript

// script for table of content
document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('tableid-container');
    const addButton = document.getElementById('add-tableid');

    addButton.addEventListener('click', function () {
        const newIndex = container.querySelectorAll('.tableid-input').length;
        const newInput = document.createElement('div');
        newInput.className = 'tableid-input';
        newInput.innerHTML = `
            <label for="tableofcontent_${newIndex}">Table of Content Item:</label>
            <input type="text" class="regular-text" id="tableofcontent_${newIndex}" name="tableofcontent[]" value="">
            <span class="remove-tableid" data-index="${newIndex}">X</span>`;
        container.appendChild(newInput);
    });

    container.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-tableid')) {
            const indexToRemove = event.target.getAttribute('data-index');
            const inputToRemove = document.getElementById(`tableofcontent_${indexToRemove}`);
            if (inputToRemove) {
                inputToRemove.parentNode.remove();
            }
        }
    });
});


// script for need to be good item for job board
document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('needbegood-container');
    const addButton = document.getElementById('add-needbegood');

    addButton.addEventListener('click', function () {
        const newIndex = container.querySelectorAll('.needbegoodid').length;
        const newInput = document.createElement('div');
        newInput.className = 'needbegoodid';
        newInput.innerHTML = `
            <label for="jobneedbegood_${newIndex}">Good at item:</label>
            <input type="text" class="regular-text" placeholder="Add item here" id="jobneedbegood_${newIndex}" name="jobneedbegood[]" value="">
            <span class="remove-needbegood" data-index="${newIndex}">X</span>`;
        container.appendChild(newInput);
    });

    container.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-needbegood')) {
            const indexToRemove = event.target.getAttribute('data-index');
            const inputToRemove = document.getElementById(`jobneedbegood_${indexToRemove}`);
            if (inputToRemove) {
                inputToRemove.parentNode.remove();
            }
        }
    });
});
