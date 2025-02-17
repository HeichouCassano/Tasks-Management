<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tugas</title>
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

        a {
            text-decoration: none;
            color: #ffcc00;
        }

        .create-task-btn {
            display: inline-block;
            background-color: #ffcc00;
            color: #1e1e1e;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.2rem;
            font-family: 'Press Start 2P', cursive;
            margin-left: 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .create-task-btn:hover {
            background-color: #e6b800;
            color: #ffffff;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #2e2e2e;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        strong {
            color: #00ff00;
            font-size: 1.5rem;
        }

        p {
            margin: 5px 0;
        }

        a.action-link {
            color: #ffcc00;
            font-size: 1rem;
        }

        a.action-link:hover {
            color: #e6b800;
        }

    </style>
</head>
<body>
<h1>Daftar Tugas</h1>

<a href="<?= site_url('tasks/create'); ?>" class="create-task-btn">Buat Tugas Baru</a>

<ul>
    <?php foreach ($tasks as $task): ?>
    <li>
        <strong><?= $task['title']; ?></strong>
        <p><?= $task['description']; ?></p>
        <p>Deadline: <?= $task['due_date']; ?></p>
        <p>Status: <?= ucwords(str_replace('_', ' ', $task['status'])); ?></p>
        
        <a href="<?= site_url('tasks/edit/'.$task['id']); ?>" class="action-link">Edit</a> |
        <a href="<?= site_url('tasks/delete/'.$task['id']); ?>" class="action-link" onclick="return confirm('Apakah Anda yakin ingin menghapus tugas ini?');">Delete</a>
    </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
