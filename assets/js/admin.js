// all admin panel JavaScript

// script for table of content
document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('tableid-container');
    const addButton = document.getElementById('add-tableid');

    if(container && addButton){

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

    }

    
});


// script for job good item
document.addEventListener('DOMContentLoaded', function () {
    const gdcontainer = document.getElementById('needbegood-container');
    const gdaddButton = document.getElementById('add-needbegood');

    if(gdcontainer && gdaddButton){

    }
    gdaddButton.addEventListener('click', function () {
        const newIndex = gdcontainer.querySelectorAll('.needbegoodid').length;
        const newInput = document.createElement('div');
        newInput.className = 'needbegoodid';
        newInput.innerHTML = `
            <label for="jobneedbegood_${newIndex}">Good at item:</label>
            <input type="text" class="regular-text" placeholder="Add item here" id="jobneedbegood_${newIndex}" name="jobneedbegood[]" value="">
            <span class="remove-needbegood" data-index="${newIndex}">X</span>`;
        gdcontainer.appendChild(newInput);
    });

    gdcontainer.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-needbegood')) {
            const indexToRemove = event.target.getAttribute('data-index');
            const inputToRemove = document.getElementById(`jobneedbegood_${indexToRemove}`);
            if (inputToRemove) {
                inputToRemove.parentNode.remove();
            }
        }
    });
});

// script for job skills
document.addEventListener('DOMContentLoaded', function () {
    const skillContainer = document.getElementById('skill-container');
    const skillAddButton = document.getElementById('add-jobskill');

    if (skillContainer && skillAddButton) {
        skillAddButton.addEventListener('click', function () {
            const newIndex = skillContainer.querySelectorAll('.jobskillid').length;
            const newInput = document.createElement('div');
            newInput.className = 'jobskillid';
            newInput.innerHTML = `
                <label for="jobskill_${newIndex}">Skill Item:</label>
                <input type="text" class="regular-text" placeholder="Add skill here" id="jobskill_${newIndex}" name="jobskill[]" value="">
                <span class="remove-skill" data-index="${newIndex}">X</span>`;
            skillContainer.appendChild(newInput);
        });

        skillContainer.addEventListener('click', function (event) {
            if (event.target.classList.contains('remove-skill')) {
                const indexToRemove = event.target.getAttribute('data-index');
                const inputToRemove = document.getElementById(`jobskill_${indexToRemove}`);
                if (inputToRemove) {
                    inputToRemove.parentNode.remove();
                }
            }
        });
    }
});

// script for job benefit
document.addEventListener('DOMContentLoaded', function () {
    const benefitContainer = document.getElementById('benefit-container');
    const benefitAddButton = document.getElementById('add-jobbenefit');

    if (benefitContainer && benefitAddButton) {
        benefitAddButton.addEventListener('click', function () {
            const newIndex = benefitContainer.querySelectorAll('.jobbenefitid').length;
            const newInput = document.createElement('div');
            newInput.className = 'jobbenefitid';
            newInput.innerHTML = `
                <label for="jobbenefit_${newIndex}">Benefit Item:</label>
                <input type="text" class="regular-text" placeholder="Add benefit here" id="jobbenefit_${newIndex}" name="jobbenefit[]" value="">
                <span class="remove-benefit" data-index="${newIndex}">X</span>`;
            benefitContainer.appendChild(newInput);
        });

        benefitContainer.addEventListener('click', function (event) {
            if (event.target.classList.contains('remove-benefit')) {
                const indexToRemove = event.target.getAttribute('data-index');
                const inputToRemove = document.getElementById(`jobbenefit_${indexToRemove}`);
                if (inputToRemove) {
                    inputToRemove.parentNode.remove();
                }
            }
        });
    }
});

