<div>
    <section id="home" class="min-h-screen relative overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100">
        <div class="absolute inset-0"
            style="background-image: url('https://readdy.ai/api/search-image?query=modern%20minimalist%20tech%20workspace%20with%20floating%20geometric%20shapes%20and%20soft%20gradient%20overlays%2C%20clean%20professional%20environment%20with%20subtle%20technology%20elements%2C%20perfect%20for%20hero%20section%20background%2C%20ultra%20wide%20screen%20format%2C%20muted%20colors%20with%20emphasis%20on%20white%20space%20and%20subtle%20blue%20accents&width=1920&height=1080&seq=hero3&orientation=landscape'); background-size: cover; background-position: center;">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-white via-white/95 to-transparent"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="min-h-screen flex items-center py-32">
                <div class="w-full max-w-4xl">
                    <div class="flex flex-col space-y-6">
                        <span class="text-primary font-semibold tracking-wider uppercase text-sm">{{ $hero->subtitle }}</span>
                        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 leading-tight">
                            {!! $hero->title !!}
                        </h1>
                        <p class="text-xl text-gray-600 max-w-2xl leading-relaxed">
                            {{ $hero->content }}
                        </p>
                        <div class="flex flex-wrap gap-4 mt-4">
                            <a href="#projects"
                                class="group bg-primary hover:bg-primary/90 text-white px-8 py-4 !rounded-button font-medium transition-all duration-300 whitespace-nowrap flex items-center justify-center">
                                <span>{{ $hero->meta['cta_primary'] }}</span>
                                <i class="ri-arrow-right-line ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                            </a>
                            <a href="#contact"
                                class="group bg-white hover:bg-gray-50 text-gray-900 px-8 py-4 !rounded-button font-medium transition-all duration-300 whitespace-nowrap flex items-center justify-center border-2 border-gray-200">
                                <i class="ri-mail-line mr-2"></i>
                                <span>{{ $hero->meta['cta_secondary'] }}</span>
                            </a>
                        </div>
                        @if(isset($hero->meta['stats']))
                        <div class="flex items-center gap-8 mt-12 pt-8 border-t border-gray-200">
                            @foreach($hero->meta['stats'] as $stat)
                            <div class="flex items-center gap-2">
                                <div class="w-12 h-12 flex items-center justify-center {{ $stat['bg_color'] }} {{ $stat['text_color'] }} rounded-full">
                                    <i class="{{ $stat['icon'] }} ri-lg"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">{{ $stat['value'] }}</div>
                                    <div class="text-sm text-gray-600">{{ $stat['label'] }}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
