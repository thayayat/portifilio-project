<x-layout>

<!-- About Section -->
<section class="py-16 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">About Me</h1>
            <div class="w-20 h-1 bg-indigo-600 mx-auto"></div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <!-- Image Section -->
            <div class="lg:w-2/5 flex justify-center">
                <div class="relative">
                    <div class="w-64 h-64 md:w-80 md:h-80 bg-indigo-100 rounded-full overflow-hidden shadow-lg">
                        <img src="/IMG_7980.PNG"
                        alt="Profile Picture" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-4 -right-4 bg-indigo-600 text-white p-4 rounded-lg shadow-lg">
                        <p class="font-bold text-lg">5+ Years</p>
                        <p class="text-sm">Experience</p>
                    </div>
                </div>
            </div>

            <!-- Text Content -->
            <div class="lg:w-3/5">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Hi, I'm Keshar Thayat</h2>
                <h3 class="text-xl text-indigo-600 font-semibold mb-6">Senior Frontend Developer</h3>

                <p class="text-gray-600 mb-6">
                    I'm a passionate frontend developer with over 5 years of experience creating
                    responsive, user-friendly web applications. I specialize in modern JavaScript
                    frameworks and have a keen eye for design and user experience.
                </p>

                <p class="text-gray-600 mb-8">
                        My approach combines technical expertise with creative problem-solving to
                        deliver high-quality solutions that meet both user needs and business objectives.
                        I'm always eager to learn new technologies and take on challenging projects.
                    </p>

                    <!-- Skills -->
                    <div class="mb-8">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4">My Skills</h4>
                        <div class="flex flex-wrap gap-3">
                            <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">React</span>
                            <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">Vue.js</span>
                            <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">TypeScript</span>
                            <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">Tailwind CSS</span>
                            <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">UI/UX Design</span>
                            <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">Responsive Design</span>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-indigo-700 transition duration-300 text-center">
                            Download CV
                        </a>
                        <a href="#" class="border border-indigo-600 text-indigo-600 px-6 py-3 rounded-lg font-medium hover:bg-indigo-50 transition duration-300 text-center">
                            Contact Me
                        </a>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="text-3xl font-bold text-indigo-600 mb-2">50+</div>
                    <div class="text-gray-600">Projects Completed</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="text-3xl font-bold text-indigo-600 mb-2">30+</div>
                    <div class="text-gray-600">Happy Clients</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="text-3xl font-bold text-indigo-600 mb-2">5+</div>
                    <div class="text-gray-600">Years Experience</div>
                </div>
            </div>
        </div>
    </section>

    </x-layout>
    <x-footers />

