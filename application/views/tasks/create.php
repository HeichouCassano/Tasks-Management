<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Tugas Baru</title>
    <style>
        body {
            background-color: #1e1e1e;
            color: #f0f0f0;
            font-family: 'Press Start 2P', cursive;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #00ff00;
            text-align: center;
            margin-top: 20px;
            font-size: 2rem;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 30px;
        }

        label {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="date"], textarea, select {
            width: 100%;
            max-width: 400px;
            padding: 10px;
            margin-bottom: 20px;
            background-color: #262626;
            color: #f0f0f0;
            border: 2px solid #333;
            border-radius: 5px;
            font-size: 1rem;
        }

        button, input[type="submit"] {
            background-color: #00ccff;
            border: none;
            color: #1e1e1e;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        button:hover, input[type="submit"]:hover {
            background-color: #0099cc;
        }
    </style>
</head>
<body>
<h1>Buat Tugas Baru</h1>
<form action="<?php echo site_url('tasks/store'); ?>" method="POST">
    <label for="title">Judul Tugas:</label><br>
    <input type="text" name="title" required><br>

    <label for="description">Deskripsi:</label><br>
    <textarea name="description" required></textarea><br>

    <label for="due_date">Deadline:</label><br>
    <input type="date" name="due_date" required><br>

    <button type="submit">Simpan</button>
</form>
</body>
</html>
