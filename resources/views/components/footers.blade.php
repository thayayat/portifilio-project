<!-- Footer -->
<footer class="bg-gray-900 text-white">
    <div class="container mx-auto px-4 pt-12 pb-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="space-y-4">
                <img src="/imglogo.png" class="rounded-full h-15 w-15" alt="">
                <h3 class="text-xl font-bold">{{ $profile?->name ?? 'Keshar Thayayat' }}</h3>
                <p class="text-gray-400 leading-relaxed">
                    {{ $profile?->description ?? 'Creating beautiful, functional designs that help businesses stand out and connect with their audience.' }}
                </p>
            </div>

            <!-- Quick Links -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="/" class="text-gray-400 hover:text-red-500 transition-colors font-bold">Home</a></li>
                    <li><a href="/about" class="text-gray-400 hover:text-red-500 transition-colors font-bold">About</a></li>
                    <li><a href="/projects" class="text-gray-400 hover:text-red-500 transition-colors font-bold">Projects</a></li>
                    <li><a href="/services" class="text-gray-400 hover:text-red-500 transition-colors font-bold">Services</a></li>
                    <li><a href="/blogs" class="text-gray-400 hover:text-red-500 transition-colors font-bold">Blogs</a></li>
                    <li><a href="/contact" class="text-gray-400 hover:text-red-500 transition-colors font-bold">Contact</a></li>
                </ul>
            </div>


            <!-- Services -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold">Our Services</h3>
                <div class="flex space-x-4 pt-2">
                    @if($profile?->facebook)
                        <a href="{{ $profile->facebook }}" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    @endif
                    @if($profile?->github)
                        <a href="{{ $profile->github }}" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-github"></i>
                        </a>
                    @endif
                    @if($profile?->instagram)
                        <a href="{{ $profile->instagram }}" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                    @endif
                    @if($profile?->linkedin)
                        <a href="{{ $profile->linkedin }}" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    @endif
                </div>
            </div>

            <!-- Contact Info -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold">Contact Us</h3>
                <div class="space-y-2 text-gray-400">
                    <p class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 mr-3"></i>
                        <span>{{ $profile?->address ?? 'Kathmandu, Maitidevi, Nepal' }}</span>
                    </p>
                    <p class="flex items-center">
                        <i class="fas fa-phone-alt mr-3"></i>
                        <span>{{ $profile?->whatsapp ?? '+977 9766066773' }}</span>
                    </p>
                    <p class="flex items-center">
                        <i class="fas fa-envelope mr-3"></i>
                        <span>{{ $profile?->email ?? 'thayayatkeshar@gmail.com' }}</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-500 text-sm">© {{ date('Y') }} {{ $profile?->name ?? 'Keshar Thayayat' }}. All rights reserved.</p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="text-gray-500 hover:text-white text-sm transition-colors">Privacy Policy</a>
                <a href="#" class="text-gray-500 hover:text-white text-sm transition-colors">Terms of Service</a>
                <a href="#" class="text-gray-500 hover:text-white text-sm transition-colors">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>
