require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// Or using the CommonJS version:
const ClassicEditor = require('@ckeditor/ckeditor5-build-classic');

ClassicEditor
    .create(document.querySelector('#editor'), {
        ckfinder: {
            uploadUrl: '/ckeditor/upload-image?_token=' + document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    })
    .then(editor => {
        window.editor = editor;
    })
    .catch(error => {
        console.error('There was a problem initializing the editor.', error);
    });
