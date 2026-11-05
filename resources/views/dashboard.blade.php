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

    <div class="menu">
        <div class="menu-cont">
            <div class="title-menu font-bold p-3 text-xl text-purple-950">
                <h1>Dokumen saya</h1>
            </div>

            <div class="title flex gap-4">
                <div class="men-btn font-bold px-3 py-4">
                    <a href="#" class="border border-transparent [&.active]:border-purple-800 [&.active]:text-purple-800 px-2 py-1 rounded-sm" onclick="ubahAktif(this)">
                        Terbaru
                    </a>
                </div>

                <!-- CONTOH 2: Kondisi ketika menu biasa / tidak aktif (tanpa class "active") -->
                <div class="men-btn font-bold px-3 py-4">
                    <a href="#" class="border border-transparent [&.active]:border-purple-800 [&.active]:text-purple-800 px-2 py-1 rounded-sm ac " onclick="ubahAktif(this)">
                        Favorit
                    </a>
                </div>
            </div>

            <hr class="w-40 ml-4 mb-3 opacity-50">

            <table class="border-separate border-spacing-x-4">
                <thead>
                    <tr class="text-left font-medium text-opacity-50">
                        <td class="w-3/4">Nama</td>
                        <td class="w-1/4">Waktu</td>
                    </tr>

                </thead>
                
                <tbody>
                    @forelse($book as $b)
                    <tr>
                        <td>{{ $b->judul }}</td>
                        <td>{{ $b->created_at->format('d M Y') }}</td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function ubahAktif(elemen) {
            // 1. Hapus class 'active' dari semua menu
            document.querySelectorAll('.men-btn a').forEach(a => a.classList.remove('active'));

            // 2. Tambahkan class 'active' ke menu yang baru diklik
            elemen.classList.add('active');
        }
</script>
</body>
</html>