<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <!-- Add your CSS styles here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        .chat-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .chat-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }

        .chat-header h1 {
            margin: 0;
        }

        .chat-messages {
            flex: 1;
            overflow-y: scroll;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .chat-input {
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
        }

        .chat-input input[type="text"] {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .chat-input button {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .chat-input button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>{{ config('app.name') }}</h1>
    </header>
    <main>
        <section class="chat-container">
            <div class="chat-header">
                <h1>Chat</h1>
                <i class="fas fa-cog"></i>
            </div>
            <div class="chat-messages">
                <!-- Chat messages will be dynamically loaded here -->
            </div>
            <div class="chat-input">
                <input type="text" id="message-input" placeholder="Type a message...">
                <button type="submit">Send</button>
            </div>
        </section>
    </main>
    <footer>
        <!-- Add your footer content here -->
    </footer>
</body>
</html>