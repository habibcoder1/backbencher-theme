// all admin panel JavaScript

// script for job good item
document.addEventListener('DOMContentLoaded', function () {
    const gdcontainer = document.getElementById('needbegood-container');
    const gdaddButton = document.getElementById('add-needbegood');

    if(gdcontainer && gdaddButton){
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
    }
    
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


// script for service/project problems
document.addEventListener('DOMContentLoaded', function () {
    const problemContainer = document.getElementById('serviceproblem-container');
    const addProblemButton = document.getElementById('add-problem');

    if (problemContainer && addProblemButton) {
        addProblemButton.addEventListener('click', function () {
            const newIndex = problemContainer.querySelectorAll('.serviceproblemid').length;
            const newInput = document.createElement('div');
            newInput.className = 'serviceproblemid';
            newInput.innerHTML = `
                <label for="service-problemitemtitle_${newIndex}">Problem item:</label>
                <input type="text" class="regular-text" placeholder="Problem item title" id="service-problemitemtitle_${newIndex}" name="service-problemitemtitle[]" value="">
                <span class="remove-problemitems remove-icon" data-index="${newIndex}">X</span>
                <textarea name="problemitem-content[]" id="problemitem-content_${newIndex}" placeholder="Problem content"></textarea> `;
            problemContainer.appendChild(newInput);
        });

        problemContainer.addEventListener('click', function (event) {
            if (event.target.classList.contains('remove-problemitems')) {
                const indexToRemove = event.target.getAttribute('data-index');
                const inputToRemove = document.getElementById(`service-problemitemtitle_${indexToRemove}`);
                const textareaToRemove = document.getElementById(`problemitem-content_${indexToRemove}`);

                if (inputToRemove && textareaToRemove) {
                    inputToRemove.parentNode.remove();
                    textareaToRemove.parentNode.remove();
                }
            }
        });
    }
});

// script for service/project solutions
document.addEventListener('DOMContentLoaded', function () {
    const solutionContainer = document.getElementById('servicesolution-container');
    const addSolutionButton = document.getElementById('add-solution');

    if (solutionContainer && addSolutionButton) {
        addSolutionButton.addEventListener('click', function () {
            const newIndex = solutionContainer.querySelectorAll('.servicesolutionid').length;
            const newInput = document.createElement('div');
            newInput.className = 'servicesolutionid';
            newInput.innerHTML = `
                <label for="service-solutionitemtitle_${newIndex}">Solution item:</label>
                <input type="text" class="regular-text" placeholder="Solution item title" id="service-solutionitemtitle_${newIndex}" name="service-solutionitemtitle[]" value="">
                <span class="remove-solutionitems remove-icon" data-index="${newIndex}">X</span>
                <textarea name="solutionitem-content[]" id="solutionitem-content_${newIndex}" placeholder="Solution content"></textarea>`;
            solutionContainer.appendChild(newInput);
        });

        solutionContainer.addEventListener('click', function (event) {
            if (event.target.classList.contains('remove-solutionitems')) {
                const indexToRemove = event.target.getAttribute('data-index');
                const inputToRemove = document.getElementById(`service-solutionitemtitle_${indexToRemove}`);
                const textareaToRemove = document.getElementById(`solutionitem-content_${indexToRemove}`);

                if (inputToRemove && textareaToRemove) {
                    inputToRemove.parentNode.remove();
                    textareaToRemove.parentNode.remove();
                }
            }
        });
    }
});
