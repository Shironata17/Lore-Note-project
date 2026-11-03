<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lore/Note - Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="nav">
        <div class="p-3 bg-purple-200 justify-between flex items-center text-purple-800">
            <div class="text-4xl font-bold">
                <h1>Lore/Note</h1>
            </div>

            <div class="nav-bar flex gap-4 text-purple-800">
                <a href="#" class="hover:-translate-y-1 rounded-sm transition duration-300 ease-in-out">Home</a>
                <a href="#about" class="hover:-translate-y-1 rounded-sm transition duration-300 ease-in-out">Library</a>
                <a href="" class="hover:-translate-y-1 rounded-sm transition duration-300 ease-in-out">Tags</a>
                <a href="" class="hover:-translate-y-1 rounded-sm transition duration-300 ease-in-out">Playlist</a>
            </div>

            <div class="daftar-btn text-purple-100 flex flex-row items-center gap-4">
                <a href="" class="bg-purple-500 px-4 py-1 hover:bg-purple-900 hover:-translate-y-1 px-4 py-1 rounded-sm transition duration-300 ease-in-out hover:text-purple-200">
                    New Story +
                </a>

                <form action="" method="post" class="bg-purple-500 hover:bg-red-500 hover:-translate-y-1 px-4 py-1 rounded-sm transition duration-300 ease-in-out hover:text-purple-200">
                    <button type="submit">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>

    <form action="" method="post">
        <label for="judul">Judul: </label>
        <input type="text" name="judul">

        <label for="sinopsis">Judul: </label>
        <input type="text" name="sinopsis">

        <label for="genre">Judul: </label>
        <input type="text" name="genre">

        <label for="tag">Judul: </label>
        <input type="text" name="tag">

        <button type="submit">Create</button>
    </form>
</body>
</html>