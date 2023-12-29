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


// script for project problems
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

// script for project solutions
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


// Image upload for default post banner //
let postBannerImgUploader;
jQuery('#bbbs-post-bannerimg-metabox .default_post_banner-img .add-image').on('click', function(e) {
    e.preventDefault();

    if (postBannerImgUploader){
        postBannerImgUploader.open();
        return;
    }

    postBannerImgUploader = wp.media.frames.file_frame = wp.media({
        title: 'Choose Banner Image',
        button: {
            text: 'Choose Image'
        },
        multiple: false
    });

    postBannerImgUploader.on('select', function() {
        var attachment = postBannerImgUploader.state().get('selection').first().toJSON();
        jQuery('#defaultpost_banner-image').val(attachment.url);  //input hidden
        jQuery('#defaultpostbannerimagetag').attr('src', attachment.url); //img tag
    });

    postBannerImgUploader.open();
});
// Remove Image
jQuery('#bbbs-post-bannerimg-metabox .add_remove-btn .remove-image').on('click', function(e) {
    e.preventDefault();

    jQuery('#defaultpost_banner-image').val(' ');
    jQuery('#defaultpostbannerimagetag').attr('src', ' ');
});


// Image upload for project banner //
let bannerImgUploader;
jQuery('#bbbs_project-metabox .service_banner-img .add-image').on('click', function(e) {
    e.preventDefault();

    if (bannerImgUploader){
        bannerImgUploader.open();
        return;
    }

    bannerImgUploader = wp.media.frames.file_frame = wp.media({
        title: 'Choose a Project Banner Image',
        button: {
            text: 'Choose Image'
        },
        multiple: false
    });

    bannerImgUploader.on('select', function() {
        var attachment = bannerImgUploader.state().get('selection').first().toJSON();
        jQuery('#service_banner-image').val(attachment.url);  //input hidden
        jQuery('#servicebannerimagetag').attr('src', attachment.url); //img tag
    });

    bannerImgUploader.open();
});
// Remove Image
jQuery('#bbbs_project-metabox .add_remove-btn .remove-image').on('click', function(e) {
    e.preventDefault();

    jQuery('#service_banner-image').val(' ');
    jQuery('#servicebannerimagetag').attr('src', ' ');
});


// Image upload for problem, solution solution //
let customUploader;
jQuery('.problem_solution-img .add-image').on('click', function(e) {
    e.preventDefault();

    if (customUploader) {
        customUploader.open();
        return;
    }

    customUploader = wp.media.frames.file_frame = wp.media({
        title: 'Choose Image',
        button: {
            text: 'Choose Image'
        },
        multiple: false
    });

    customUploader.on('select', function() {
        var attachment = customUploader.state().get('selection').first().toJSON();
        jQuery('#problemsolution-image').val(attachment.url);  //input hidden
        jQuery('#problemsolutionimagetag').attr('src', attachment.url); //img tag
    });

    customUploader.open();
});
// Remove Image
jQuery('.problem_solution-img .add_remove-btn .remove-image').on('click', function(e) {
    e.preventDefault();

    jQuery('#problemsolution-image').val(' ');
    jQuery('#problemsolutionimagetag').attr('src', ' ');
});


// Image upload for Branding //
let brandImgUploader;
jQuery('.branding_typography_workprocess .branding-image .add-image').on('click', function(e) {
    e.preventDefault();

    if (brandImgUploader) {
        brandImgUploader.open();
        return;
    }

    brandImgUploader = wp.media.frames.file_frame = wp.media({
        title: 'Choose Image',
        button: {
            text: 'Choose Image'
        },
        multiple: false
    });

    brandImgUploader.on('select', function() {
        var attachment = brandImgUploader.state().get('selection').first().toJSON();
        jQuery('#branding-image').val(attachment.url);  //input hidden
        jQuery('#brandingimagetag').attr('src', attachment.url); //img tag
    });

    brandImgUploader.open();
});
// Remove Image
jQuery('.branding_typography_workprocess .branding-image .add_remove-btn .remove-image').on('click', function(e) {
    e.preventDefault();

    jQuery('#branding-image').val(' ');
    jQuery('#brandingimagetag').attr('src', ' ');
});


// Image upload for typography //
let typoImgUploader;
jQuery('.branding_typography_workprocess .typography-image .add-image').on('click', function(e) {
    e.preventDefault();

    if (typoImgUploader) {
        typoImgUploader.open();
        return;
    }

    typoImgUploader = wp.media.frames.file_frame = wp.media({
        title: 'Choose Image',
        button: {
            text: 'Choose Image'
        },
        multiple: false
    });

    typoImgUploader.on('select', function() {
        var imgurl = typoImgUploader.state().get('selection').first().toJSON();
        jQuery('#typography-image').val(imgurl.url);  //input hidden
        jQuery('#typographyimagetag').attr('src', imgurl.url); //img tag
    });

    typoImgUploader.open();
});
// Remove Image
jQuery('.branding_typography_workprocess .typography-image .typography-add_removebtns .remove-image').on('click', function(e) {
    e.preventDefault();

    jQuery('#typography-image').val(' ');
    jQuery('#typographyimagetag').attr('src', ' ');
});


// Image upload for work process //
let workImgUploader;
jQuery('.branding_typography_workprocess .workprocess-image .add-image').on('click', function(e) {
    e.preventDefault();

    if (workImgUploader) {
        workImgUploader.open();
        return;
    }

    workImgUploader = wp.media.frames.file_frame = wp.media({
        title: 'Choose Image',
        button: {
            text: 'Choose Image'
        },
        multiple: false
    });

    workImgUploader.on('select', function() {
        var attachmenturl = workImgUploader.state().get('selection').first().toJSON();
        jQuery('#workprocess-image').val(attachmenturl.url);  //input hidden
        jQuery('#workprocessimagetag').attr('src', attachmenturl.url); //img tag
    });

    workImgUploader.open();
});
// Remove Image
jQuery('.branding_typography_workprocess .workprocess-image .add_remove-btn .remove-image').on('click', function(e) {
    e.preventDefault();

    jQuery('#workprocess-image').val(' ');
    jQuery('#workprocessimagetag').attr('src', ' ');
});


/* ==========================
    Tinymce Editor 
========================== */
jQuery(document).ready(function($){
    // Initialize TinyMCE for job about company
    wp.editor.initialize('jobabout-company', {  // 'jobabout-company' is textarea id
        tinymce: {
            wpautop: true,
            plugins: 'wordpress,wpautoresize,wpeditimage,wpgallery,wplink,wpdialogs,wpview,lists',
            toolbar1: 'formatselect,bold,italic,bullist,numlist,blockquote,alignleft,aligncenter,alignright,link,unlink',
            toolbar2: 'fullscreen,wp_adv',
            toolbar3: '',
        },
        quicktags: true
    });

    // Initialize TinyMCE for textarea#jobwhat-role
    wp.editor.initialize('jobwhat-role', {
        tinymce: {
            wpautop: true,
            plugins: 'wordpress,wpautoresize,wpeditimage,wpgallery,wplink,wpdialogs,wpview,lists',
            toolbar1: 'formatselect,bold,italic,bullist,numlist,blockquote,alignleft,aligncenter,alignright,link,unlink',
            toolbar2: 'fullscreen,wp_adv',
            toolbar3: '',
        },
        quicktags: true
    });

});