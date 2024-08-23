document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form[action="Forms.php"]');

    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var linkedin = document.getElementById('link').value;
            var feedback = document.getElementById('feed').value;

            if (name && email && linkedin && feedback) {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', my_ajax_obj.ajax_url, true); // Use AJAX URL
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function() {
                    if (xhr.status === 200) {
                        alert(xhr.responseText); // Show server response
                        form.reset(); // Reset form fields
                    } else {
                        alert('Server returned an error: ' + xhr.statusText);
                    }
                };

                xhr.onerror = function() {
                    alert('Request failed. Please try again.');
                };

                xhr.send('action=submit_feedback&name=' + encodeURIComponent(name) + '&email=' + encodeURIComponent(email) + '&linkedin=' + encodeURIComponent(linkedin) + '&feedback=' + encodeURIComponent(feedback));
            } else {
                alert('Please fill in all fields.');
            }
        });
    } else {
        console.error('Form element not found');
    }
});
 

