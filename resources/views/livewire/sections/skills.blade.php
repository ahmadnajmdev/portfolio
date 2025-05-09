<div>
    <section id="skills" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $section->title }}</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-8"></div>
                <p class="text-gray-700 max-w-2xl mx-auto">
                    {{ $section->subtitle }}
                </p>
            </div>
            <div class="flex flex-col md:flex-row gap-12">
                <!-- Skills by Category -->
                @foreach($skills as $category => $categorySkills)
                <div class="w-full md:w-1/2">
                    <div class="bg-white rounded-lg p-8 shadow-sm h-full">
                        <h3 class="text-xl font-semibold text-gray-900 mb-8">{{ $category }}</h3>
                        <div class="space-y-6">
                            @foreach($categorySkills as $skill)
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-base font-medium text-gray-900">{{ $skill->name }}</span>
                                    <span class="text-base font-medium text-primary">{{ $skill->proficiency }}%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-primary h-2.5 rounded-full"
                                        style="width: {{ $skill->proficiency }}%"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
