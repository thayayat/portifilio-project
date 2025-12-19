<x-layout>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center px-4 py-4">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="space-y-6">
                <div>
                    <span class="text-indigo-600 font-semibold">Hello, I'm</span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mt-2">Keshar Thayat</h1>
                    <div class="flex items-center mt-2">
                        <div class="h-1 w-12 bg-indigo-600 mr-2"></div>
                        <h2 class="text-xl md:text-2xl text-gray-700">Full Stack Developer</h2>
                    </div>
                </div>

                <p class="text-lg text-gray-600 max-w-lg">
                    I create beautiful, functional websites and applications with a focus on user experience and clean
                    code. Let's build something amazing together.
                </p>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="/services"
                    class="px-6 py-3 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 transition duration-300 shadow-lg">
                    View My Work
                </a>
                <a href="/contact"
                class="px-6 py-3 border border-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-100 transition duration-300">
                Contact Me
            </a>
        </div>

        <div class="flex space-x-6 pt-6">
            <a href="https://github.com/thayayat" class="text-gray-500 hover:text-indigo-600 transition duration-300">
                        <i class="fab fa-github text-3xl"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/keshar-thyayat-9a0517376/"
                    class="text-gray-500 hover:text-indigo-600 transition duration-300">
                    <i class="fab fa-linkedin text-3xl"></i>
                </a>
                <a href="https://www.facebook.com/share/17cT5autnX/?mibextid=wwXIfr" class="text-gray-500 hover:text-indigo-600 transition duration-300">
                    <i class="fa-brands fa-facebook text-3xl"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-indigo-600 transition duration-300">
                        <i class="fa-brands fa-instagram text-3xl"></i>
                    </a>
                </div>
            </div>

            <!-- Image/Illustration -->
            <div >
                <div class="bg-gradient-to-br from-indigo-100 to-purple-100 rounded-2xl p-8 lg:p-12">

                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="/IMG_7979.PNG" class="w-90 h-65  object-cover rounded-full shadow-2xl"
                        alt="mockup">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section (Optional addition) -->

    <section class="py-12 bg-white shadow-2xl">
        <div class="max-w-6xl mx-auto px-4 marker:">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-8">Skills & Technologies</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <i class="fab fa-js-square text-4xl text-yellow-400 mb-2"></i>
                    <p class="font-medium">JavaScript</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <i class="fab fa-react text-4xl text-blue-500 mb-2"></i>
                    <p class="font-medium">React</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <i class="fab fa-node-js text-4xl text-green-600 mb-2"></i>
                    <p class="font-medium">Node.js</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <i class="fab fa-python text-4xl text-blue-700 mb-2"></i>
                    <p class="font-medium">Python</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <i class="fa-brands fa-laravel text-4xl text-red-500 mb-2"></i>
                    <p class="font-medium">laravel</p>
                </div>

                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <i class="fa-brands fa-html5 text-4xl text-red-500 mb-2"></i>
                    <p class="font-medium">html-5</p>
                </div>

                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <i class="fa-brands fa-css3 text-4xl text-blue-700 mb-2"></i>
                    <p class="font-medium">css</p>
                </div>
            </div>
        </div>
    </section>



        <!-- Main Content -->
    <main class="container mx-auto px-6 py-12">
        <!-- Stats Section -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition duration-300">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-certificate text-purple-600 text-2xl"></i>
                </div>
                <div class="text-3xl font-bold text-purple-600 mb-2">5</div>
                <div class="text-gray-600">Total Certifications</div>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition duration-300">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-user-tie text-blue-600 text-2xl"></i>
                </div>
                <div class="text-3xl font-bold text-purple-600 mb-2">1</div>
                <div class="text-gray-600">web desigine</div>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition duration-300">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-code text-green-600 text-2xl"></i>
                </div>
                <div class="text-3xl font-bold text-purple-600 mb-2">1</div>
                <div class="text-gray-600">GITAND GITHUB</div>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition duration-300">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-spinner text-orange-600 text-2xl"></i>
                </div>
                <div class="text-3xl font-bold text-purple-600 mb-2">1</div>
                <div class="text-gray-600">LARAVEL</div>
            </div>
        </div>

        <!-- Certifications Grid -->
        <div class="mb-16">
            <div class="flex items-center mb-8">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full flex items-center justify-center mr-4">
                    <i class="fas fa-award text-white text-2xl"></i>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">My Certifications</h2>
                    <p class="text-gray-600">Professional credentials that validate my skills and expertise</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Certification 1 - AWS -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1 border-l-4 border-purple-500">
                    <div class="h-40 bg-gradient-to-r from-purple-500 to-indigo-600 relative overflow-hidden">
                        <img src="/certif.jpg"
                             alt="AWS Cloud"
                             class="w-full h-full object-cover opacity-100">
                        {{-- <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fab fa-aws text-white text-6xl"></i>
                        </div> --}}
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm font-medium">Professional</span>
                            <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs font-medium">Verified</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">WEB Desigine</h3>
                        <p class="text-gray-600 mb-4"> Web Services - 2025</p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>May 2023 - May 2025</span>
                        </div>
                        <button class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 rounded-lg font-medium transition duration-300 flex items-center justify-center">
                            View Credential
                            <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>



                <!-- Certification 4 - Security -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1 border-l-4 border-red-500">
                    <div class="h-40 bg-gradient-to-r from-red-500 to-pink-600 relative overflow-hidden">
                        <img src="/laravel.jpg"
                             alt="Cybersecurity"
                             class="w-full h-full object-cover opacity-100">
                        {{-- <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-shield-alt text-white text-6xl"></i>
                        </div> --}}
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm font-medium">completed</span>
                            <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs font-medium">Verified</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Certified laravel and full stack development</h3>

                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>Aug 2022 - Aug 2025</span>
                        </div>
                        <button class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg font-medium transition duration-300 flex items-center justify-center">
                            View Credential
                            <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>


                <!-- Certification 6 - In Progress -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1 border-l-4 border-indigo-500">
                    <div class="h-40 bg-gradient-to-r from-indigo-500 to-purple-600 relative overflow-hidden">
                        <img src="/github.jpg"
                             alt="React Development"
                             class="w-full h-full object-cover opacity-100">
                        {{-- <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fab fa-react text-white text-6xl"></i>
                        </div> --}}
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-indigo-100 text-red-600 px-3 py-1 rounded-full text-sm font-medium">complete</span>
                            <span class="bg-blue-100 text-green-500600 px-2 py-1 rounded text-xs font-medium">verifird</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Git and github</h3>

                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <i class="fas fa-hourglass-half mr-2"></i>
                            <span>Started august 2025</span>
                        </div>
                        <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg font-medium transition duration-300 flex items-center justify-center">
                            View Progress
                            <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </main>

</x-layout>

<x-footers />


