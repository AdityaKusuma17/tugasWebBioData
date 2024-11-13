<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerjadwal extends Controller
{
    public function jadwal()
    {
        $data = [
            'Senin' => [
                [
                    'matkul' => 'Jaringan Komputer',
                    'jam' => '12.20-14.50(Lab J)'
                ],
                [
                    'matkul' => 'Tata Kelola Audit',
                    'jam' => '14.50-17.20(R333)'
                ]
            ],

            'Selasa' => [
                [
                    'matkul' => 'Data Integration',
                    'jam' => '10.00-12.20(Lab C)'
                ],
                [
                    'matkul' => 'Pemograman Framework',
                    'jam' => '14.50-17.20(Lab C)'
                ]
            ],

            'Rabu' => [
                [
                    'matkul' => 'Object Oriented Analysis and Design',
                    'jam' => '14.50-17.20(R342)'
                ],
                [
                    'matkul' => 'Pendidikan Pancasila',
                    'jam' => '17.20-19.00(R124)'
                ]
            ],
            'Kamis' => [
                [
                    'matkul' => 'Bisnis berbasis Teknologi',
                    'jam' => '13.10-15.40(R342)'
                ]
            ],
            'Jumat' => [
                [
                    'matkul' => 'Pengantar Akuntansi',
                    'jam' => '14.50-17.20(R331)'
                ]
            ],
            'Sabtu' => [
                [
                    'matkul' => 'Bahasa Indonesia',
                    'jam' => '17.20-19.00(R124)'
                ]
            ]
        ];
        return view('profiles.jadwal', compact('data'));
    }
}
