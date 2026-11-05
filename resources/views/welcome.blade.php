<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="nav">
        <div class="p-3 bg-linear-to-r from-purple-800 to-pink-600 justify-between flex items-center text-purple-200">
            <div class="text-4xl font-bold">
                <h1>Lore/Note</h1>
            </div>

            <div class="nav-bar flex gap-4 text-purple-200">
                <a href="" class="hover:-translate-y-1 rounded-sm transition duration-300 ease-in-out">Home</a>
                <a href="#about" class="hover:-translate-y-1 rounded-sm transition duration-300 ease-in-out">About Us</a>
                <a href="" class="hover:-translate-y-1 rounded-sm transition duration-300 ease-in-out">Contact</a>
                <a href="" class="hover:-translate-y-1 rounded-sm transition duration-300 ease-in-out">Features</a>
            </div>

            <div class="daftar-btn bg-purple-500 hover:bg-purple-200 hover:-translate-y-1 px-4 py-1 rounded-sm transition duration-300 ease-in-out">
                <a href="/register" class="text-purple-900">Daftar</a>
            </div>
        </div>
    </div>

    <div class="hero h-lvh">
        <div class="justify-center flex mt-15">
            <h1 class="text-7xl font-bold text-purple-950">Welcome to <i class="text-purple-600">Lore/Note</i></h1>
        </div>

        <div class="justify-center flex mt-2">
            <p class="text-2xl text-purple-950 max-w-150 text-center">A place where you can create an entire, beautiful fantasy world, just like in your dreams.</p>
        </div>

        <div class="card flex gap-5 mx-auto justify-center mt-10">
            <div class="cards bg-purple-900 text-purple-200 max-w-80 p-3 rounded-lg hover:-translate-y-1 transition duration-300 ease-in-out">
                <h1 class="text-2xl font-bold">Easy to acces</h1>

                <p>You can access your story with just one click!</p>
            </div>
            <div class="cards bg-purple-900 text-purple-200 max-w-80 p-3 rounded-lg hover:-translate-y-1 transition duration-300 ease-in-out">
                <h1 class="text-2xl font-bold">Safe story</h1>

                <p>Your story would save and never be gone because some mistake!</p>
            </div>
            <div class="cards bg-purple-900 text-purple-200 max-w-80 p-3 rounded-lg hover:-translate-y-1 transition duration-300 ease-in-out">
                <h1 class="text-2xl font-bold">Anytime, Anywhere</h1>

                <p>You can update it at anytime and anywhere.</p>
            </div>
        </div>

        <div class="btn mt-15 flex justify-center">
            <a href="" class="border-purple-500 border-2 px-4 py-2 font-bold text-purple-950 rounded-lg 
            hover:bg-purple-950 hover:text-purple-200 hover:border-purple-950 transition duration-300 ease-in-out">Create Your Story!</a>
        </div>
    </div>

    <div class="about-us bg-linear-to-r from-purple-800 to-pink-600 px-3">
        <div class="flex justify-center p-5">
            <h1 class="font-bold text-5xl text-purple-200" id="about">About Us</h1>
        </div>

        <div class="frame-change flex h-96 mt-5">
            <div class="menu-kiri h-90 w-1/2">
                <div onmouseover="switchPage('page1', this)" class="menu1 bg-purple-950 rounded-tl-lg px-10 py-3 text-purple-200 hover:bg-purple-200 hover:text-purple-900">
                    <p class="text-2xl">Who is Us?</p>
                </div>

                <div onmouseover="switchPage('page2', this)" class="menu1 bg-purple-950 px-10 py-3 text-purple-200 hover:bg-purple-200 hover:text-purple-900">
                    <p class="text-2xl">What is Lore/Note</p>
                </div>

                <div onmouseover="switchPage('page3', this)" class="menu1 bg-purple-950 rounded-bl-lg px-10 py-3 text-purple-200 hover:bg-purple-200 hover:text-purple-900">
                    <p class="text-2xl">Why must Lore/Note</p>
                </div>
            </div>

            <div class="menu-kanan h-90 w-1/2 px-8 py-3 text-purple-950 bg-purple-200 rounded-r-lg rounded-b-lg">
                <div class="page-content block" id="page1">
                    <p>
                        Behind the curtains, "Us" represents the solo dedication of an independent developer who shares a deep passion for worldbuilding and storytelling. This Lore/Note project was born out of a personal need: the challenge of managing complex fictional universes, tangled timelines, and scattered character sheets across mismatched notes.
                    </p>
                    <br>
                    <p>
                        As a solo creator, my vision is to build an intuitive, structured digital workspace that seamlessly bridges your wildest imaginations with organized lore documentation. I believe every fictional world—whether for a novel, a game, or a tabletop RPG—deserves its own dedicated encyclopedia that enhances, rather than hinders, the creative process.
                        This project is fully committed to evolving alongside its community. Every line of code is crafted to give you absolute freedom in weaving stories, structuring mythologies, and bringing your lore to life with ease.
                    </p>
                </div>

                <div class="page-content hidden" id="page2">
                    <p>
                        What is Lore/Note
                    </p>
                    <br>
                    <p>
                    Lore/Note is a dedicated digital workspace designed for writers, game developers, and storytellers to build, structure, and organize their fictional universes.
                    </p>
                    <br>
                    <p>
                        Unlike generic, linear note-taking apps, Lore/Note acts as a personal encyclopedia or internal wiki for your creative projects. From ancient mythologies and magic systems to complex character profiles and deep historical timelines, everything is structured neatly in one central hub.
                    </p>
                </div>

                <div class="page-content hidden" id="page3">
                    <p>
                        Why Lore/Note?
                    </p>
                    <p>
                        Every creator knows the frustration of losing creative momentum just to hunt down a minor detail—a side character's eye color, the name of a town passed in chapter two, or how a royal lineage originally started.
                    </p>
                    <br>
                    <p>
                        Generic note-taking apps are built for grocery lists and business meetings, not for expanding fictional universes. Lore/Note exists because your world is too grand to be trapped in linear text documents.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function switchPage(pageId, element) {
            // 1. Sembunyikan semua konten halaman kanan
            const pages = document.querySelectorAll('.page-content');
            pages.forEach(page => {
              page.classList.replace('block', 'hidden'); // Mengubah yang aktif menjadi hidden
            });

            // 2. Tampilkan halaman kanan yang dipilih
            const selectedPage = document.getElementById(pageId);
            selectedPage.classList.replace('hidden', 'block');

            // 3. Reset semua gaya tombol menu di sebelah kiri menjadi tidak aktif
            const buttons = document.querySelectorAll('.menu-btn');
            buttons.forEach(btn => {
              btn.classList.remove('bg-indigo-600', 'text-white', 'font-semibold');
              btn.classList.add('text-slate-300', 'hover:bg-slate-700', 'hover:text-white');
            });
        }
    </script>
</body>
</html>