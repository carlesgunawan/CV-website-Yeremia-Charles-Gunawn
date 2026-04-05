@extends('layout', [
    'title' => 'Skills & Projects - Charles Gunawan',
    'email' => 'gunawancarles50@email.com',
    'instagram' => 'charlesg__gunawan',
    'footer_tagline' => 'Train Hard, Stay Strong 🔥'
])

@section('content')
<!-- Skills Section -->
<section id="skills" class="py-24 px-4 bg-fitness-black relative overflow-hidden">
    <div class="absolute top-0 right-0 opacity-10 pointer-events-none">
        <svg class="w-96 h-96 text-fitness-red" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"></path></svg>
    </div>
    
    <div class="max-w-7xl mx-auto">
        <div class="mb-16">
            <h2 class="text-5xl font-black uppercase italic mb-2 tracking-tighter">My <span class="text-fitness-red">Skills</span></h2>
            <div class="h-2 w-24 bg-fitness-red"></div>
        </div>
        
        <div class="grid md:grid-cols-3 gap-12">
            <!-- Physical Skills -->
            <div class="space-y-6">
                <div class="flex items-center space-x-4">
                    <span class="text-3xl">💪</span>
                    <h3 class="text-2xl font-black uppercase tracking-widest text-fitness-red">Physical Skills</h3>
                </div>
                <ul class="space-y-4">
                    <li class="bg-fitness-gray/40 p-4 rounded-xl border-l-4 border-fitness-red hover:bg-fitness-gray/60 transition-colors">
                        <span class="font-bold">Strength training</span>
                        <p class="text-xs text-gray-400 mt-1">Weightlifting, deadlift, dll</p>
                    </li>
                    <li class="bg-fitness-gray/40 p-4 rounded-xl border-l-4 border-fitness-red hover:bg-fitness-gray/60 transition-colors">
                        <span class="font-bold">Endurance & stamina training</span>
                    </li>
                    <li class="bg-fitness-gray/40 p-4 rounded-xl border-l-4 border-fitness-red hover:bg-fitness-gray/60 transition-colors">
                        <span class="font-bold">Bodyweight exercises</span>
                        <p class="text-xs text-gray-400 mt-1">Push-up, pull-up, squat</p>
                    </li>
                    <li class="bg-fitness-gray/40 p-4 rounded-xl border-l-4 border-fitness-red hover:bg-fitness-gray/60 transition-colors">
                        <span class="font-bold">Konsistensi dalam latihan</span>
                    </li>
                </ul>
            </div>
            
            <!-- Mental Skills -->
            <div class="space-y-6">
                <div class="flex items-center space-x-4">
                    <span class="text-3xl">🧠</span>
                    <h3 class="text-2xl font-black uppercase tracking-widest text-fitness-red">Mental & Discipline</h3>
                </div>
                <ul class="space-y-4">
                    <li class="bg-fitness-gray/40 p-4 rounded-xl border-l-4 border-fitness-red hover:bg-fitness-gray/60 transition-colors">
                        <span class="font-bold uppercase italic">Disiplin tinggi</span>
                    </li>
                    <li class="bg-fitness-gray/40 p-4 rounded-xl border-l-4 border-fitness-red hover:bg-fitness-gray/60 transition-colors">
                        <span class="font-bold uppercase italic">Fokus & ketahanan mental</span>
                    </li>
                    <li class="bg-fitness-gray/40 p-4 rounded-xl border-l-4 border-fitness-red hover:bg-fitness-gray/60 transition-colors">
                        <span class="font-bold uppercase italic">Self-motivation</span>
                    </li>
                    <li class="bg-fitness-gray/40 p-4 rounded-xl border-l-4 border-fitness-red hover:bg-fitness-gray/60 transition-colors">
                        <span class="font-bold uppercase italic">Konsistensi jangka panjang</span>
                    </li>
                </ul>
            </div>
            
            <!-- Team Skills -->
            <div class="space-y-6">
                <div class="flex items-center space-x-4">
                    <span class="text-3xl">🤝</span>
                    <h3 class="text-2xl font-black uppercase tracking-widest text-fitness-red">Team Skills</h3>
                </div>
                <ul class="space-y-4">
                    <li class="bg-fitness-gray/40 p-4 rounded-xl border-l-4 border-fitness-red hover:bg-fitness-gray/60 transition-colors">
                        <span class="font-bold uppercase">Kerja sama tim</span>
                    </li>
                    <li class="bg-fitness-gray/40 p-4 rounded-xl border-l-4 border-fitness-red hover:bg-fitness-gray/60 transition-colors">
                        <span class="font-bold uppercase">Sportmanship</span>
                    </li>
                    <li class="bg-fitness-gray/40 p-4 rounded-xl border-l-4 border-fitness-red hover:bg-fitness-gray/60 transition-colors">
                        <span class="font-bold uppercase">Komunikasi</span>
                    </li>
                    <li class="bg-fitness-gray/40 p-4 rounded-xl border-l-4 border-fitness-red hover:bg-fitness-gray/60 transition-colors">
                        <span class="font-bold uppercase">Leadership dasar</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-24 px-4 bg-fitness-gray/10">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 flex justify-between items-end">
            <div>
                <h2 class="text-5xl font-black uppercase italic mb-2 tracking-tighter">My <span class="text-fitness-red">Projects</span></h2>
                <div class="h-2 w-24 bg-fitness-red"></div>
            </div>
            <p class="text-gray-400 max-w-xs text-right hidden md:block">Implementasi nyata dari dedikasi dan konsistensi latihan.</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Project 1 -->
            <div class="group relative bg-fitness-gray/30 p-10 rounded-3xl border border-fitness-gray overflow-hidden hover:border-fitness-red/50 transition-all">
                <div class="absolute -top-10 -right-10 text-9xl opacity-10 group-hover:scale-125 transition-transform">🏋️</div>
                <h3 class="text-3xl font-black uppercase italic mb-4">Fitness Transformation Journey</h3>
                <p class="text-gray-400 text-lg leading-relaxed mb-6">Fokus pada peningkatan performa fisik melalui latihan yang konsisten dan terstruktur.</p>
                <div class="flex space-x-2">
                    <span class="px-3 py-1 bg-fitness-red/20 text-fitness-red text-xs font-bold rounded-full uppercase">Strength</span>
                    <span class="px-3 py-1 bg-fitness-red/20 text-fitness-red text-xs font-bold rounded-full uppercase">Commitment</span>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="group relative bg-fitness-gray/30 p-10 rounded-3xl border border-fitness-gray overflow-hidden hover:border-fitness-red/50 transition-all">
                <div class="absolute -top-10 -right-10 text-9xl opacity-10 group-hover:scale-125 transition-transform">📊</div>
                <h3 class="text-3xl font-black uppercase italic mb-4">Workout Progress System</h3>
                <p class="text-gray-400 text-lg leading-relaxed mb-6">Membuat sistem sederhana untuk mencatat perkembangan latihan dan evaluasi performa.</p>
                <div class="flex space-x-2">
                    <span class="px-3 py-1 bg-fitness-red/20 text-fitness-red text-xs font-bold rounded-full uppercase">Tracking</span>
                    <span class="px-3 py-1 bg-fitness-red/20 text-fitness-red text-xs font-bold rounded-full uppercase">Data</span>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="group relative bg-fitness-gray/30 p-10 rounded-3xl border border-fitness-gray overflow-hidden hover:border-fitness-red/50 transition-all">
                <div class="absolute -top-10 -right-10 text-9xl opacity-10 group-hover:scale-125 transition-transform">🎯</div>
                <h3 class="text-3xl font-black uppercase italic mb-4">Personal Training Program</h3>
                <p class="text-gray-400 text-lg leading-relaxed mb-6">Menyusun program latihan pribadi sesuai target seperti strength atau endurance.</p>
                <div class="flex space-x-2">
                    <span class="px-3 py-1 bg-fitness-red/20 text-fitness-red text-xs font-bold rounded-full uppercase">Planning</span>
                    <span class="px-3 py-1 bg-fitness-red/20 text-fitness-red text-xs font-bold rounded-full uppercase">Coaching</span>
                </div>
            </div>
            
            <!-- Project 4 -->
            <div class="group relative bg-fitness-gray/30 p-10 rounded-3xl border border-fitness-gray overflow-hidden hover:border-fitness-red/50 transition-all">
                <div class="absolute -top-10 -right-10 text-9xl opacity-10 group-hover:scale-125 transition-transform">🏃</div>
                <h3 class="text-3xl font-black uppercase italic mb-4">Active Lifestyle Challenge</h3>
                <p class="text-gray-400 text-lg leading-relaxed mb-6">Menjalani berbagai tantangan untuk menjaga gaya hidup aktif dan sehat setiap hari.</p>
                <div class="flex space-x-2">
                    <span class="px-3 py-1 bg-fitness-red/20 text-fitness-red text-xs font-bold rounded-full uppercase">Consistency</span>
                    <span class="px-3 py-1 bg-fitness-red/20 text-fitness-red text-xs font-bold rounded-full uppercase">Lifestyle</span>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="text-center py-12">
    <a href="{{ route('home') }}" class="text-fitness-red hover:text-white font-bold transition-colors uppercase tracking-widest text-sm flex items-center justify-center space-x-2 group">
        <svg class="w-5 h-5 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg>
        <span>Kembali ke Home</span>
    </a>
</div>
@endsection
