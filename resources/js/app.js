import $ from 'jquery';
import '@popperjs/core';
import 'bootstrap';
import Modal from 'bootstrap/js/dist/modal';

$(document).ready(function() {
    const successModal = document.getElementById('success-modal');
    console.log(successModal);
    if (successModal !== null) {
        const modal = new Modal(successModal); // Instantiates your modal

        modal.show();
    }
});
