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
                <a href="/dashboard/add/book" class="bg-purple-500 px-4 py-1 hover:bg-purple-900 hover:-translate-y-1 px-4 py-1 rounded-sm transition duration-300 ease-in-out hover:text-purple-200">
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

    <div class="hero">
        <div class="hero-cont flex flex-col gap-3 py-15">
            <div class="title flex justify-center">
                <h1 class="font-bold text-5xl text-purple-900">Welcome {{ Auth::user()->nama }}</h1>
            </div>

            <div class="p-cont flex justify-center">
                <h2 class="text-3xl text-purple-900">Lets start make your story together!</h2>
            </div>
        </div>
    </div>

    <div class="recent-book px-2">
        <div class="title-rc p-2 bg-purple-500 w-1/5 rounded-t-lg border-2 border-purple-500 border-b-purple-300">
            <h1 class="font-bold">Recent Update</h1>
        </div>

        <div class="card-rc w-1/2 bg-purple-500 p-2 text-white">
            @forelse($book as $b)
                <div class="flex justify-between">
                    <h1 class="font-bold">{{ $b->judul }}</h1>
                    <h1>{{ $b->created_at }}</h1>
                </div>
            @empty
                <div>
                    <h1>There is no book yet</h1>
                </div>
            @endforelse
        </div>
    </div>
</body>
</html>