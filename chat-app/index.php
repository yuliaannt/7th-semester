<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Chat Application</title>
</head>
<body>
    <div class="chat-container">
        <h1>Chat Application</h1>
        <div id="messages"></div>
        <form id="messageForm" enctype="multipart/form-data">
            <input type="text" name="sender" placeholder="Sender" required>
            <input type="text" name="receiver" placeholder="Receiver" required>
            <textarea name="message" placeholder="Type your message..."></textarea>
            <input type="file" name="media" accept="image/*,video/*,application/*">
            <button type="submit">Send</button>
        </form>
    </div>

    <script>
        document.getElementById('messageForm').onsubmit = function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            fetch('send_message.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('messages').innerHTML += data;
                this.reset();
            });
        };
    </script>
</body>
</html>