<x-layout>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12 -mt-10">
        <div class="flex flex-col lg:flex-row gap-10">
            <!-- Contact Form -->
            <div class="lg:w-2/3">
                <div class="bg-white rounded-xl contact-shadow p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Send us a message</h2>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="firstName" class="block text-gray-700 mb-2">First Name</label>
                                <input type="text" id="firstName" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="John">
                            </div>
                            <div>
                                <label for="lastName" class="block text-gray-700 mb-2">Last Name</label>
                                <input type="text" id="lastName" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="Doe">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="john.doe@example.com">
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-700 mb-2">Subject</label>
                            <input type="text" id="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="How can we help you?">
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 mb-2">Message</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="Your message here..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-4 rounded-lg transition duration-300">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="lg:w-1/3">
                <div class="bg-white rounded-xl contact-shadow p-8 mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Contact Information</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-purple-100 p-3 rounded-lg mr-4">
                                <i class="fas fa-map-marker-alt text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Our Address</h3>
                                <p class="text-gray-600"> kathmandu city <br>maitadevi temple</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-purple-100 p-3 rounded-lg mr-4">
                                <i class="fas fa-phone-alt text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Phone Number</h3>
                                <p class="text-gray-600">+977 97********</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-purple-100 p-3 rounded-lg mr-4">
                                <i class="fas fa-envelope text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Email Address</h3>
                                <p class="text-gray-600">thayayatkeshar@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-purple-100 p-3 rounded-lg mr-4">
                                <i class="fas fa-clock text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Working Hours</h3>
                                <p class="text-gray-600">Subday- Friday: 9:00 - 18:00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="bg-white rounded-xl contact-shadow p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Follow Us</h2>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/share/17cT5autnX/?mibextid=wwXIfr" class="bg-gray-100 hover:bg-purple-600 hover:text-white w-12 h-12 rounded-full flex items-center justify-center transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>


                        <a href="#" class="bg-gray-100 hover:bg-purple-600 hover:text-white w-12 h-12 rounded-full flex items-center justify-center transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/keshar-thyayat-9a0517376/" class="bg-gray-100 hover:bg-purple-600 hover:text-white w-12 h-12 rounded-full flex items-center justify-center transition duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- FAQ Section -->
    <section class="bg-gray-100 py-16 mt-12">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Frequently Asked Questions</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="bg-white p-6 rounded-lg contact-shadow">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">How quickly do you respond to inquiries?</h3>
                    <p class="text-gray-600">We typically respond to all inquiries within 24 hours during business days. For urgent matters, please call our support line.</p>
                </div>
                <div class="bg-white p-6 rounded-lg contact-shadow">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Do you offer customer support?</h3>
                    <p class="text-gray-600">Yes, we offer 24/7 customer support for premium clients. Standard support is available during business hours.</p>
                </div>
                <div class="bg-white p-6 rounded-lg contact-shadow">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Can I schedule a meeting with your team?</h3>
                    <p class="text-gray-600">Absolutely! You can request a meeting through our contact form or by calling our office directly.</p>
                </div>
                <div class="bg-white p-6 rounded-lg contact-shadow">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Where is your main office located?</h3>
                    <p class="text-gray-600">Our headquarters is in San Francisco, but we have satellite offices in New York, London, and Tokyo.</p>
                </div>
            </div>
        </div>
    </section>




</x-layout>
<x-footers/>
