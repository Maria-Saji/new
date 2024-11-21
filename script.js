$(document).ready(function () {
    $('#registrationForm').on('submit', function () {
        if ($('#name').val() === '' || $('#email').val() === '' || $('#password').val() === '' || $('#gender').val() === '') {
            alert('All fields are required except Comments.');
            return false;
        }
        alert('Form submitted successfully!');
        return true; // Allow the form to be submitted
    });
});
