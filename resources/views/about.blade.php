<x-layout>

<!-- About Section -->
<section id="about" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-6xl mx-auto">

        <!-- Section Header -->
        <div class="text-center mb-14">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">
                {{ $aboutgenerate->title }}
            </h1>

            <div class="mt-5 flex justify-center">
                <span class="w-20 h-1 rounded-full bg-indigo-600"></span>
            </div>
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            <!-- Profile Image -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="relative">

                    <div class="absolute inset-0 rounded-full bg-indigo-100 scale-105 opacity-60"></div>

                    <div class="relative w-64 h-64 sm:w-72 sm:h-72 md:w-80 md:h-80
                                rounded-full overflow-hidden border-8 border-white shadow-2xl">

                        <img
                            src="{{ asset('storage/' . $aboutgenerate->image) }}"
                            alt="{{ $aboutgenerate->name }}"
                            class="w-full h-full object-cover transition duration-500 hover:scale-105"
                        >

                    </div>

                    <!-- Experience -->
                    <div class="absolute -bottom-5 -right-2 sm:-right-5
                                bg-indigo-600 text-white rounded-2xl px-6 py-4
                                shadow-xl text-center">

                        <h3 class="text-2xl font-extrabold">
                            {{ $aboutgenerate->experience }}
                        </h3>

                        <p class="text-xs sm:text-sm text-indigo-100">
                            {{ $aboutgenerate->experience > 1 ? 'Years Experience' : 'Year Experience' }}
                        </p>
                    </div>

                </div>
            </div>

            <!-- Content -->
            <div class="lg:col-span-7">

                <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-2">
                    Hi, I am
                    <span class="text-indigo-600">
                        {{ $aboutgenerate->name }}
                    </span>
                </h2>

                <h3 class="text-lg sm:text-xl font-semibold text-indigo-600 mb-6">
                    {{ $aboutgenerate->job_title }}
                </h3>

                <!-- Dynamic Description -->
                <p class="text-gray-600 text-sm sm:text-base leading-7
                          max-w-2xl text-justify mb-8">
                    {{ $aboutgenerate->description }}
                </p>

                <!-- Information Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">

                    <!-- Experience Card -->
                    <div class="flex items-center gap-4 p-4 rounded-xl
                                bg-gray-50 border border-gray-100
                                hover:border-indigo-200 hover:shadow-md
                                transition duration-300">

                        <div class="w-11 h-11 shrink-0 flex items-center justify-center
                                    rounded-lg bg-indigo-100 text-indigo-600">

                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0
                                         9 9 0 0118 0z"/>
                            </svg>

                        </div>

                        <div>
                            <p class="text-xs text-gray-500">
                                Experience
                            </p>

                            <p class="font-bold text-gray-800">
                                {{ $aboutgenerate->experience }}+ Years
                            </p>
                        </div>
                    </div>

                    <!-- Profession Card -->
                    <div class="flex items-center gap-4 p-4 rounded-xl
                                bg-gray-50 border border-gray-100
                                hover:border-indigo-200 hover:shadow-md
                                transition duration-300">

                        <div class="w-11 h-11 shrink-0 flex items-center justify-center
                                    rounded-lg bg-indigo-100 text-indigo-600">

                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M21 13.255A23.931 23.931 0 0112 15
                                         c-3.183 0-6.22-.62-9-1.745M16 6V4
                                         a2 2 0 00-2-2h-4a2 2 0 00-2 2v2
                                         m4 6h.01M5 20h14a2 2 0 002-2V8
                                         a2 2 0 00-2-2H5a2 2 0 00-2 2v10
                                         a2 2 0 002 2z"/>
                            </svg>

                        </div>

                        <div class="min-w-0">
                            <p class="text-xs text-gray-500">
                                Profession
                            </p>

                            <p class="font-bold text-gray-800 truncate">
                                {{ $aboutgenerate->job_title }}
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Buttons -->
                <div class="flex flex-wrap gap-4">

                    @if(!empty($aboutgenerate->resume) && file_exists(public_path('storage/' . $aboutgenerate->resume)))
                        <a href="{{ asset('storage/' . $aboutgenerate->resume) }}"
                           target="_blank"
                           class="inline-flex items-center justify-center gap-2
                                  px-6 py-3 rounded-lg bg-indigo-600 text-white
                                  font-semibold shadow-lg shadow-indigo-200
                                  hover:bg-indigo-700 hover:-translate-y-1
                                  transition duration-300">

                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M12 10v6m0 0l-3-3m3 3l3-3
                                         M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5
                                         a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>

                            Download CV
                        </a>
                    @endif

                    <a href="/contact"
                       class="inline-flex items-center justify-center gap-2
                              px-6 py-3 rounded-lg border-2 border-indigo-600
                              text-indigo-600 font-semibold
                              hover:bg-indigo-600 hover:text-white
                              hover:-translate-y-1 transition duration-300">

                        Contact Me
                    </a>

                </div>

            </div>
        </div>

        <!-- Statistics -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mt-16">

            <div class="bg-white rounded-2xl border border-gray-100
                        shadow-sm p-6 text-center
                        hover:shadow-xl hover:-translate-y-1 transition duration-300">

                <h3 class="text-3xl font-extrabold text-indigo-600">10+</h3>
                <p class="text-sm text-gray-500 mt-2">Projects Completed</p>
            </div>

            <div class="bg-white rounded-2xl border border-gray-100
                        shadow-sm p-6 text-center
                        hover:shadow-xl hover:-translate-y-1 transition duration-300">

                <h3 class="text-3xl font-extrabold text-indigo-600">30+</h3>
                <p class="text-sm text-gray-500 mt-2">Happy Clients</p>
            </div>

            <div class="bg-white rounded-2xl border border-gray-100
                        shadow-sm p-6 text-center
                        hover:shadow-xl hover:-translate-y-1 transition duration-300">

                <h3 class="text-3xl font-extrabold text-indigo-600">
                    {{ $aboutgenerate->experience }}
                </h3>

                <p class="text-sm text-gray-500 mt-2">
                    Years Experience
                </p>
            </div>

        </div>

    </div>
