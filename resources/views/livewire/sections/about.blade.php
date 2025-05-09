<div>
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $section->title }}</h2>
                <div class="w-20 h-1 bg-primary mx-auto"></div>
            </div>
            <div class="flex flex-col md:flex-row items-center">
                <div class="w-full md:w-1/2 mb-10 md:mb-0 md:pr-12">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6">My Journey</h3>
                    <div class="prose prose-lg text-gray-700">
                        {!! $section->content !!}
                    </div>
                    @if(isset($section->meta['resume_url']))
                    <a href="{{ $section->meta['resume_url'] }}"
                        class="inline-flex items-center bg-primary hover:bg-primary/90 text-white px-6 py-3 !rounded-button font-medium transition-colors whitespace-nowrap mt-8">
                        <i class="ri-download-line mr-2"></i> Download Resume
                    </a>
                    @endif
                </div>
                <div class="w-full md:w-1/2">
                    <div class="bg-gray-50 rounded-lg p-8 shadow-sm">
                        <h3 class="text-xl font-semibold text-gray-900 mb-6">Education & Experience</h3>
                        <!-- Timeline -->
                        <div class="space-y-8">
                            @foreach($experiences as $experience)
                            <div class="relative pl-8 border-l-2 {{ $experience->is_current ? 'border-primary' : 'border-gray-200' }}">
                                <div class="absolute w-4 h-4 {{ $experience->is_current ? 'bg-primary' : 'bg-gray-300' }} rounded-full -left-[9px] top-1"></div>
                                <div class="mb-1">
                                    <span class="text-sm font-medium {{ $experience->is_current ? 'text-primary' : 'text-gray-500' }}">
                                        {{ $experience->start_date->format('Y') }} - {{ $experience->end_date ? $experience->end_date->format('Y') : 'Present' }}
                                    </span>
                                </div>
                                <h4 class="text-lg font-medium text-gray-900">{{ $experience->title }}</h4>
                                <p class="text-gray-600">{{ $experience->company }}</p>
                                @if($experience->description)
                                <p class="text-gray-600 mt-2">{{ $experience->description }}</p>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
