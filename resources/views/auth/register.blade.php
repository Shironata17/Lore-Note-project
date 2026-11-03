<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="form-container justify-center flex items-center w-full h-full min-h-screen" style="background-image: url('{{ asset('images/metro-city-1.png') }}')">
        <div class="form-regist bg-linear-to-tr to-pink-600 from-purple-800 w-95 rounded-xl p-5 flex flex-col justify-center">
            <h1 class="font-bold text-5xl text-purple-200 mb-6">Register</h1>

            <form action="" method="POST" class="flex flex-col text-purple-200">
                <label for="nama" class="">Nama: </label>
                <input type="text" name="nama"
                class="border-2 border-purple-200 rounded-lg focus:outline-none focus:border-purple-950 focus:bg-white focus:text-purple-950 p-1 mb-5">
        
                <label for="email">Email: </label>
                <input type="email" name="email"
                class="border-2 border-purple-200 rounded-lg focus:outline-none focus:border-purple-950 focus:bg-white focus:text-purple-950 p-1 mb-5">
        
                <label for="password">Password: </label>
                <input type="password" name="password"
                class="border-2 border-purple-200 rounded-lg focus:outline-none focus:border-purple-950 focus:bg-white focus:text-purple-950 p-1 mb-5">
        
                <label for="pekerjaan">Pekerjaan: </label>
                <input type="text" name="pekerjaan"
                class="border-2 border-purple-200 rounded-lg focus:outline-none focus:border-purple-950 focus:bg-white focus:text-purple-950 p-1 mb-5">
        
                <label for="tanggal_lahir">Tanggal Lahir: </label>
                <input type="date" name="tanggal_lahir"
                class="border-2 border-purple-200 rounded-lg focus:outline-none focus:border-purple-950 focus:bg-white focus:text-purple-950 p-1 mb-8">
        
                <button type="submit" class="mx-auto px-4 py-2 bg-purple-200 text-purple-950 font-bold flex justify-center w-30 rounded-lg">Register</button>
            </form>
        </div>
    </div>
</body>
</html>