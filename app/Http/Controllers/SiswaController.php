<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Siswa();
    }

    public function index()
    {
        $tingkatKelas = $this->model->getAllTingkatKelas();
        $data = $this->model->getAllSiswa();      
        return view('siswa.indexSiswaAdmin', compact('data','tingkatKelas'));
    }

    public function showSiswaById($id)
    {
        $siswa = Siswa::find($id);
        $response['success'] = true;
        $response['data'] = $siswa;
        return response()->json($response);
    }

    public function tambahSiswa()
    {      
        return view('siswa.tambahSiswa');
    }

    public function simpanSiswa(Request $request)
    {
        // dd($request);
        $request->validate([
            'name'  => 'required',
            'username'  => 'required',
            'password'  => 'required',
            'email'  => 'required',                
            'nisn'  => '',                
            'nipd'  => '',                
            'jenkel'  => '',                
            'tempatLahir'  => '',                
            'tanggalLahir'  => '',                
            'nik'  => '',                
            'noKk'  => '',                
            'noHp'  => '',                
            'agama'  => '',                
            'alamat'  => '',                
            'jenisTinggal'  => '',                
            'trasportasi'  => '',                
            'skhun'  => '',                
            'penerimaKpps'  => '',                
            'noKpps'  => '',                
            'namaAyah'  => '',                
            'tanggalLahirAyah'  => '',                
            'pendidikanAyah'  => '',                
            'pekerjaanAyah'  => '',                
            'penghasilanAyah'  => '',                
            'nikAyah'  => '',                
            'namaIbu'  => '',                
            'tanggalLahirIbu'  => '',                
            'pendidikanIbu'  => '',                
            'pekerjaanIbu'  => '',                
            'penghasilanIbu'  => '',                
            'nikIbu'  => '',                
            'namaWali'  => '',                
            'tanggalLahirWali'  => '',                
            'pendidikanWali'  => '', 
            'pekerjaanWali'  => '', 
            'penghasilanWali'  => '', 
            'nikWali'  => '',   
            'noUn'  => '',   
            'noSeriIjazah'  => '',   
            'penerimaKip'  => '',   
            'noKip'  => '',   
            'namaKip'  => '',                
            'noReqAkta'  => '',                
            'bank'  => '',                
            'noRekening'  => '',                                                          
            'namaRekening'  => '',                                                          
            'layakPip'  => '',                                                          
            'alasanPip'  => '',    
            'kebutuhanKhusus'  => '',
            'sekolahAsal'  => '',
            'anak'  => '',
            'jmlSaudara'  => '',
            'bb'  => '',
            'tb'  => '',
            'jarakSekolah'  => '',                                                      
        ]);

        $Id = Siswa::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request['password']),
            'email' => $request->email,                
            'nisn' => $request->nisn,                
            'nipd' => $request->nipd,                
            'jenkel' => $request->jenkel,                
            'tempatLahir' => $request->tempatLahir,                
            'tanggalLahir' => $request->tanggalLahir,                
            'nik' => $request->nik,                
            'noKk' => $request->noKk,                
            'noHp' => $request->noHp,                                       
            'agama' => $request->agama,                
            'alamat' => $request->alamat,                
            'jenisTinggal' => $request->jenisTinggal,                                           
            'trasportasi' => $request->trasportasi,                
            'skhun' => $request->skhun,                
            'penerimaKpps' => $request->penerimaKpps,                
            'noKpps' => $request->noKpps,                
            'namaAyah' => $request->namaAyah,                
            'tanggalLahirAyah' => $request->tanggalLahirAyah,                
            'pendidikanAyah' => $request->pendidikanAyah,                
            'pekerjaanAyah' => $request->pekerjaanAyah,                
            'penghasilanAyah' => $request->penghasilanAyah,                                       
            'nikAyah' => $request->nikAyah,                
            'namaIbu' => $request->namaIbu,                
            'tanggalLahirIbu' => $request->tanggalLahirIbu,                
            'pendidikanIbu' => $request->pendidikanIbu,                
            'pekerjaanIbu' => $request->pekerjaanIbu,                
            'penghasilanIbu' => $request->penghasilanIbu,                
            'nikIbu' => $request->nikIbu,                
            'namaWali' => $request->namaWali,                
            'tanggalLahirWali' => $request->tanggalLahirWali,                
            'pendidikanWali' => $request->pendidikanWali,     
            'pekerjaanWali' => $request->pekerjaanWali,     
            'penghasilanWali' => $request->penghasilanWali,     
            'nikWali' => $request->nikWali,     
            'noUn' => $request->noUn,     
            'noSeriIjazah' => $request->noSeriIjazah,     
            'penerimaKip' => $request->penerimaKip,     
            'noKip' => $request->noKip,     
            'namaKip' => $request->namaKip,                  
            'noReqAkta' => $request->noReqAkta,                  
            'bank' => $request->bank,  
            'noRekening' => $request->noRekening,                                                
            'namaRekening' => $request->namaRekening,                                                
            'layakPip' => $request->layakPip,                                                
            'alasanPip' => $request->alasanPip, 
            'kebutuhanKhusus' => $request->kebutuhanKhusus,
            'sekolahAsal' => $request->sekolahAsal,
            'anak' => $request->anak,
            'jmlSaudara' => $request->jmlSaudara,
            'bb' => $request->bb,
            'tb' => $request->tb,
            'jarakSekolah' => $request->jarakSekolah,                                               
        ]);  
        // dd($Id)  ;

        // return view('siswa.indexSiswaAdmin');
        return redirect()
            ->route('masterSiswa');
        // ->with('success', 'data Kurikulum telah ditambahkan');
    }

    public function editSiswa($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.editSiswa', compact('siswa'));
    }

    public function updateSiswa(Request $request)
    {
        $id = $request->idSiswa;
        $data = Siswa::where('id',$id)
            ->update([
                'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request['password']),
            'email' => $request->email,                
            'nisn' => $request->nisn,                
            'nipd' => $request->nipd,                
            'jenkel' => $request->jenkel,                
            'tempatLahir' => $request->tempatLahir,                
            'tanggalLahir' => $request->tanggalLahir,                
            'nik' => $request->nik,                
            'noKk' => $request->noKk,                
            'noHp' => $request->noHp,                                       
            'agama' => $request->agama,                
            'alamat' => $request->alamat,                
            'jenisTinggal' => $request->jenisTinggal,                                           
            'trasportasi' => $request->trasportasi,                
            'skhun' => $request->skhun,                
            'penerimaKpps' => $request->penerimaKpps,                
            'noKpps' => $request->noKpps,                
            'namaAyah' => $request->namaAyah,                
            'tanggalLahirAyah' => $request->tanggalLahirAyah,                
            'pendidikanAyah' => $request->pendidikanAyah,                
            'pekerjaanAyah' => $request->pekerjaanAyah,                
            'penghasilanAyah' => $request->penghasilanAyah,                                       
            'nikAyah' => $request->nikAyah,                
            'namaIbu' => $request->namaIbu,                
            'tanggalLahirIbu' => $request->tanggalLahirIbu,                
            'pendidikanIbu' => $request->pendidikanIbu,                
            'pekerjaanIbu' => $request->pekerjaanIbu,                
            'penghasilanIbu' => $request->penghasilanIbu,                
            'nikIbu' => $request->nikIbu,                
            'namaWali' => $request->namaWali,                
            'tanggalLahirWali' => $request->tanggalLahirWali,                
            'pendidikanWali' => $request->pendidikanWali,     
            'pekerjaanWali' => $request->pekerjaanWali,     
            'penghasilanWali' => $request->penghasilanWali,     
            'nikWali' => $request->nikWali,     
            'noUn' => $request->noUn,     
            'noSeriIjazah' => $request->noSeriIjazah,     
            'penerimaKip' => $request->penerimaKip,     
            'noKip' => $request->noKip,     
            'namaKip' => $request->namaKip,                  
            'noReqAkta' => $request->noReqAkta,                  
            'bank' => $request->bank,  
            'noRekening' => $request->noRekening,                                                
            'namaRekening' => $request->namaRekening,                                                
            'layakPip' => $request->layakPip,                                                
            'alasanPip' => $request->alasanPip, 
            'kebutuhanKhusus' => $request->kebutuhanKhusus,
            'sekolahAsal' => $request->sekolahAsal,
            'anak' => $request->anak,
            'jmlSaudara' => $request->jmlSaudara,
            'bb' => $request->bb,
            'tb' => $request->tb,
            'jarakSekolah' => $request->jarakSekolah,                
            ]);      
            // dd($data)   ;

            return redirect()->route('masterSiswa');
        // ->with('success', 'data Kurikulum telah ditambahkan');
    }

    public function nilai()
    {
        return view('sisor.nilai');
    }

    public function kehadiran()
    {
        return view('sisor.kehadiran');
    }    
}
