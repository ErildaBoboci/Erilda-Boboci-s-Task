const selectElement = document.getElementById('time-select');
const continueButton = document.getElementById('continue-btn');
const step1 = document.getElementById('step1');
const step2 = document.getElementById('step2');
const step3 = document.getElementById('step3');
const userForm = document.getElementById('user-form');

selectElement.addEventListener('change', function() {
    if (selectElement.value) {
        continueButton.disabled = false;
    } else {
        continueButton.disabled = true;
    }
});

continueButton.addEventListener('click', function() {
    step1.style.display = 'none';
    step2.style.display = 'block';
});

userForm.addEventListener('submit', function(event) {
    event.preventDefault();

    const firstName = document.getElementById('first-name').value.trim();
    const lastName = document.getElementById('last-name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const selectedTime = document.getElementById('time-select').value;
    const termsAccepted = document.getElementById('terms').checked ? "Yes" : "No";

    let isValid = true;
    let errorMessage = '';

    if (firstName === '') {
        isValid = false;
        errorMessage += 'First Name is required.\n';
    }

    if (lastName === '') {
        isValid = false;
        errorMessage += 'Last Name is required.\n';
    }

    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailRegex.test(email)) {
        isValid = false;
        errorMessage += 'Please enter a valid email address.\n';
    }

    const phoneRegex = /^[0-9]{10}$/;
    if (!phoneRegex.test(phone)) {
        isValid = false;
        errorMessage += 'Please enter a valid phone number (10 digits).\n';
    }

    if (!termsAccepted) {
        isValid = false;
        errorMessage += 'You must agree to the terms and conditions.\n';
    }

    if (isValid) {
        document.getElementById('display-time').textContent = selectedTime;
        document.getElementById('display-first-name').textContent = firstName;
        document.getElementById('display-last-name').textContent = lastName;
        document.getElementById('display-email').textContent = email;
        document.getElementById('display-phone').textContent = phone;
        document.getElementById('display-terms').textContent = termsAccepted;

        step2.style.display = 'none';
        step3.style.display = 'block';
    } else {
        alert(errorMessage);
    }
});
