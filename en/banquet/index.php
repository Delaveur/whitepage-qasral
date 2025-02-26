<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the grandeur of Qasr Al Watan, the majestic presidential palace in Abu Dhabi. Explore its stunning architecture, cultural exhibits, and light shows. Book your tickets online for an unforgettable experience!" />
    <meta name="keywords" content="presidential palace abu dhabi tickets, qasr al watan ticket price, qasr al watan tickets, abu dhabi palace tickets, qasr al watan light show, qasr al watan timings, uae presidential palace tickets">
    <meta name="author" content="Qasr Al Watan">
    <title>Qasr Al Watan – The Presidential Banquet</title>
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
        <img src="/upload/presidental.png"
                class="w-3/4 h-[500px] rounded-lg shadow-lg object-cover 
                md:w-full md:h-auto md:max-h-[500px] 
                sm:w-full sm:rounded-none sm:h-auto">
    </section>
    <!-- Section 1 -->
    <section class="max-w-[1400px] mx-auto py-12 px-4 md:px-8">
        <h1 class="text-center text-3xl font-semibold mb-6">Qasr Al Watan – The Presidential Banquet</h1>

        <p class="mb-3">
            Step into the grandeur of <strong>The Presidential Banquet</strong> at Qasr Al Watan, where tradition meets elegance. This opulent hall has hosted some of the most prestigious gatherings, welcoming world leaders and dignitaries to experience the warmth of Emirati hospitality.
        </p>

        <h3 class="text-lg font-bold">A Hall of Grandeur and Prestige</h3>
        <p class="mb-3">
            The Presidential Banquet Hall is a masterpiece of design, adorned with intricate golden accents, luxurious chandeliers, and exquisite table settings. Every detail reflects the UAE’s commitment to excellence, ensuring that each event held here is both memorable and meaningful.
        </p>

        <h3 class="text-lg font-bold">The Art of Emirati Hospitality</h3>
        <p class="mb-3">
            At the heart of the Presidential Banquet is the spirit of Emirati generosity. Guests are treated to an extraordinary dining experience, where traditional flavors meet world-class presentation. From meticulously prepared local delicacies to international cuisine, every dish served represents a fusion of heritage and modern culinary expertise.
        </p>

        <h3 class="text-lg font-bold">What Makes the Presidential Banquet Special?</h3>
        <ul class="list-disc pl-12 mb-3">
            <li>An opulent setting that embodies elegance and sophistication.</li>
            <li>Authentic Emirati cuisine prepared with the finest ingredients.</li>
            <li>Exquisite table arrangements that reflect the UAE’s cultural richness.</li>
            <li>A space that has welcomed global leaders and esteemed guests.</li>
            <li>A celebration of unity, diplomacy, and heritage through fine dining.</li>
        </ul>

        <h3 class="text-lg font-bold">A Celebration of Culture and Diplomacy</h3>
        <p class="mb-3">
            The Presidential Banquet is more than just a dining hall—it is a symbol of diplomacy, where meaningful discussions and cultural exchanges take place. The setting itself tells a story of respect, unity, and the UAE’s dedication to fostering strong international relationships.
        </p>

        <p class="mb-3">
            Experience the elegance, history, and refined hospitality of the UAE—<strong>Qasr Al Watan’s Presidential Banquet invites you to witness grandeur like never before!</strong>
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