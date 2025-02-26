<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the grandeur of Qasr Al Watan, the majestic presidential palace in Abu Dhabi. Explore its stunning architecture, cultural exhibits, and light shows. Book your tickets online for an unforgettable experience!" />
    <meta name="keywords" content="presidential palace abu dhabi tickets, qasr al watan ticket price, qasr al watan tickets, abu dhabi palace tickets, qasr al watan light show, qasr al watan timings, uae presidential palace tickets">
    <meta name="author" content="Qasr Al Watan">
    <title>Qasr Al Watan – Military Music Show</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleMenu() {
            let menu = document.getElementById("mobile-menu");
            if (menu.classList.contains("hidden")) {
                menu.classList.remove("hidden", "h-0");
                menu.classList.add("h-auto", "p-4");
            } else {
                menu.classList.add("hidden", "h-0");
                menu.classList.remove("h-auto", "p-4");
            }
        }
    </script>
</head>
<body>
    <div class="bg-white text-blue-800 py-4 px-6 border-b-2 border-yellow-500">
        <div class="max-w-[1400px] mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-yellow-500"><a href="/">Qasr Al Watan</a></h1>
            <button class="lg:hidden" onclick="toggleMenu()">☰</button>
            <nav class="hidden lg:block">
                <ul class="flex space-x-6">
                    <li><a href="/calendars/day/#/theme-park/" class="font-medium hover:text-yellow-500">Day view</a></li>
                    <li><a href="/offers-discounts/" class="font-medium hover:text-yellow-500">Offers</a></li>
                    <li><a href="/destinations/theme-park/" class="font-medium hover:text-yellow-500">Theme park</a></li>
                    <li><a href="/railroad/" class="font-medium hover:text-yellow-500">Railroad</a></li>
                    <li><a href="/sliding/" class="font-medium hover:text-yellow-500">Sliding Sleighs</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Мобильное меню -->
    <div id="mobile-menu" class="hidden bg-gray-100 text-blue-800 p-4 lg:hidden overflow-hidden h-0">
        <ul class="py-4">
            <li><a href="/calendars/day/#/theme-park/" class="block py-2 hover:text-yellow-500">Day view</a></li>
            <li><a href="/offers-discounts/" class="block py-2 hover:text-yellow-500">Offers</a></li>
            <li><a href="/destinations/theme-park/" class="block py-2 hover:text-yellow-500">Theme park</a></li>
            <li><a href="/railroad/" class="block py-2 hover:text-yellow-500">Railroad</a></li>
            <li><a href="/sliding/" class="block py-2 hover:text-yellow-500">Sliding Sleighs</a></li>
        </ul>
    </div>
    <section class="flex justify-center my-6 max-w-[1400px] mx-auto items-center md:px-4 sm:px-0">
        <img src="/upload/military.png"
                class="w-3/4 h-[500px] rounded-lg shadow-lg object-cover 
                md:w-full md:h-auto md:max-h-[500px] 
                sm:w-full sm:rounded-none sm:h-auto">
    </section>
    <!-- Section 1 -->
    <section class="max-w-[1400px] mx-auto py-12 px-4 md:px-8">
        <h1 class="text-center text-3xl font-semibold mb-6">Qasr Al Watan – Military Music Show</h1>

        <p class="mb-3">
            Experience the power and precision of military music at <strong>Qasr Al Watan’s Military Music Show</strong>. This breathtaking performance brings together tradition, discipline, and artistry, offering visitors a unique opportunity to witness a grand display of synchronized musical excellence.
        </p>

        <h3 class="text-lg font-bold">A Spectacle of Sound and Precision</h3>
        <p class="mb-3">
            The Military Music Show is a celebration of heritage and patriotism, featuring skilled musicians performing powerful compositions that resonate with history and national pride. The rhythmic beats of drums, the harmonious blend of brass instruments, and the immaculate formations create an unforgettable experience.
        </p>

        <h3 class="text-lg font-bold">What to Expect</h3>
        <ul class="list-disc pl-12 mb-3">
            <li>Exhilarating live performances by military bands showcasing traditional and contemporary compositions.</li>
            <li>Immaculate drill routines that demonstrate discipline, coordination, and precision.</li>
            <li>A unique blend of music and ceremonial displays set against the stunning backdrop of Qasr Al Watan.</li>
            <li>An opportunity to experience the deep-rooted connection between music and the UAE’s rich military traditions.</li>
        </ul>

        <h3 class="text-lg font-bold">A Performance Like No Other</h3>
        <p class="mb-3">
            Each performance is carefully choreographed to reflect the strength, unity, and heritage of the UAE. Whether you are a history enthusiast, a music lover, or simply seeking a unique cultural experience, the Military Music Show is an event not to be missed.
        </p>

        <h3 class="text-lg font-bold">The Legacy of Military Music</h3>
        <p class="mb-3">
            Military music has long played a vital role in ceremonial traditions, inspiring unity and pride across generations. Rooted in centuries-old practices, these performances symbolize strength, discipline, and the enduring spirit of a nation. At Qasr Al Watan, this rich legacy comes to life through powerful orchestrations and perfectly synchronized movements.
        </p>

        <p class="mb-3">
            Witness the harmony of music and military excellence—<strong>join us for the Qasr Al Watan Military Music Show and experience tradition like never before!</strong>
        </p>
    </section>

    <footer class="bg-gray-800 text-white text-center py-4">
        <p class="mb-3">&copy; <?php echo date("Y"); ?> Qasr Al Watan. All Rights Reserved.</p>
        <nav class="mt-2">
            <a href="privacy.php" class="text-blue-600 hover:underline mr-4">Privacy Policy</a>
            <a href="terms.php" class="text-blue-600 hover:underline">Terms of Conduct</a>
        </nav>
    </footer>
</body>
</html>