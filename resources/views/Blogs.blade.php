<x-layout>


    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12">
        <div class="flex flex-col lg:flex-row gap-10">
            <!-- Articles Section -->
            <div class="lg:w-2/3">
                <h2 class="text-2xl font-bold text-gray-800 mb-8">Latest Articles</h2>

                <!-- Article Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Article 1 -->
                    <article class="bg-white rounded-xl overflow-hidden shadow-md card-hover">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="React Hooks" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded">Technology</span>
                                <span class="mx-2">•</span>
                                <span>May 12, 2023</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Getting Started with React Hooks</h3>
                            <p class="text-gray-600 mb-4">Learn how to use React Hooks to simplify your functional components and manage state effectively.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Alex Chen" class="w-8 h-8 rounded-full mr-2 object-cover">
                                    <span class="text-sm text-gray-700">Alex Chen</span>
                                </div>
                                <a href="#" class="text-purple-600 hover:text-purple-800 font-medium text-sm">Read More →</a>
                            </div>
                        </div>
                    </article>

                    <!-- Article 2 -->
                    <article class="bg-white rounded-xl overflow-hidden shadow-md card-hover">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="Remote Work" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <span class="bg-green-100 text-green-600 px-2 py-1 rounded">Productivity</span>
                                <span class="mx-2">•</span>
                                <span>May 10, 2023</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">10 Tips for Remote Work Success</h3>
                            <p class="text-gray-600 mb-4">Maximize your productivity and maintain work-life balance while working from home with these proven strategies.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Maria Rodriguez" class="w-8 h-8 rounded-full mr-2 object-cover">
                                    <span class="text-sm text-gray-700">Maria Rodriguez</span>
                                </div>
                                <a href="#" class="text-purple-600 hover:text-purple-800 font-medium text-sm">Read More →</a>
                            </div>
                        </div>
                    </article>

                    <!-- Article 3 -->
                    <article class="bg-white rounded-xl overflow-hidden shadow-md card-hover">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1558655146-364adaf1fcc9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2064&q=80" alt="Minimalist Design" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <span class="bg-red-100 text-red-600 px-2 py-1 rounded">Design</span>
                                <span class="mx-2">•</span>
                                <span>May 8, 2023</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">The Principles of Minimalist Design</h3>
                            <p class="text-gray-600 mb-4">Discover how minimalist design can create more effective user experiences and cleaner interfaces.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="James Wilson" class="w-8 h-8 rounded-full mr-2 object-cover">
                                    <span class="text-sm text-gray-700">James Wilson</span>
                                </div>
                                <a href="#" class="text-purple-600 hover:text-purple-800 font-medium text-sm">Read More →</a>
                            </div>
                        </div>
                    </article>

                    <!-- Article 4 -->
                    <article class="bg-white rounded-xl overflow-hidden shadow-md card-hover">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2015&q=80" alt="Personal Brand" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <span class="bg-purple-100 text-purple-600 px-2 py-1 rounded">Business</span>
                                <span class="mx-2">•</span>
                                <span>May 5, 2023</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">How to Build a Personal Brand in 2023</h3>
                            <p class="text-gray-600 mb-4">A step-by-step guide to establishing a strong personal brand that stands out in today's competitive market.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Taylor Smith" class="w-8 h-8 rounded-full mr-2 object-cover">
                                    <span class="text-sm text-gray-700">Taylor Smith</span>
                                </div>
                                <a href="#" class="text-purple-600 hover:text-purple-800 font-medium text-sm">Read More →</a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Load More Button -->
                <div class="text-center mt-12">
                    <button class="bg-white border border-purple-600 text-purple-600 hover:bg-purple-50 px-6 py-3 rounded-lg font-medium transition duration-300">
                        Load More Articles
                    </button>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:w-1/3">
                <!-- About Card -->
                <div class="bg-white rounded-xl shadow-md p-6 mb-8">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Logo" class="h-12 w-12 rounded-full mr-3">
                        <h3 class="text-xl font-bold text-gray-800">About ModernBlog</h3>
                    </div>
                    <p class="text-gray-600 mb-4">We share insights about technology, design, productivity, and business to help you grow personally and professionally.</p>
                    <button class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 rounded-lg font-medium transition duration-300">
                        Subscribe to Newsletter
                    </button>
                </div>

                <!-- Categories -->
                <div class="bg-white rounded-xl shadow-md p-6 mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Categories</h3>
                    <ul class="space-y-3">
                        <li class="flex justify-between items-center pb-2 border-b border-gray-100">
                            <a href="#" class="text-gray-700 hover:text-purple-600">Technology</a>
                            <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-xs">12</span>
                        </li>
                        <li class="flex justify-between items-center pb-2 border-b border-gray-100">
                            <a href="#" class="text-gray-700 hover:text-purple-600">Design</a>
                            <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-xs">8</span>
                        </li>
                        <li class="flex justify-between items-center pb-2 border-b border-gray-100">
                            <a href="#" class="text-gray-700 hover:text-purple-600">Productivity</a>
                            <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-xs">5</span>
                        </li>
                        <li class="flex justify-between items-center pb-2 border-b border-gray-100">
                            <a href="#" class="text-gray-700 hover:text-purple-600">Business</a>
                            <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-xs">7</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <a href="#" class="text-gray-700 hover:text-purple-600">Lifestyle</a>
                            <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-xs">4</span>
                        </li>
                    </ul>
                </div>

                <!-- Popular Posts -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Popular Posts</h3>
                    <div class="space-y-4">
                        <div class="flex">
                            <div class="w-16 h-16 rounded-lg flex-shrink-0 mr-4 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Tailwind CSS" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-800 mb-1">Mastering Tailwind CSS</h4>
                                <p class="text-sm text-gray-500">May 3, 2023</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-16 h-16 rounded-lg flex-shrink-0 mr-4 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="AI Future" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-800 mb-1">The Future of AI</h4>
                                <p class="text-sm text-gray-500">April 28, 2023</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-16 h-16 rounded-lg flex-shrink-0 mr-4 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Side Business" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-800 mb-1">Building a Side Business</h4>
                                <p class="text-sm text-gray-500">April 22, 2023</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Instagram Feed -->
                <div class="bg-white rounded-xl shadow-md p-6 mt-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Instagram Feed</h3>
                    <div class="grid grid-cols-3 gap-2">
                        <a href="#" class="overflow-hidden rounded-lg">
                            <img src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Instagram Post" class="w-full h-24 object-cover hover:scale-110 transition duration-300">
                        </a>
                        <a href="#" class="overflow-hidden rounded-lg">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Instagram Post" class="w-full h-24 object-cover hover:scale-110 transition duration-300">
                        </a>
                        <a href="#" class="overflow-hidden rounded-lg">
                            <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Instagram Post" class="w-full h-24 object-cover hover:scale-110 transition duration-300">
                        </a>
                        <a href="#" class="overflow-hidden rounded-lg">
                            <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Instagram Post" class="w-full h-24 object-cover hover:scale-110 transition duration-300">
                        </a>
                        <a href="#" class="overflow-hidden rounded-lg">
                            <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Instagram Post" class="w-full h-24 object-cover hover:scale-110 transition duration-300">
                        </a>
                        <a href="#" class="overflow-hidden rounded-lg">
                            <img src="https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Instagram Post" class="w-full h-24 object-cover hover:scale-110 transition duration-300">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-layout>

<x-footers />
