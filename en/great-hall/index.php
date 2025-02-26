<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the grandeur of Qasr Al Watan, the majestic presidential palace in Abu Dhabi. Explore its stunning architecture, cultural exhibits, and light shows. Book your tickets online for an unforgettable experience!" />
    <meta name="keywords" content="presidential palace abu dhabi tickets, qasr al watan ticket price, qasr al watan tickets, abu dhabi palace tickets, qasr al watan light show, qasr al watan timings, uae presidential palace tickets">
    <meta name="author" content="Qasr Al Watan">
    <title>Qasr Al Watan – The Great Hall</title>
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
                    <li><a href="/en/explore-the-palace/" class="font-medium hover:text-yellow-500">Explore the palace</a></li>
                    <li><a href="/en/tickets/" class="font-medium hover:text-yellow-500">Tickets</a></li>
                    <li><a href="/en/plan-your-visit/opening-hours#visitors-information" class="font-medium hover:text-yellow-500">Visitors Information</a></li>
                    <li><a href="/#inside-qasralwatan" class="font-medium hover:text-yellow-500">Inside Qasr Al Watan</a></li>
                    <li><a href="/en/contactus/" class="font-medium hover:text-yellow-500">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Мобильное меню -->
    <div id="mobile-menu" class="hidden bg-gray-100 text-blue-800 p-4 lg:hidden overflow-hidden h-0">
        <ul class="py-4">
            <li><a href="/en/explore-the-palace/" class="block py-2 hover:text-yellow-500">Explore the palace</a></li>
            <li><a href="/en/tickets/" class="block py-2 hover:text-yellow-500">Tickets</a></li>
            <li><a href="/en/plan-your-visit/opening-hours#visitors-information" class="block py-2 hover:text-yellow-500">Visitors Information</a></li>
            <li><a href="/#inside-qasralwatan" class="block py-2 hover:text-yellow-500">Inside Qasr Al Watan</a></li>
            <li><a href="/en/contactus/" class="block py-2 hover:text-yellow-500">Contact Us</a></li>
        </ul>
    </div>
    <section class="flex justify-center my-6 max-w-[1400px] mx-auto items-center md:px-4 sm:px-0">
        <img src="/upload/hall.png"
                class="w-3/4 h-[500px] rounded-lg shadow-lg object-cover 
                md:w-full md:h-auto md:max-h-[500px] 
                sm:w-full sm:rounded-none sm:h-auto">
    </section>
    <!-- Section 1 -->
    <section class="max-w-[1400px] mx-auto py-12 px-4 md:px-8">
        <h1 class="text-center text-3xl font-semibold mb-6">Qasr Al Watan – The Great Hall</h1>

        <p class="mb-3">
            Step into the heart of Qasr Al Watan and witness the breathtaking splendor of <strong>The Great Hall</strong>. As the palace’s central masterpiece, this architectural marvel showcases the UAE’s rich heritage, craftsmanship, and artistic excellence.
        </p>

        <h3 class="text-lg font-bold">A Masterpiece of Architecture</h3>
        <p class="mb-3">
            The Great Hall is an awe-inspiring space, featuring soaring domes, intricate arabesque patterns, and shimmering chandeliers. Every detail, from the geometric symmetry to the gold-accented interiors, reflects the grandeur and sophistication of traditional Arabian craftsmanship.
        </p>

        <h3 class="text-lg font-bold">The Symbolism Behind the Design</h3>
        <p class="mb-3">
            More than just an architectural wonder, The Great Hall is a representation of the UAE’s vision and values. Its vast, open space symbolizes transparency and unity, while the meticulously crafted motifs pay tribute to the nation’s cultural and intellectual heritage.
        </p>

        <h3 class="text-lg font-bold">Highlights of The Great Hall</h3>
        <ul class="list-disc pl-12 mb-3">
            <li>A magnificent central dome, one of the largest in the region.</li>
            <li>Exquisite detailing inspired by traditional Arabian artistry.</li>
            <li>Towering archways that frame the grandeur of the palace.</li>
            <li>Richly decorated marble floors and walls showcasing the finest craftsmanship.</li>
            <li>A space that embodies the essence of knowledge, culture, and leadership.</li>
        </ul>

        <h3 class="text-lg font-bold">A Space of Inspiration and Legacy</h3>
        <p class="mb-3">
            The Great Hall serves as a gateway to the deeper intellectual and cultural experiences within Qasr Al Watan. It is a place where history, artistry, and vision converge, offering visitors a profound appreciation of the UAE’s enduring legacy.
        </p>

        <p class="mb-3">
            Immerse yourself in the unparalleled beauty and significance of The Great Hall—<strong>a tribute to the past, present, and future of the UAE.</strong>
        </p>
    </section>



    <footer class="bg-gray-800 text-white text-center py-4">
        <p class="mb-3">&copy; <?php echo date("Y"); ?> Qasr Al Watan. All Rights Reserved.</p>
        <nav class="mt-2">
            <a href="/privacy.php" class="text-blue-600 hover:underline mr-4">Privacy Policy</a>
            <a href="/terms.php" class="text-blue-600 hover:underline">Terms of Conduct</a>
        </nav>
    </footer>
</body>
</html>