$(document).ready(function() {
    $('#datetimepicker').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        minDate: moment()
    });
});

function createSlot() {
    var selected_date = $('#datetimepicker').data('date');
    if (selected_date == '') {
        alert('Please select a date and time.');
    } else {
        $.ajax({
            url: 'slot.php',
            type: 'POST',
            data: { datetime: selected_date },
            success: function(response) {
                // Redirect to VHome.php after successful slot creation
                window.location.href = 'slot.html';
            },
            error: function(jqXHR, textStatus, errorThrown) {
                if (jqXHR.status == 401) {
                    alert('Please login.');
                } else {
                    alert('Error: ' + errorThrown);
                }
            }
        });
    }
}

// Combine date and time fields into a single datetime value
const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
    const date = document.querySelector('#date').value;
    const checkedBoxes = document.querySelectorAll('input[name="time[]"]:checked');
    const times = [];
    for (const checkbox of checkedBoxes) {
        times.push(checkbox.value);
    }
    const datetimeValues = times.map(time => date + ' ' + time);
    // Add a hidden input field to the form containing the datetime values
    for (const datetime of datetimeValues) {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'datetime[]';
        input.value = datetime;
        form.appendChild(input);
    }
});

// Validate date field
const dateInput = document.querySelector('#date');
dateInput.addEventListener('change', (event) => {
    const selectedDate = new Date(event.target.value);
    const currentDate = new Date();
    if (selectedDate < currentDate) {
        alert('Please select a future date');
        event.target.value = '';
    }
});

// Validate time field
const timeCheckboxes = document.querySelectorAll('input[name="time[]"]');
for (const checkbox of timeCheckboxes) {
    checkbox.addEventListener('click', (event) => {
        const checkedBoxes = document.querySelectorAll('input[name="time[]"]:checked');
        if (checkedBoxes.length > 4) {
            alert('You can only select up to four time slots');
            event.target.checked = false;
        }
    });
}

// Validate datetime values in slot.php
$(document).ready(function() {
    $('form').submit(function(event) {
        const datetimes = $('input[name="datetime[]"]').map(function() {
            return this.value;
        }).get();
        const currentDate = new Date();
        let isValid = true;
        for (const datetime of datetimes) {
            const selectedDate = new Date(datetime);
            if (selectedDate < currentDate) {
                alert('Please select a slot with future date.');
                isValid = false;
                break;
            }
        }
        if (!isValid) {
            event.preventDefault();
        }
    });
});
