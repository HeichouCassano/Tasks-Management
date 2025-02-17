<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tugas</title>
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
<h1>Edit Tugas</h1>

<?php echo validation_errors(); ?>

<form action="<?= site_url('tasks/edit/'.$task['id']); ?>" method="post">
    <label for="title">Judul:</label>
    <input type="text" name="title" value="<?= $task['title']; ?>" /><br>

    <label for="description">Deskripsi:</label>
    <textarea name="description"><?= $task['description']; ?></textarea><br>

    <label for="due_date">Deadline:</label>
    <input type="date" name="due_date" value="<?= $task['due_date']; ?>" /><br>
    
    <label for="status">Status:</label>
    <select name="status">
        <option value="Pending" <?= $task['status'] == 'Pending' ? 'selected' : ''; ?>>Pending</option>
        <option value="Completed" <?= $task['status'] == 'Completed' ? 'selected' : ''; ?>>Completed</option>
    </select><br>
    
    <button type="submit">Update</button>
</form>
</body>
</html>