</section>

     <!-- Header -->
<div class="py-16 px-4 bg-gray-50">

<header class="text-center mb-10 mt-20">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-900">Skills & Experience</h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">A showcase of my technical expertise, professional experience, and continuous learning journey in the tech industry.</p>
        </header>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Column: Skills -->
            <div class="lg:w-1/2">
                <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
                    <h2 class="text-2xl font-bold mb-6 text-gray-900 flex items-center">
                        <i class="fas fa-code mr-3 text-blue-500"></i> Technical Skills
                    </h2>

                    <div class="space-y-6">
                        <!-- Skill 1 -->
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">Frontend Development</span>
                                <span class="font-bold text-blue-600">95%</span>
                            </div>
                            <div class="h-3 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-blue-500 to-indigo-600 skill-bar" style="width: 95%"></div>
                            </div>
                            <div class="mt-2 flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">React</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Vue.js</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Tailwind CSS</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">JavaScript</span>
                            </div>
                        </div>

                        <!-- Skill 2 -->
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">Backend Development</span>
                                <span class="font-bold text-blue-600">50%</span>
                            </div>
                            <div class="h-3 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-blue-500 to-indigo-600 skill-bar" style="width: 50%"></div>
                            </div>
                            <div class="mt-2 flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-green-100 text-green-800 text-sm rounded-full">Node.js</span>
                                <span class="px-3 py-1 bg-green-100 text-green-800 text-sm rounded-full">Python</span>
                                <span class="px-3 py-1 bg-green-100 text-green-800 text-sm rounded-full">laravel</span>
                                <span class="px-3 py-1 bg-green-100 text-green-800 text-sm rounded-full"> php mySQL</span>
                            </div>
                        </div>

                        <!-- Skill 3 -->
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">UI/UX Design</span>
                                <span class="font-bold text-blue-600">10%</span>
                            </div>
                            <div class="h-3 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-blue-500 to-indigo-600 skill-bar" style="width: 10%"></div>
                            </div>
                            <div class="mt-2 flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 text-sm rounded-full">Figma</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 text-sm rounded-full">Adobe XD</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 text-sm rounded-full">Prototyping</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 text-sm rounded-full">Wireframing</span>
                            </div>
                        </div>

                        <!-- Skill 4 -->
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">DevOps & Cloud</span>
                                <span class="font-bold text-blue-600">50%</span>
                            </div>
                            <div class="h-3 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-blue-500 to-indigo-600 skill-bar" style="width: 50%"></div>
                            </div>
                            <div class="mt-2 flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">AWS</span>
                                <span class="px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">Docker</span>
                                <span class="px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">CI/CD</span>
                                <span class="px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">Linux</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Soft Skills -->
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h2 class="text-2xl font-bold mb-6 text-gray-900 flex items-center">
                        <i class="fas fa-users mr-3 text-green-500"></i> Soft Skills
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div class="bg-green-50 p-4 rounded-xl text-center">
                            <i class="fas fa-comments text-green-600 text-2xl mb-2"></i>
                            <h3 class="font-bold">Communication</h3>
                        </div>
                        <div class="bg-green-50 p-4 rounded-xl text-center">
                            <i class="fas fa-brain text-green-600 text-2xl mb-2"></i>
                            <h3 class="font-bold">Problem Solving</h3>
                        </div>
                        <div class="bg-green-50 p-4 rounded-xl text-center">
                            <i class="fas fa-tasks text-green-600 text-2xl mb-2"></i>
                            <h3 class="font-bold">Project Management</h3>
                        </div>
                        <div class="bg-green-50 p-4 rounded-xl text-center">
                            <i class="fas fa-lightbulb text-green-600 text-2xl mb-2"></i>
                            <h3 class="font-bold">Creativity</h3>
                        </div>
                        <div class="bg-green-50 p-4 rounded-xl text-center">
                            <i class="fas fa-handshake text-green-600 text-2xl mb-2"></i>
                            <h3 class="font-bold">Teamwork</h3>
                        </div>
                        <div class="bg-green-50 p-4 rounded-xl text-center">
                            <i class="fas fa-clock text-green-600 text-2xl mb-2"></i>
                            <h3 class="font-bold">Time Management</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Experience -->
            <div class="lg:w-1/2">
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h2 class="text-2xl font-bold mb-8 text-gray-900 flex items-center">
                        <i class="fas fa-briefcase mr-3 text-purple-500"></i> Work Experience
                    </h2>

                    <!-- Timeline -->
                    <div class="relative timeline pl-0 md:pl-12">
                        <!-- Experience 1 -->
                        <div class="relative mb-10 experience-card bg-gradient-to-r from-blue-50 to-white p-5 rounded-xl border-l-4 border-blue-500">
                            <div class="absolute -left-12 top-0 hidden md:flex">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-500 text-white">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                            </div>
                            <div class="md:flex justify-between items-start">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Senior Frontend Developer</h3>
                                    <p class="text-blue-600 font-medium">TechVision Inc.</p>
                                </div>
                                <span class="inline-block px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-bold mt-2 md:mt-0">2024 - Present</span>
                            </div>
                            <p class="mt-3 text-gray-600">Lead frontend development for multiple SaaS products, implemented responsive designs, and mentored junior developers. Increased user engagement by 40% through UI/UX improvements.</p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-200 text-gray-800 text-sm rounded-full">html-5</span>
                                <span class="px-3 py-1 bg-gray-200 text-gray-800 text-sm rounded-full">TypeScript</span>
                                <span class="px-3 py-1 bg-gray-200 text-gray-800 text-sm rounded-full">js</span>
                                <span class="px-3 py-1 bg-gray-200 text-gray-800 text-sm rounded-full">Tailwind CSS</span>
                            </div>
                        </div>

                        <!-- Experience 2 -->
                        <div class="relative mb-10 experience-card bg-gradient-to-r from-green-50 to-white p-5 rounded-xl border-l-4 border-green-500">
                            <div class="absolute -left-12 top-0 hidden md:flex">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-green-500 text-white">
                                    <i class="fas fa-code"></i>
                                </div>
                            </div>
                            <div class="md:flex justify-between items-start">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Full Stack Developer</h3>
                                    <p class="text-green-600 font-medium">Digital Solutions LLC</p>
                                </div>
                                <span class="inline-block px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm font-bold mt-2 md:mt-0">2024 - 2025    </span>
                            </div>
                            <p class="mt-3 text-gray-600">Developed full-stack web applications with React frontend and Node.js backend. Collaborated with cross-functional teams to deliver scalable solutions for clients in various industries.</p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-200 text-gray-800 text-sm rounded-full">Node.js</span>
                                <span class="px-3 py-1 bg-gray-200 text-gray-800 text-sm rounded-full">laravel</span>
                                <span class="px-3 py-1 bg-gray-200 text-gray-800 text-sm rounded-full">php mysql</span>
                                <span class="px-3 py-1 bg-gray-200 text-gray-800 text-sm rounded-full">filament</span>
                            </div>
                        </div>

                        <!-- Experience 3 -->
                        <div class="relative experience-card bg-gradient-to-r from-purple-50 to-white p-5 rounded-xl border-l-4 border-purple-500">
                            <div class="absolute -left-12 top-0 hidden md:flex">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-500 text-white">
                                    <i class="fas fa-paint-brush"></i>
                                </div>
                            </div>
                            <div class="md:flex justify-between items-start">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Web Designer & Developer</h3>
                                    <p class="text-purple-600 font-medium">Creative Minds Agency</p>
                                </div>
                                <span class="inline-block px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm font-bold mt-2 md:mt-0">2024 - 2025</span>
                            </div>
                            <p class="mt-3 text-gray-600">Designed and developed responsive websites for small to medium businesses. Created custom WordPress themes and implemented interactive UI elements with JavaScript.</p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-200 text-gray-800 text-sm rounded-full">WordPress</span>
                                <span class="px-3 py-1 bg-gray-200 text-gray-800 text-sm rounded-full">PHP</span>
                                <span class="px-3 py-1 bg-gray-200 text-gray-800 text-sm rounded-full">JavaScript</span>
                                <span class="px-3 py-1 bg-gray-200 text-gray-800 text-sm rounded-full">CSS3</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Education & Certifications -->
                <div class="mt-8 bg-white rounded-2xl shadow-lg p-6">
                    <h2 class="text-2xl font-bold mb-6 text-gray-900 flex items-center">
                        <i class="fas fa-graduation-cap mr-3 text-red-500"></i> Education & Certifications
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-red-50 p-4 rounded-xl">
                            <h3 class="font-bold text-lg flex items-center">
                                <i class="fas fa-university text-red-500 mr-2"></i> code id nepal
                            </h3>
                            <p class="text-gray-600"> instuties</p>
                            <p class="text-sm text-gray-500">2024 - 2025</p>
                        </div>
                        <div class="bg-red-50 p-4 rounded-xl">
                            <h3 class="font-bold text-lg flex items-center">
                                <i class="fas fa-certificate text-red-500 mr-2"></i> full stack developer Certified Developer
                            </h3>
                            <p class="text-gray-600"> Web  degineServices</p>
                            <p class="text-sm text-gray-500">2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>


    <x-footers />
