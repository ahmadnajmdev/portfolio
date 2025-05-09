<div>
    <section id="projects" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $section->title }}</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-8"></div>
                <p class="text-gray-700 max-w-2xl mx-auto">
                    {{ $section->subtitle }}
                </p>
            </div>
            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                <div class="project-card bg-white rounded-lg overflow-hidden shadow-md transition-transform hover:shadow-lg hover:-translate-y-1"
                    data-category="{{ $project->category }}">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ $project->image_url }}"
                            alt="{{ $project->title }}" class="w-full h-full object-cover object-top">
                        <div
                            class="project-overlay absolute inset-0 bg-primary/80 flex items-center justify-center opacity-0 transition-opacity">
                            <div class="flex space-x-3">
                                @if($project->live_url)
                                <a href="{{ $project->live_url }}" target="_blank"
                                    class="bg-white text-primary w-10 h-10 rounded-full flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-external-link-line"></i>
                                </a>
                                @endif
                                @if($project->github_url)
                                <a href="{{ $project->github_url }}" target="_blank"
                                    class="bg-white text-primary w-10 h-10 rounded-full flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-github-fill"></i>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $project->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ $project->description }}</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach($project->technologies as $tech)
                            <span class="text-xs font-medium bg-blue-100 text-blue-800 px-2 py-1 rounded">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
