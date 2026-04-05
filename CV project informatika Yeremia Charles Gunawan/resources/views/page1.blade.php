@extends('layout', [
    'title' => 'Charles Gunawan - Personal Branding',
    'email' => 'gunawncarles50@email.com',
    'instagram' => 'charles__gunawan',
    'footer_tagline' => 'Stay Strong 💥'
])

@section('content')
<!-- Hero Section -->
<section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden px-4">
    <div class="absolute inset-0 z-0 opacity-20">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-fitness-red/30 rounded-full blur-[100px]"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-red-900/30 rounded-full blur-[100px]"></div>
    </div>
    
    <div class="relative z-10 max-w-4xl text-center space-y-6">
        <h1 class="text-6xl md:text-8xl font-black tracking-tighter uppercase italic leading-none">
            Halo! Saya <span class="text-fitness-red">Charles</span> Gunawan 💪
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 font-medium max-w-2xl mx-auto">
            Seorang <span class="text-white border-b-2 border-fitness-red">sport enthusiast</span> yang berfokus pada pengembangan kekuatan fisik, daya tahan, dan gaya hidup sehat.
        </p>
        <p class="text-lg text-gray-400 italic">
            "Saya percaya bahwa tubuh yang kuat mencerminkan mental yang disiplin."
        </p>
        <div class="pt-8">
            <a href="#about" class="bg-fitness-red hover:bg-red-700 text-white px-8 py-4 rounded-full font-bold transition-all transform hover:scale-105 inline-block uppercase tracking-widest text-sm">
                Pelajari Lebih Lanjut
            </a>
        </div>
    </div>
</section>

<!-- About Me Section -->
<section id="about" class="py-24 bg-fitness-gray/10 px-4">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
        <div class="relative">
            <div class="aspect-square bg-fitness-gray rounded-2xl overflow-hidden relative border-4 border-fitness-red/20 shadow-2xl">
                <!-- Image placeholder with icon -->
                <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-fitness-gray to-fitness-black">
                    <svg class="w-32 h-32 text-fitness-red opacity-50" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"></path></svg>
                </div>
            </div>
            <div class="absolute -bottom-6 -right-6 bg-fitness-red text-white p-6 rounded-xl font-black text-2xl rotate-3 shadow-xl">
                TRAIN HARD!
            </div>
        </div>
        
        <div class="space-y-8">
            <div>
                <h2 class="text-4xl font-black mb-2 uppercase italic">Deskripsi Diri <span class="text-fitness-red">(About Me)</span></h2>
                <div class="h-2 w-20 bg-fitness-red"></div>
            </div>
            
            <p class="text-lg text-gray-300 leading-relaxed">
                Saya memiliki passion besar dalam dunia olahraga dan kebugaran. Bagi saya, olahraga bukan hanya aktivitas fisik, tetapi juga cara untuk membentuk karakter, meningkatkan fokus, dan melatih konsistensi.
            </p>
            
            <p class="text-lg text-gray-300 leading-relaxed">
                Saya rutin menjalani latihan seperti <span class="text-white font-bold">strength training</span> dan berbagai jenis workout lainnya untuk meningkatkan performa tubuh. Saya selalu berusaha menjaga pola hidup sehat dan terus menantang diri untuk berkembang lebih baik setiap harinya.
            </p>
            
            <p class="text-lg text-gray-400 italic">
                Melalui olahraga, saya belajar tentang kerja keras, disiplin, dan pentingnya konsistensi dalam mencapai tujuan jangka panjang.
            </p>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="py-24 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-black uppercase italic mb-4">Pengalaman <span class="text-fitness-red">(Experience)</span></h2>
            <p class="text-gray-400">Langkah demi langkah dalam perjalanan kebugaran saya.</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1 -->
            <div class="bg-fitness-gray/20 p-8 rounded-2xl border border-fitness-gray hover:border-fitness-red/50 transition-all group">
                <div class="text-4xl mb-6 group-hover:scale-110 transition-transform">🏋️</div>
                <h3 class="text-xl font-bold mb-3">Personal Fitness Journey</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Melakukan latihan rutin untuk meningkatkan kekuatan, stamina, dan kebugaran tubuh secara keseluruhan.</p>
            </div>
            
            <!-- Card 2 -->
            <div class="bg-fitness-gray/20 p-8 rounded-2xl border border-fitness-gray hover:border-fitness-red/50 transition-all group">
                <div class="text-4xl mb-6 group-hover:scale-110 transition-transform">📈</div>
                <h3 class="text-xl font-bold mb-3">Progress Tracking</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Mencatat perkembangan latihan seperti peningkatan beban dan repetisi untuk memastikan progres yang konsisten.</p>
            </div>
            
            <!-- Card 3 -->
            <div class="bg-fitness-gray/20 p-8 rounded-2xl border border-fitness-gray hover:border-fitness-red/50 transition-all group">
                <div class="text-4xl mb-6 group-hover:scale-110 transition-transform">🎯</div>
                <h3 class="text-xl font-bold mb-3">Workout Program</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Membuat dan mengikuti program latihan terstruktur baik di gym maupun di rumah.</p>
            </div>
            
            <!-- Card 4 -->
            <div class="bg-fitness-gray/20 p-8 rounded-2xl border border-fitness-gray hover:border-fitness-red/50 transition-all group">
                <div class="text-4xl mb-6 group-hover:scale-110 transition-transform">🤝</div>
                <h3 class="text-xl font-bold mb-3">Sport Activities</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Berpartisipasi dalam aktivitas olahraga bersama untuk meningkatkan kerja sama tim dan sportivitas.</p>
            </div>
        </div>
    </div>
</section>

<div class="text-center py-12">
    <a href="{{ route('skills') }}" class="text-fitness-red hover:text-white font-bold transition-colors uppercase tracking-widest text-sm flex items-center justify-center space-x-2 group">
        <span>Lihat Skill & Project</span>
        <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
    </a>
</div>
@endsection
