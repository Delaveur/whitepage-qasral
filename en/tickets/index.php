<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the grandeur of Qasr Al Watan, the majestic presidential palace in Abu Dhabi. Explore its stunning architecture, cultural exhibits, and light shows. Book your tickets online for an unforgettable experience!" />
    <meta name="keywords" content="presidential palace abu dhabi tickets, qasr al watan ticket price, qasr al watan tickets, abu dhabi palace tickets, qasr al watan light show, qasr al watan timings, uae presidential palace tickets">
    <meta name="author" content="Qasr Al Watan">
    <title>Tickets</title>
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
            <h1 class="text-2xl font-bold text-yellow-500">Qasr Al Watan</h1>
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
        <img src="/upload/tickets.png"
                class="w-3/4 h-[500px] rounded-lg shadow-lg object-cover 
                md:w-full md:h-auto md:max-h-[500px] 
                sm:w-full sm:rounded-none sm:h-auto">
    </section>
        <!-- Section 1 -->
        <section class="max-w-[1400px] mx-auto py-12 px-4 md:px-8">
        <h1 class="text-center text-3xl font-semibold mb-6">Qasr Al Watan Tickets – Your Gateway to a Royal Experience</h1>
        <p class="mb-3">Discover the grandeur of <strong>Qasr Al Watan</strong>, a majestic cultural landmark that offers a deep insight into the UAE’s rich heritage, governance, and craftsmanship. A visit to this stunning presidential palace is more than just a tour—it’s a journey through history, knowledge, and architectural brilliance.</p>
        <h3 class="text-lg font-bold">Ticket Options & Pricing</h3>
        <ul class="list-disc pl-12">
            <li><strong>General Admission</strong> – Enjoy full access to the palace, gardens, and exhibitions, where you can explore the Hall of Knowledge, Presidential Gifts, and the mesmerizing Great Hall.</li>
            <li><strong>Palace + Light Show</strong> – Witness the breathtaking <em>Palace in Motion</em> light show, an unforgettable spectacle that illuminates the palace’s façade with a stunning visual story of the UAE.</li>
            <li><strong>Guided Tours</strong> – Elevate your visit with an expert-guided tour, offering in-depth insights into the palace’s architecture, history, and significance.</li>
            <li><strong>Family & Group Packages</strong> – Special discounts are available for families and large groups to ensure an enriching experience for everyone.</li>
        </ul>

        <h3 class="mt-3 text-lg font-bold">Why Visit Qasr Al Watan?</h3>
        <ul class="list-disc pl-12">
            <li><strong>Architectural Marvel</strong> – Be mesmerized by intricate Arabian craftsmanship and grand interiors.</li>
            <li><strong>Cultural Exploration</strong> – Gain a deeper understanding of the UAE’s governance and traditions.</li>
            <li><strong>Interactive Exhibits</strong> – Engage with educational displays showcasing centuries of knowledge.</li>
            <li><strong>Scenic Gardens</strong> – Stroll through beautifully landscaped gardens offering picturesque views.</li>
        </ul>

        <h3 class="mt-3 text-lg font-bold">Plan Your Visit</h3>
        <p><strong>📍 Location:</strong> Qasr Al Watan, Abu Dhabi, UAE</p>
        <p><strong>🕒 Opening Hours:</strong> 10:00 AM – 6:00 PM (timings may vary)</p>
        <p><strong>🎟 Book Your Tickets Now</strong> – Secure your entry online for a seamless experience.</p>

        <p>Step into a world of royal elegance and cultural richness—<strong>Qasr Al Watan awaits!</strong></p>
    </section>
    <footer class="bg-gray-800 text-white text-center py-4">
        <p>&copy; <?php echo date("Y"); ?> Qasr Al Watan. All Rights Reserved.</p>
        <nav class="mt-2">
            <a href="privacy.php" class="text-blue-600 hover:underline mr-4">Privacy Policy</a>
            <a href="terms.php" class="text-blue-600 hover:underline">Terms of Conduct</a>
        </nav>
    </footer>
</body>
</html>