<x-layout>
 <!-- Hero Section -->
<section class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 py-20 bg-white">
    <div class="max-w-6xl w-full mx-auto">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <!-- Text Content -->
            <div class="space-y-6 text-center lg:text-left">

                <!-- Bio -->
                <span class="inline-block text-indigo-600 font-semibold text-sm sm:text-base">
                    {{$profile?->name ?? 'portifolio' }}
                </span>

                <!-- Name -->
                <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold
                           text-gray-900 tracking-tight">
                    {{ $profile?->bio ?? 'Welcome to my portifolio' }}
                </h1>

                <!-- Title -->
                <div class="flex items-center justify-center lg:justify-start gap-3">
                    <span class="w-10 h-1 bg-indigo-600 rounded-full"></span>

                    <h2 class="text-xl sm:text-2xl font-medium text-gray-700">
                        {{ $profile?->title ?? 'Software Developer'}}
                    </h2>
                </div>

                <!-- Description -->
                <p class="text-base sm:text-lg text-gray-600
                          leading-8 max-w-xl mx-auto lg:mx-0">
                    {{ $profile?->description ?? 'I am a passionate software developer with experience in creating dynamic web applications.' }}
                </p>

                <!-- Buttons -->
                <div class="flex flex-wrap justify-center lg:justify-start gap-4 pt-3">

                    <a href="/services"
                       class="inline-flex items-center justify-center
                              px-7 py-3.5
                              bg-indigo-600 text-white
                              font-semibold rounded-lg
                              shadow-lg shadow-indigo-200
                              hover:bg-indigo-700
                              hover:-translate-y-1
                              transition duration-300">

                        View My Work
                    </a>

                    <a href="/contact"
                       class="inline-flex items-center justify-center
                              px-7 py-3.5
                              border-2 border-gray-200
                              text-gray-700
                              font-semibold rounded-lg
                              hover:border-indigo-600
                              hover:text-indigo-600
                              hover:bg-indigo-50
                              hover:-translate-y-1
                              transition duration-300">

                        Contact Me
                    </a>

                </div>

                <!-- Social Links -->
                <div class="flex justify-center lg:justify-start
                            items-center gap-6 pt-4">

                    @if($profile?->github)
                        <a href="{{ $profile?->github }}"
                           target="_blank"
                           class="text-gray-500 hover:text-indigo-600
                                  hover:-translate-y-1 transition duration-300">
                            <i class="fab fa-github text-2xl"></i>
                        </a>
                    @endif

                    @if($profile?->linkedin)
                        <a href="{{ $profile?->linkedin }}"
                           target="_blank"
                           class="text-gray-500 hover:text-indigo-600
                                  hover:-translate-y-1 transition duration-300">
                            <i class="fab fa-linkedin text-2xl"></i>
                        </a>
                    @endif

                    @if($profile?->facebook)
                        <a href="{{ $profile?->facebook }}"
                           target="_blank"
                           class="text-gray-500 hover:text-indigo-600
                                  hover:-translate-y-1 transition duration-300">
                            <i class="fab fa-facebook text-2xl"></i>
                        </a>
                    @endif

                    @if($profile?->instagram)
                        <a href="{{ $profile?->instagram }}"
                           target="_blank"
                           class="text-gray-500 hover:text-indigo-600
                                  hover:-translate-y-1 transition duration-300">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                    @endif

                    @if($profile?->whatsapp)
                        <a href="{{ $profile?->whatsapp }}"
                           target="_blank"
                           class="text-gray-500 hover:text-green-500
                                  hover:-translate-y-1 transition duration-300">
                            <i class="fab fa-whatsapp text-2xl"></i>
                        </a>
                    @endif

                </div>

            </div>


            <!-- Profile Image -->
            <div class="flex justify-center lg:justify-end">

                <div class="relative">

                    <!-- Background Shape -->
                    <div class="absolute inset-0
                                bg-gradient-to-br from-indigo-100 to-purple-100
                                rounded-full scale-105 blur-sm">
                    </div>

                    <!-- Image Container -->
                    <div class="relative
                                w-64 h-64
                                sm:w-80 sm:h-80
                                lg:w-[400px] lg:h-[400px]
                                rounded-full
                                bg-gradient-to-br from-indigo-100 to-purple-100
                                p-3 shadow-2xl">

                        <div class="w-full h-full rounded-full
                                    overflow-hidden bg-white">

                            <img
                                src="/IMG_7979.PNG"
                                alt="{{ $profile?->name ?? 'Profile' }}"
                                class="w-full h-full object-cover
                                       hover:scale-105
                                       transition duration-500"
                            >

                        </div>

                    </div>

                    <!-- Decorative Dot -->
                    <div class="absolute -top-3 -right-3
                                w-6 h-6 bg-indigo-600
                                rounded-full shadow-lg">
                    </div>

                    <div class="absolute bottom-5 -left-4
                                w-4 h-4 bg-purple-500
                                rounded-full shadow-lg">
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
{{-- Skills & Technologies --}}
<section class="py-12 bg-white shadow-2xl">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Skills & Technologies</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Technologies and tools I work with to build amazing digital experiences
            </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
            @foreach($skills as $skill)
                <div class="group relative p-6 bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 overflow-hidden">

                    <!-- Glow Effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-{{ $skill->color ?? 'blue-500' }} to-purple-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>

                    <div class="relative flex flex-col items-center">

                        <!-- Icon / Image -->
                        <div class="w-20 h-20 rounded-full bg-white shadow-lg flex items-center justify-center mb-4 group-hover:shadow-2xl transition-all duration-300 group-hover:scale-110 overflow-hidden">
                            @if($skill->image)
                                <img
                                    src="{{ asset('storage/' . $skill->image) }}"
                                    alt="{{ $skill->name }}"
                                    class="w-12 h-12 object-contain"
                                >
                            @else
                                <i class="fas fa-code text-3xl text-{{ $skill->color ?? 'blue-500' }}"></i>
                            @endif
                        </div>

                        <p class="font-semibold text-gray-800 text-center text-base group-hover:text-{{ $skill->color ?? 'blue-600' }} transition-colors duration-300">
                            {{ $skill->name }}
                        </p>

                        <!-- Proficiency Bar -->
                        <div class="w-full mt-3 bg-gray-200 rounded-full h-2 overflow-hidden">
                            <div class="bg-gradient-to-r from-{{ $skill->color ?? 'blue-500' }} to-purple-500 h-full rounded-full transition-all duration-1000 ease-out"
                                 style="width: 0%"
                                 data-proficiency="{{ $skill->proficiency }}">
                            </div>
                        </div>

                        <span class="text-xs text-gray-500 mt-1">{{ $skill->proficiency }}%</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Certifications Grid -->
