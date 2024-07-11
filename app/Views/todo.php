<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Todo List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen max-w-xl p-4 mx-auto space-y-4">
    <h1 class="text-center text-2xl">Todo List</h1>

    <div class="rounded-md border p-3 space-y-3">
        <h2>
            Tambah todo
        </h2>
        <form method="post" action="/tambah" class="space-y-2">
            <input type="text" class="w-full px-2 py-1 border rounded" placeholder="Nama" name="nama" />
            <div class="text-right">
                <button type="submit" class="px-2 py-1 rounded bg-gray-600 hover:bg-gray-600/80 text-white">
                    Simpan
                </button>
            </div>
        </form>
    </div>

    <ul id="todos" class="border rounded-md p-3 space-y-3">
        <?php foreach ($todo as $t): ?>
        <li class="flex items-center justify-between gap-2">
            <form method="post" action="/edit/<?= $t['id'] ?>" class="flex-1 flex items-center justify-between gap-4">
                <input type="checkbox" class="peer/done" name="selesai" <?= $t['selesai'] ? 'checked' : '' ?> />
                <input type="text" name="nama"
                    class="flex-1 line-clamp-3 peer-checked/done:line-through peer-checked/done:opacity-80"
                    value="<?= $t['nama'] ?>" />
                <button type="submit" class="px-2 py-1 rounded bg-blue-600 hover:bg-blue-600/80 text-white">
                    Simpan
                </button>
            </form>
            <form method="post" action="/hapus/<?= $t['id'] ?>">
                <button type="submit" onclick="return confirm('Apakah kamu yakin?')" class="px-2 py-1 rounded bg-red-600 hover:bg-red-600/80 text-white">
                    Hapus
                </button>
            </form>
        </li>
        <?php endforeach; ?>
    </ul>


</body>

</html>