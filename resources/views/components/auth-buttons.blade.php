    @if (Route::has('login'))
        @auth
            @role('admin')
                <a href="{{ route('instruktur.index') }}" target="_blank"
                    class="md:hidden inline-block px-5 py-1.5 text-sm font-semibold border text-[#1b1b18] dark:text-[#EDEDEC] border-[#19140035] dark:border-[#3E3E3A] hover:border-[#1915014a] dark:hover:border-[#62605b] rounded-sm leading-normal">
                    Dashboard
                </a>
            @else
                @role('siswa')
                    <a href="{{ route('beranda') }}" target="_blank"
                        class="md:hidden inline-block px-5 py-1.5 text-sm font-semibold border text-[#1b1b18] dark:text-[#EDEDEC] border-[#19140035] dark:border-[#3E3E3A] hover:border-[#1915014a] dark:hover:border-[#62605b] rounded-sm leading-normal">
                        Dashboard
                    </a>
                @else
                    <!-- Jika user biasa (non-admin) -->
                    <a href="{{ url('/dashboard') }}" target="_blank"
                        class="md:hidden inline-block px-5 py-1.5 text-sm font-semibold border text-[#1b1b18] dark:text-[#EDEDEC] border-[#19140035] dark:border-[#3E3E3A] hover:border-[#1915014a] dark:hover:border-[#62605b] rounded-sm leading-normal">
                        Dashboard
                    </a>
                @endrole
            @endrole
        @else
            <a href="{{ route('login') }}"
                class="inline-block  px-5 py-1.5 text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm leading-normal">
                Log in
            </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="inline-block  px-5 py-1.5 text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC] bg-blue-500 border border-[#19140035] hover:border-[#1915014a] rounded-sm leading-normal">
                    Register
                </a>
            @endif
        @endauth
    @endif


