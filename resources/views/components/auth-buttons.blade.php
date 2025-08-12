@if (Route::has('login'))
    @auth
        @role('admin')
            <a href="{{ route('instruktur.index') }}"
                class="inline-block px-5 py-1.5 text-sm font-semibold border text-[#1b1b18] dark:text-[#EDEDEC] border-[#19140035] dark:border-[#3E3E3A] hover:border-[#1915014a] dark:hover:border-[#62605b] rounded-sm leading-normal">
                Dashboard Admin
            </a>
            @elserole('siswa')
            <a href="{{ route('beranda-siswa') }}"
                class="inline-block px-5 py-1.5 text-sm font-semibold border text-[#1b1b18] dark:text-[#EDEDEC] border-[#19140035] dark:border-[#3E3E3A] hover:border-[#1915014a] dark:hover:border-[#62605b] rounded-sm leading-normal">
                Dashboard Siswa
            </a>
            @elserole('instruktur')
            <a href="{{ route('beranda-instruktur') }}"
                class="inline-block px-5 py-1.5 text-sm font-semibold border text-[#1b1b18] dark:text-[#EDEDEC] border-[#19140035] dark:border-[#3E3E3A] hover:border-[#1915014a] dark:hover:border-[#62605b] rounded-sm leading-normal">
                Dashboard Instruktur
            </a>
        @else
            <a href="{{ url('/dashboard') }}"
                class="inline-block px-5 py-1.5 text-sm font-semibold border text-[#1b1b18] dark:text-[#EDEDEC] border-[#19140035] dark:border-[#3E3E3A] hover:border-[#1915014a] dark:hover:border-[#62605b] rounded-sm leading-normal">
                Dashboard
            </a>
        @endrole
    @else
        <a href="{{ route('login') }}"
            class="inline-block px-5 py-1.5 text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm leading-normal">
            Log in
        </a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="inline-block px-5 py-1.5 text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC] bg-blue-500 border border-[#19140035] hover:border-[#1915014a] rounded-sm leading-normal">
                Register
            </a>
        @endif
    @endauth
@endif
