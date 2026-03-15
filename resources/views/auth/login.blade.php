<style>
    body {
        background-color: #9ec9b0;
        background-image: radial-gradient(#5b5b5b 1px, transparent 1px);
        background-size: 25px 25px;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(-20px) rotate(5deg);
        }
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    @keyframes spin-slow {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .animate-spin-slow {
        animation: spin-slow 20s linear infinite;
    }

    @keyframes pulse-slow {

        0%,
        100% {
            transform: scale(1);
            opacity: 0.3;
        }

        50% {
            transform: scale(1.1);
            opacity: 0.6;
        }
    }

    .animate-pulse-slow {
        animation: pulse-slow 8s ease-in-out infinite;
    }

    @keyframes rotate-rev {
        from {
            transform: rotate(360deg);
        }

        to {
            transform: rotate(0deg);
        }
    }

    .animate-rotate-rev {
        animation: rotate-rev 30s linear infinite;
    }
</style>

<x-guest-layout>
    <div class="min-h-screen flex">

        <!-- LEFT SIDE -->
        <div class="hidden md:flex w-3/5 flex-col justify-center items-center gap-12 relative overflow-hidden transition-all duration-700"
            style="background-color: #9ec9b0; background-image: radial-gradient(#5b5b5b 1px, transparent 1px); background-size: 25px 25px;">

            <div
                class="absolute -top-10 -left-10 w-40 h-40 border-[20px] border-[#2c0b3f]/5 rounded-3xl animate-spin-slow">
            </div>
            <div
                class="absolute -bottom-10 -right-10 w-40 h-40 border-[20px] border-[#2c0b3f]/5 rounded-3xl animate-rotate-rev">
            </div>

            <div
                class="absolute top-1/4 left-10 w-32 h-32 border-[12px] border-[#2c0b3f]/10 rounded-full animate-spin-slow">
            </div>
            <div
                class="absolute top-1/4 left-10 w-32 h-32 border-t-[12px] border-[#2c0b3f]/20 rounded-full animate-rotate-rev">
            </div>

            <div
                class="absolute bottom-1/4 right-10 w-24 h-24 border-4 border-[#2c0b3f]/10 rounded-xl rotate-12 animate-float">
            </div>
            <div class="absolute top-1/3 right-1/4 w-8 h-8 bg-[#2c0b3f]/10 rounded-full animate-ping"></div>

            <div class="text-center z-10 scale-110 group cursor-default">
                <h1
                    class="text-8xl tracking-[16px] font-bold text-[#2c0b3f] transition-all hover:tracking-[20px] duration-500">
                    MAPLE</h1>
                <p class="text-base mt-4 tracking-[0.3em] uppercase font-semibold text-[#2c0b3f]/80">
                    Smart HR Management System
                </p>
            </div>

            <div
                class="relative w-full flex justify-center z-10 px-16 animate-float hover:scale-105 transition-transform duration-700">
                <img src="/assets/login_people.png" alt="Login People" class="max-w-[550px] h-auto drop-shadow-2xl">
            </div>

            <div class="max-w-md text-center z-10 px-6 opacity-80 hover:opacity-100 transition-opacity">
                <p class="text-[#2c0b3f]/90 italic text-xl font-medium leading-relaxed">
                    "Great things in business are never done by one person."
                </p>
                <div class="mt-4 flex items-center justify-center gap-2">
                    <div class="w-10 h-0.5 bg-[#2c0b3f]/30"></div>
                    <span class="text-[#2c0b3f]/70 text-sm uppercase tracking-widest font-bold">Steve Jobs</span>
                    <div class="w-10 h-0.5 bg-[#2c0b3f]/30"></div>
                </div>
            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="w-2/5 flex items-center justify-center bg-[#aae1c6]">

            <div
                class="bg-[#c2ffe1] w-[520px] p-20 rounded-3xl shadow-2xl transition-all duration-300 hover:scale-[1.02]">

                <h2 class="text-4xl font-bold text-[#2c0b3f] text-center">
                    Welcome back!
                </h2>

                <p class="text-center text-gray-700 mt-2 mb-12">
                    What are we doing today?
                </p>

                <form method="POST" action="{{ route('login') }}" class="space-y-8">
                    @csrf

                    <div class="relative group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 absolute left-5 top-1/2 -translate-y-1/2 text-gray-600 group-focus-within:text-[#2c0b3f] transition"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                        </svg>

                        <input type="email" name="email" placeholder="your email ..." required
                            class="w-full pl-12 pr-4 py-4 rounded-full border-2 border-[#2c0b3f] bg-transparent
                    focus:outline-none focus:ring-2 focus:ring-[#2c0b3f] transition-all duration-300">
                    </div>

                    <div class="relative group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 absolute left-5 top-1/2 -translate-y-1/2 text-gray-600 group-focus-within:text-[#2c0b3f] transition"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                        </svg>

                        <input id="password" type="password" name="password" placeholder="your password ..." required
                            class="w-full pl-12 pr-4 py-4 rounded-full border-2 border-[#2c0b3f] bg-transparent
                    focus:outline-none focus:ring-2 focus:ring-[#2c0b3f] transition-all duration-300">
                    </div>

                    <div class="flex justify-center pt-6">
                        <button type="submit"
                            class="bg-[#2c0b3f] text-white w-full py-4 rounded-full font-bold
                    transition-all duration-300 hover:scale-[1.02] hover:shadow-xl active:scale-95">
                            Login
                        </button>
                    </div>

                    <div class="text-center text-sm mt-8">
                        <a href="{{ route('password.request') }}"
                            class="text-[#2c0b3f]/70 hover:text-[#2c0b3f] hover:underline transition">
                            Forgot password
                        </a>
                        <span class="mx-2 text-[#2c0b3f]/30">|</span>
                        <a href="{{ route('register') }}"
                            class="text-[#2c0b3f]/70 hover:text-[#2c0b3f] hover:underline transition">
                            Register here!
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