<div class="mb-16">
    <div class="flex items-center mb-8">
        <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full flex items-center justify-center mr-4">
            <i class="fas fa-award text-white text-2xl"></i>
        </div>
        <div>
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Certifications</h2>
            <p class="text-gray-600">Professional credentials that validate my skills and expertise</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($certifications as $certification)
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1 border-l-4 border-purple-500">
                <div class="h-40 bg-gradient-to-r from-purple-500 to-indigo-600 relative overflow-hidden">
                    <img src="{{ $certification->image_path ? asset('storage/' . $certification->image_path) : '/certif.jpg' }}"
                         alt="{{ $certification->title }}"
                         class="w-full h-full object-cover opacity-100">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm font-medium">
                            {{ $certification->category }}
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $certification->course_title }}</h3>
                    <p class="text-gray-600 mb-4">{{ $certification->organization }}</p>
                    <p class="text-sm text-gray-500 mb-1">Provider: {{ $certification->provider }}</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>
                            {{ $certification->date_range ?? $certification->start_date }}
                        </span>
                    </div>
                    <a href="{{ $certification->image_path ? asset('storage/' . $certification->image_path) : '#' }}"
                       target="_blank"
                       class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 rounded-lg font-medium transition duration-300 flex items-center justify-center">
                        View Credential
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        @empty
            <p class="text-gray-500 col-span-full text-center">No certifications added yet.</p>
        @endforelse
    </div>
</div>


</x-layout>
<x-footers />




