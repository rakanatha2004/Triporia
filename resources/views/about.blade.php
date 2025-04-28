<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Document</title>
</head>

<body>
    @include('components.navbar')
    <section class="py-[72px] px-[80px]">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="content items-center justify-center">
                <div class="content-top flex flex-col md:flex-row gap-[50px] items-center justify-center mb-[80px]">
                    <div class="content-image grid grid-cols-1 gap-4 md:gap-0">
                        <img src="{{ asset('assets/images/slamet.png') }}" alt="" class="img-card max-w-full md:max-w-[330px] rounded-4xl" />
                    </div>
                    <div class="content-subtext mt-8 md:mt-0">
                        <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-[#24479C] mb-4">Tentang Kami</h2>
                        <p class="text-justify max-w-full md:max-w-[549px]">
                            <span class="text-bold font-semibold text-[#24479C] ">Triporia </span>
                            hadir untuk mempermudah setiap petualangan liburan Anda. 
                            Kami memahami kebingungan dalam memilih destinasi yang tepat, oleh karena itu, 
                            kami hadir untuk membantu Anda menemukan tempat liburan yang sempurna. Percaya 
                            pada kemudahan dan inspirasi, Triporia mengkurasi berbagai pilihan wisata mulai 
                            dari taman yang nyaman, keindahan alam yang menakjubkan, hingga pengalaman kuliner 
                            yang menggugah selera. Kami memastikan Anda mendapatkan rekomendasi yang sesuai dengan 
                            keinginan Anda, sehingga Anda bisa fokus menikmati momen liburan yang tak terlupakan.
                        </p>
                    </div>
                </div>
                <div
                    class="content-center flex flex-col-reverse md:flex-row gap-[36px] md:gap-[63px] items-center justify-center mb-[102px]">
                    <div class="content-subtext max-w-full md:max-w-[549px] mt-8 md:mt-0">
                        <h2 class="text-xl md:text-2xl lg:text-3xl font-extrabold text-[#24479C] mb-4">Visi Kami
                        </h2>
                        <p class="text-justify">
                            Menginspirasi Setiap Liburan yang Bermakna 
                            <span class="text-bold font-semibold text-[#24479C] ">Triporia </span> 
                            memiliki visi untuk menjadi sahabat perjalanan utama bagi setiap individu dalam menemukan destinasi liburan 
                            yang paling sesuai. Sehingga, setiap orang dapat merasakan kegembiraan dan kekayaan 
                            pengalaman dari berbagai jenis wisata, mulai dari ketenangan alam hingga kelezatan 
                            kuliner, dengan informasi yang mudah diakses dan menginspirasi.
                        </p>
                    </div>
                    <div class="content-image flex">
                        <img src="{{ asset('assets/images/jenggala.png') }}" alt=""
                            class="card-img max-w-full md:max-w-[330px] rounded-4xl " />
                    </div>
                </div>
                <div
                    class="content-bottom flex flex-col md:flex-row justify-center gap-[36px] md:gap-[48px] items-center">
                    <div class="content-image flex">
                        <img src="{{ asset('assets/images/image 9.png') }}" alt=""
                            class="card-img max-w-full md:max-w-[330px] rounded-4xl" />
                    </div>
                    <div class="content-subtext max-w-full md:max-w-[549px] mt-8 md:mt-0">
                        <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-[#24479C] mb-4">Kenali Tim Kami</h2>
                        <p class="text-justify">
                            Tim Antusias di Balik Rekomendasi Liburan Anda Di 
                            <span class="text-bold font-semibold text-[#24479C] ">Triporia</span>, 
                            kami adalah tim yang bersemangat dalam membantu Anda merencanakan liburan impian. Kami memiliki ketertarikan 
                            yang besar terhadap berbagai jenis wisata dan berdedikasi untuk menyajikan rekomendasi 
                            terbaik yang relevan dengan preferensi Anda. Dengan pemahaman akan beragamnya minat dan 
                            kebutuhan para wisatawan, tim kami bekerja keras untuk mengumpulkan dan mengorganisir 
                            informasi yang menarik dan bermanfaat. Kami percaya bahwa menemukan tempat liburan yang 
                            tepat adalah langkah awal dari pengalaman yang tak terlupakan, dan kami hadir untuk 
                            mewujudkan hal tersebut bagi Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<footer>
    @include('components.footer')
</footer>