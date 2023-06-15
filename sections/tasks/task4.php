<h2>Working with forms</h2>

<form id="contact-form" action="/projectphp/lib/task4handler.php" method="POST">
    <label for="cf-name">Name:</label>
    <input name="cf-name" id="cf-name" type="text" required>
    <label for="cf-email">Email:</label>
    <input name="cf-email" id="cf-email" type="email" required>
    <label for="cf-age">Age:</label>
    <textarea name="cf-age" id="cf-age"></textarea>
    <label for="cf-message">Message:</label>
    <textarea name="cf-message" id="cf-message"></textarea>
    <button type="submit">Submit</button>
</form>
    <div id="cf-result"></div>
<script>
    document.getElementById('contact-form').addEventListener('submit', function(evt) {
        evt.preventDefault();
        const name      = document.getElementById('cf-name').value;
        const email     = document.getElementById('cf-email').value;
        const age   = document.getElementById('cf-age').value;
        const message   = document.getElementById('cf-message').value;
        if (name && email) {
            fetch('/projectphp/lib/task4handler.php', {
                method: 'POST',
                body: new FormData(evt.target),
            })
            // 1.
            .then(resp => resp.text())
            // 2. 
            // .then(resp => {
            //     return resp.text();
            // })
            // 3.
            // .then(function(resp) {
            //     return resp.text();
            // })
            // end.
            .then(result => {
                document.getElementById('cf-result').innerHTML = result;
            })
            .catch(err => {
                document.getElementById('cf-result').innerHTML = 'Fetch error';    
            })
        } else {
            document.getElementById('cf-result').innerHTML = 'Error';
        }
    });
</script>
