

function validation(event) {
    event.preventDefault(); // Prevents the default form submission behavior

    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirm_password = document.getElementById('confirm_password').value;

    if (!name) {
        document.getElementById("name_empty").innerHTML = "Name cannot be empty!";
    } else {
        document.getElementById("name_empty").innerHTML = ""; // Clear the error message
    }
    if (!email) {
        document.getElementById("email_empty").innerHTML = "Email cannot be empty!";
    } else {
        document.getElementById("email_empty").innerHTML = ""; // Clear the error message
    }
    if (!password) {
        document.getElementById("password_empty").innerHTML = "Password cannot be empty!";
    } else {
        document.getElementById("password_empty").innerHTML = ""; // Clear the error message
    }
    if (!confirm_password) {
        document.getElementById("Cpassword_empty").innerHTML = "Please enter confirm password!";
    } else {
        document.getElementById("Cpassword_empty").innerHTML = ""; // Clear the error message
    }

    if (name && email && password && confirm_password) {
        const re =
            /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

        if (email.match(re)) {
            if (password.length < 8) {
                alert("password cannot be less than 8 charactors");
            } else {
                if (password !== confirm_password) {
                    document.getElementById("Cpassword_empty").innerHTML = "confirm password was wrong!";
                } else {
                        
                      

                    // Create a new form element
                        let form = document.createElement('form');
                        form.action = '../controllers/user.php'; // Set the action URL
                        form.method = 'POST';

                        var name = document.getElementById('name');
                        var email = document.getElementById('email');
                        var password = document.getElementById('password');
                        
                        form.appendChild(name.cloneNode(true));
                        form.appendChild(email.cloneNode(true));
                        form.appendChild(password.cloneNode(true));
                    // Append the form to the document and submit it
                        document.body.appendChild(form);
                        form.submit();
                }
            }

        } else {
            document.getElementById("email_empty").innerHTML = "email doesn't follow correct format!";
        }
        
    }
}