<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the grandeur of COASTAL CONTRACTING, the majestic presidential palace in Abu Dhabi. Explore its stunning architecture, cultural exhibits, and light shows. Book your tickets online for an unforgettable experience!" />
    <meta name="keywords" content="presidential palace abu dhabi tickets, COASTAL CONTRACTING, ticket price, COASTAL CONTRACTING, tickets, abu dhabi palace tickets, COASTAL CONTRACTING, INC light show, COASTAL CONTRACTING, INC timings, uae presidential palace tickets">
    <meta name="author" content="COASTAL CONTRACTING, INC">
    <title>Contact Us</title>
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
            <h1 class="text-2xl font-bold text-yellow-500"><a href="/">COASTAL CONTRACTING, INC</a></h1>
            <button class="lg:hidden" onclick="toggleMenu()">☰</button>
            <nav class="hidden lg:block">
                <ul class="flex space-x-6">
                    <li><a href="/en/explore-the-palace/" class="font-medium hover:text-yellow-500">Explore the palace</a></li>
                    <li><a href="/en/tickets/" class="font-medium hover:text-yellow-500">Tickets</a></li>
                    <li><a href="/en/plan-your-visit/opening-hours#visitors-information" class="font-medium hover:text-yellow-500">Visitors Information</a></li>
                    <li><a href="/#inside" class="font-medium hover:text-yellow-500">Our highlights</a></li>
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
            <li><a href="/#inside" class="block py-2 hover:text-yellow-500">Our highlights</a></li>
            <li><a href="/en/contactus/" class="block py-2 hover:text-yellow-500">Contact Us</a></li>
        </ul>
    </div>
        <!-- Section 1 -->
        <section class="max-w-[1400px] min-h-[854px] mx-auto py-12 px-4 md:px-8">
        <h2 class="text-3xl font-bold mb-4">Contact form</h2>
        <form action="contact.php" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="lastName" class="block mb-2">Last Name</label>
                <input type="text" id="lastName" name="lastName" class="w-full p-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="firstName" class="block mb-2">First Name</label>
                <input type="text" id="firstName" name="firstName" class="w-full p-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="message" class="block mb-2">Message</label>
                <textarea id="message" name="message" class="w-full p-2 border rounded-lg"></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg">Send</button>
        </form>

    </section>
    <footer class="bg-gray-800 text-white text-center py-4">
        <p class="mb-3">&copy; <?php echo date("Y"); ?> COASTAL CONTRACTING, INC. All Rights Reserved.</p>
        <nav class="mt-2">
            <a href="/privacy.php" class="text-blue-600 hover:underline mr-4">Privacy Policy</a>
            <a href="/terms.php" class="text-blue-600 hover:underline">Terms of Conduct</a>
        </nav>
    </footer>
</body>
</html>