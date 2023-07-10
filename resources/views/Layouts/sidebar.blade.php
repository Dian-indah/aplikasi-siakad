<ul id="accordion-menu">
    @if (Auth::guard('admin')->check())
        <li>
            <a href="{{ route('menuAdmin') }}" class="dropdown-toggle no-arrow">
                <span class="micon fa fa-home"></span><span class="mtext">Menu</span>
            </a>
        </li>       
        <li>
            <a href="{{ route('tahunAjar') }}" class="dropdown-toggle no-arrow">
                <span class="micon fa fa-calendar-check-o"></span><span class="mtext">Tahun Ajar</span>
            </a>
        </li>        
        <li>
            <a href="{{ route('kurikulum') }}" class="dropdown-toggle no-arrow">
                <span class="micon fa fa-sticky-note-o"></span><span class="mtext">Kurikulum</span>
            </a>
        </li>
        <li>
            <a href="{{ route('kelas') }}" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-chat-1"></span><span class="mtext">Kelas</span>
            </a>
        </li>  
        <li>
            <a href="{{ route('mapel') }}" class="dropdown-toggle no-arrow">
                <span class="micon fa fa-calendar-o"></span><span class="mtext">Mata Pelajaran</span>
            </a>
        </li>      
        <li>
            <a href="{{ route('masterGuru') }}" class="dropdown-toggle no-arrow">
                <span class="micon fa fa-vcard"></span><span class="mtext">Guru</span>
            </a>
        </li>       
        <li>
            <a href="{{ route('kelasSiswaAdmin') }}" class="dropdown-toggle no-arrow">
                <span class="micon fa fa-university"></span><span class="mtext">Kelas Siswa</span>
            </a>
        </li> 
        <li>
            <a href="{{ route('masterSiswa') }}" class="dropdown-toggle no-arrow">
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
            <a href="{{ route('aspirasiAdmin') }}" class="dropdown-toggle no-arrow">
                <span class="micon fa fa-comments-o"></span><span class="mtext">Aspirasi</span>
            </a>
        </li>  

    @elseif (Auth::guard('siswa')->check())
        <li>
            <a href="{{ route('menuSiswa') }}" class="dropdown-toggle no-arrow">
                <span class="micon fa fa-home"></span><span class="mtext">Menu</span>
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

    @elseif (Auth::guard('ortu')->check())
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

    @elseif (Auth::guard('guru')->check())
        <li>
            <a href="#" class="dropdown-toggle no-arrow">
                <span class="micon bi bi-house"></span><span class="mtext">Menu</span>
            </a>
        </li>
        <li>
            <a href="#" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-chat-1"></span><span class="mtext">Aspirasi</span>
            </a>
        </li>
        <li>
            <a href="#" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-notebook"></span><span class="mtext">Nilai</span>
            </a>
        </li>
        <li>
            <a href="#" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-calendar-4"></span><span class="mtext">Kehadiran</span>
            </a>
        </li>
        <li>
            <a href="#" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-user-12"></span><span class="mtext">Profil</span>
            </a>
        </li>
    @endif

</ul>
