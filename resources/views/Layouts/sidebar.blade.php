<ul id="accordion-menu">
    @if (Auth::guard('admin')->check())
        <li>
            <a href="{{ route('menuAdmin') }}" class="dropdown-toggle no-arrow">
                <span class="micon bi bi-house"></span><span class="mtext">Menu</span>
            </a>
        </li>
        <li>
            <a href="{{ route('aspirasiAdmin') }}" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-chat-1"></span><span class="mtext">Aspirasi</span>
            </a>
        </li>
        <li>
            <a href="{{ route('guruAdmin') }}" class="dropdown-toggle no-arrow">
                <span class="micon fa fa-vcard"></span><span class="mtext">Guru</span>
            </a>
        </li>
        <li>
            <a href="{{ route('mapelAdmin') }}" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-calendar-4"></span><span class="mtext">Mata Pelajaran</span>
            </a>
        </li>
        <li>
            <a href="{{ route('siswaAdmin') }}" class="dropdown-toggle no-arrow">
                <span class="micon fa fa-graduation-cap"></span><span class="mtext">Siswa</span>
            </a>
        </li>
        <li>
            <a href="{{ route('ortuAdmin') }}" class="dropdown-toggle no-arrow">
                <span class="micon fa fa-users"></span><span class="mtext">Orang Tua Siswa</span>
            </a>
        </li>
        <li>
            <a href="{{ route('pegawaiAdmin') }}" class="dropdown-toggle no-arrow">
                <span class="micon fa fa-user-secret"></span><span class="mtext">Administrator</span>
            </a>
        </li>
        <li>
            <a href="{{ route('kelasSiswaAdmin') }}" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-book"></span><span class="mtext">Kelas Siswa</span>
            </a>
        </li>   

    @elseif (Auth::guard('siswa')->check())
        <li>
            <a href="{{ route('menuSiswa') }}" class="dropdown-toggle no-arrow">
                <span class="micon bi bi-house"></span><span class="mtext">Menu</span>
            </a>
        </li>
        <li>
            <a href="{{ route('nilaiSiswa') }}" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-notebook"></span><span class="mtext">Nilai</span>
            </a>
        </li>
        <li>
            <a href="{{ route('kehadiranSiswa') }}" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-calendar-4"></span><span class="mtext">Kehadiran</span>
            </a>
        </li>
    @endif

    {{-- @elseif (Auth::guard('ortu')->check())
        <li>
            <a href="/menu" class="dropdown-toggle no-arrow">
                <span class="micon bi bi-house"></span><span class="mtext">Menu</span>
            </a>
        </li>
        <li>
            <a href="/nilai" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-notebook"></span><span class="mtext">Nilai</span>
            </a>
        </li>
        <li>
            <a href="/kehadiran" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-calendar-4"></span><span class="mtext">Kehadiran</span>
            </a>
        </li>
        <li>
            <a href="/aspirasi" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-chat-1"></span><span class="mtext">Aspirasi</span>
            </a>
        </li>
    @endif --}}
{{-- 
    @elseif (Auth::guard('ortu')->check())
        <li>
            <a href="/guru menu" class="dropdown-toggle no-arrow">
                <span class="micon bi bi-house"></span><span class="mtext">Menu</span>
            </a>
        </li>
        <li>
            <a href="/lihat aspirasi" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-chat-1"></span><span class="mtext">Aspirasi</span>
            </a>
        </li>
        <li>
            <a href="/guru nilai" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-notebook"></span><span class="mtext">Nilai</span>
            </a>
        </li>
        <li>
            <a href="/guru kehadiran" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-calendar-4"></span><span class="mtext">Kehadiran</span>
            </a>
        </li>
        <li>
            <a href="/guru profil" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-user-12"></span><span class="mtext">Profil</span>
            </a>
        </li>
    @endif --}}

</ul>
