<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jasa Advertising | Laravel & Tailwind</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-100 font-sans min-h-screen flex items-center justify-center p-6 selection:bg-indigo-500 selection:text-white">
    @php
        try {
            \Illuminate\Support\Facades\DB::connection()->getPdo();
            $dbName = \Illuminate\Support\Facades\DB::connection()->getDatabaseName();
            $dbConnected = true;
        } catch (\Exception $e) {
            $dbError = $e->getMessage();
            $dbConnected = false;
        }
    @endphp

    <div class="relative w-full max-w-2xl">
        <!-- Background decorative glow -->
        <div class="absolute -top-20 -left-20 w-72 h-72 bg-purple-500 rounded-full blur-[100px] opacity-20 animate-pulse animate-duration-[4000ms]"></div>
        <div class="absolute -bottom-20 -right-20 w-72 h-72 bg-indigo-500 rounded-full blur-[100px] opacity-20 animate-pulse animate-duration-[4000ms] delay-75"></div>

        <div class="relative bg-slate-900/50 backdrop-blur-xl border border-slate-800/80 rounded-2xl p-8 shadow-2xl transition-all duration-300 hover:border-slate-700/80 hover:shadow-indigo-500/10">
            <!-- Header -->
            <div class="flex items-center justify-between mb-8 pb-6 border-b border-slate-800">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-500 to-purple-500 flex items-center justify-center shadow-lg shadow-indigo-500/30">
                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold tracking-tight text-white">Jasa Advertising</h1>
                        <p class="text-xs text-slate-400">Laravel & Tailwind CSS Framework</p>
                    </div>
                </div>
                
                <span class="px-3 py-1 text-xs rounded-full bg-slate-800 text-slate-300 font-mono">
                    v{{ app()->version() }}
                </span>
            </div>

            <!-- Content Card -->
            <div class="space-y-6">
                <!-- DB Status Card -->
                <div class="p-5 rounded-xl bg-slate-950/40 border border-slate-800/80">
                    <h3 class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-3">Database Connection (XAMPP MySQL)</h3>
                    @if($dbConnected)
                        <div class="flex items-center gap-3 text-emerald-400">
                            <div class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                            </div>
                            <div class="ml-2">
                                <p class="text-sm font-semibold">Connected successfully</p>
                                <p class="text-xs text-slate-400 mt-0.5">Database name: <span class="font-mono text-slate-300 bg-slate-800 px-1.5 py-0.5 rounded">{{ $dbName }}</span></p>
                            </div>
                        </div>
                    @else
                        <div class="flex items-start gap-3 text-rose-400">
                            <span class="w-2 h-2 rounded-full bg-rose-500 mt-1.5"></span>
                            <div>
                                <p class="text-sm font-semibold">Connection failed</p>
                                <p class="text-xs text-rose-300/80 mt-1 max-h-20 overflow-y-auto font-mono bg-rose-950/20 p-2 rounded border border-rose-500/20">{{ $dbError }}</p>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Info Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-5 rounded-xl bg-slate-950/30 border border-slate-800/80 hover:border-indigo-500/30 transition-colors">
                        <h4 class="text-sm font-semibold text-slate-200 mb-1">Tailwind CSS v4</h4>
                        <p class="text-xs text-slate-400">Integrated with Vite for lightning-fast compilation and live reload.</p>
                    </div>
                    <div class="p-5 rounded-xl bg-slate-950/30 border border-slate-800/80 hover:border-purple-500/30 transition-colors">
                        <h4 class="text-sm font-semibold text-slate-200 mb-1">PHP Engine</h4>
                        <p class="text-xs text-slate-400">Running on PHP v{{ PHP_VERSION }}. Ready for robust backend logic.</p>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="mt-8 pt-6 border-t border-slate-800/80 flex items-center justify-between text-xs text-slate-500">
                <p>Created with Antigravity AI</p>
                <div class="flex gap-4">
                    <a href="https://laravel.com" class="hover:text-indigo-400 transition-colors">Laravel</a>
                    <a href="https://tailwindcss.com" class="hover:text-indigo-400 transition-colors">Tailwind</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
