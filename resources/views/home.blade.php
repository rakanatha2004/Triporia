<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Document</title>
</head>

<body>
    @include('components.navbar')
    <section class="relative flex items-center justify-center h-screen bg-[#3F6FDE]">
        <div class="text-left md:px-26 px-4 z-10">
            <h1 class="text-white text-2xl md:text-4xl font-bold mb-4">
                Confused About Where to go on Holiday?
            </h1>
            <h3 class="text-white text-2xl md:text-4xl font-semibold mb-4">
                Let's Find the Right Vacation Spot for You
            </h3>
        </div>
        <div>
            <img src="{{ asset('assets/images/Location.png') }}" alt="forest background" class="">
        </div>
    </section>
    
</body>
<footer>
    @include('components.footer')
</footer>

</html>
