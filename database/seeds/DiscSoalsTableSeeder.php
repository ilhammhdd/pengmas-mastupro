<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscSoalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disc_soal = array(
            1 => [
                "Pendiam, tidak banyak bicara" => [
                    "+" => "R",
                    "-" => "+-"
                ],
                "Berjuang mencapai hasil" => [
                    "+" => "X",
                    "-" => "X"
                ],
                "Mudah bergaul dengan orang baru" => [
                    "+" => "+-",
                    "-" => "Y"
                ],
                "Berusaha menyenangkan orang" => [
                    "+" => "Z",
                    "-" => "Z"
                ]
            ],
            2 => [
                "Mengajak, pemberi semangat" => [
                    "+" => "Y",
                    "-" => "Y"
                ],
                "Mengutamakan kesempurnaan" => [
                    "+" => "+-",
                    "-" => "R"
                ],
                "Mengikuti pemimpin" => [
                    "+" => "+-",
                    "-" => "Z"
                ],
                "Keberhasilan adalah tujuan" => [
                    "+" => "X",
                    "-" => "+-"
                ]
            ],
            3 => [
                "Mudah kecewa, patah semangat" => [
                    "+" => "R",
                    "-" => "R"
                ],
                "Senang membantu sesama" => [
                    "+" => "Z",
                    "-" => "Z"
                ],
                "Suka bercerita tentang diri sendiri" => [
                    "+" => "+-",
                    "-" => "Y"
                ],
                "Memihak pada oposisi" => [
                    "+" => "X",
                    "-" => "X"
                ]
            ],
            4 => [
                "Mengatur waktu secara efisien" => [
                    "+" => "R",
                    "-" => "+-"
                ],
                "Buru-buru ingin cepat selesai" => [
                    "+" => "X",
                    "-" => "X"
                ],
                "Pandai bergaul, banyak teman" => [
                    "+" => "Y",
                    "-" => "Y"
                ],
                "Mengerjakan sampai selesai" => [
                    "+" => "Z",
                    "-" => "Z"
                ]
            ],
            5 => [
                "Menghindari konflik" => [
                    "+" => "Z",
                    "-" => "+-"
                ],
                "Suka membuat janji" => [
                    "+" => "Y",
                    "-" => "Y"
                ],
                "Bekerja runtut, sesuai aturan" => [
                    "+" => "+-",
                    "-" => "R"
                ],
                "Berani menghadapi sesuatu" => [
                    "+" => "+-",
                    "-" => "X"
                ]
            ],
            6 => [
                "Mau mengalah dengan sesama" => [
                    "+" => "+-",
                    "-" => "Z"
                ],
                "Peraturan itu membosankan" => [
                    "+" => "Y",
                    "-" => "Y"
                ],
                "Suka memaksa" => [
                    "+" => "X",
                    "-" => "+-"
                ],
                "Memiliki standar yang tinggi" => [
                    "+" => "R",
                    "-" => "+-"
                ]
            ],
            7 => [
                "Besemangat, aktif" => [
                    "+" => "Y",
                    "-" => "+-"
                ],
                "Bekerja cepat, ingin menang" => [
                    "+" => "X",
                    "-" => "X"
                ],
                "Menghindari pertengkaran" => [
                    "+" => "Z",
                    "-" => "Z"
                ],
                "Menyendiri jika stress" => [
                    "+" => "+-",
                    "-" => "R"
                ]
            ],
            8 => [
                "Takut mengambil keputusan" => [
                    "+" => "+-",
                    "-" => "R"
                ],
                "Penghargaan akan kemenangan" => [
                    "+" => "X",
                    "-" => "X"
                ],
                "Tenang, tidak buru-buru" => [
                    "+" => "Z",
                    "-" => "Z"
                ],
                "Bersahabat, dikenal banyak orang" => [
                    "+" => "Y",
                    "-" => "+-"
                ]
            ],
            9 => [
                "Bertanggung jawab akan tugas" => [
                    "+" => "X",
                    "-" => "X"
                ],
                "Mudah mengekspresikan sesuatu" => [
                    "+" => "+-",
                    "-" => "Y"
                ],
                "Mudah ditebak, konsisten" => [
                    "+" => "+-",
                    "-" => "Z"
                ],
                "Selalu berhati-hati, waspada" => [
                    "+" => "R",
                    "-" => "+-"
                ]
            ],
            10 => [
                "Tidak mudah menyerah" => [
                    "+" => "X",
                    "-" => "X"
                ],
                "Menjadi anggota dari kelompok" => [
                    "+" => "Z",
                    "-" => "+-"
                ],
                "Periang dan selalu ceria" => [
                    "+" => "Y",
                    "-" => "Y"
                ],
                "Semuanya taratur rapi" => [
                    "+" => "+-",
                    "-" => "R"
                ]
            ],
            11 => [
                "Senang mengarahkan, memimpin" => [
                    "+" => "X",
                    "-" => "+-"
                ],
                "Mengendalikan diri" => [
                    "+" => "Z",
                    "-" => "Z"
                ],
                "Dapat membujuk orang lain" => [
                    "+" => "Y",
                    "-" => "Y"
                ],
                "Cara berpikirnya sistematis, logis" => [
                    "+" => "R",
                    "-" => "+-"
                ]
            ],
            12 => [
                "Tulus, tidak berprasangka buruk" => [
                    "+" => "Z",
                    "-" => "Z"
                ],
                "Ketawa lepas, tidak ditahan-tahan" => [
                    "+" => "+-",
                    "-" => "Y"
                ],
                "Berani, tegas" => [
                    "+" => "X",
                    "-" => "X"
                ],
                "Tenang, hati-hati, serius" => [
                    "+" => "R",
                    "-" => "R"
                ]
            ],
            13 => [
                "Kemauan yang keras" => [
                    "+" => "+-",
                    "-" => "X"
                ],
                "Suka dengan hal baru" => [
                    "+" => "Y",
                    "-" => "+-"
                ],
                "Menolak perubahan mendadak" => [
                    "+" => "Z",
                    "-" => "Z"
                ],
                "Mempersiapkan masa depan" => [
                    "+" => "+-",
                    "-" => "R"
                ]
            ],
            14 => [
                "Penyemangat yang baik" => [
                    "+" => "Y",
                    "-" => "Y"
                ],
                "Sabar mendengarkan pembicaraan" => [
                    "+" => "Z",
                    "-" => "Z"
                ],
                "Peraturan itu untuk keadlian" => [
                    "+" => "R",
                    "-" => "R"
                ],
                "Mandiri, tidak tergantung orang lain" => [
                    "+" => "X",
                    "-" => "X"
                ]
            ],
            15 => [
                "Suka menyenangkan orang lain" => [
                    "+" => "Z",
                    "-" => "Z"
                ],
                "Suka mengambil keputusan" => [
                    "+" => "X",
                    "-" => "X"
                ],
                "Bersemangat dan optimis" => [
                    "+" => "Y",
                    "-" => "Y"
                ],
                "Mengutamakan fakta, data" => [
                    "+" => "+-",
                    "-" => "R"
                ]
            ],
            16 => [
                "Ramah, lemah lembut" => [
                    "+" => "Z",
                    "-" => "Z"
                ],
                "Berpikir positif, bersemangat" => [
                    "+" => "Y",
                    "-" => "Y"
                ],
                "Suka mengambil risiko" => [
                    "+" => "+-",
                    "-" => "X"
                ],
                "Bekerja sesuai perintah" => [
                    "+" => "R",
                    "-" => "R"
                ]
            ],
            17 => [
                "Hati-hati, kontrol diri ketat" => [
                    "+" => "+-",
                    "-" => "R"
                ],
                "Berkata sesuai yang dipikirkan" => [
                    "+" => "X",
                    "-" => "X"
                ],
                "Tidak mudah cemas akan sesuatu" => [
                    "+" => "Z",
                    "-" => "Z"
                ],
                "Jika berbelanja sesuai keinginan" => [
                    "+" => "Y",
                    "-" => "+-"
                ]
            ],
            18 => [
                "Ramah, mudah berteman" => [
                    "+" => "Z",
                    "-" => "+-"
                ],
                "Cepat bosan dengan hal-hal rutin" => [
                    "+" => "+-",
                    "-" => "Y"
                ],
                "Suka berubah-ubah" => [
                    "+" => "X",
                    "-" => "X"
                ],
                "Menginginkan kepastian" => [
                    "+" => "R",
                    "-" => "R"
                ]
            ],
            19 => [
                "Mengalah, menghidari konflik" => [
                    "+" => "+-",
                    "-" => "Z"
                ],
                "Hal-hal kecil menjadi perhatian" => [
                    "+" => "R",
                    "-" => "+-"
                ],
                "Berubah pada saat-saat terakhir" => [
                    "+" => "Y",
                    "-" => "Y"
                ],
                "Suka tantangan baru" => [
                    "+" => "X",
                    "-" => "X"
                ]
            ],
            20 => [
                "Pendiam, tidak suka berbicara" => [
                    "+" => "R",
                    "-" => "R"
                ],
                "Riang, suka berbicara" => [
                    "+" => "Y",
                    "-" => "Y"
                ],
                "Cepat merasa puas" => [
                    "+" => "Z",
                    "-" => "+-"
                ],
                "Cepat memutuskan, tegas" => [
                    "+" => "X",
                    "-" => "X"
                ]
            ],
            21 => [
                "Mampu sabar dalam menunggu" => [
                    "+" => "Z",
                    "-" => "Z"
                ],
                "Menginginkan petunjuk yang jelas" => [
                    "+" => "R",
                    "-" => "+-"
                ],
                "Suka bercanda" => [
                    "+" => "Y",
                    "-" => "Y"
                ],
                "Jika ada keinginan harus dipenuhi" => [
                    "+" => "X",
                    "-" => "X"
                ]
            ],
            22 => [
                "Peraturan itu menghambat" => [
                    "+" => "+-",
                    "-" => "X"
                ],
                "Suka menganalisa sampai detil" => [
                    "+" => "R",
                    "-" => "+-"
                ],
                "Unik, beda dengan yang lain" => [
                    "+" => "Y",
                    "-" => "Y"
                ],
                "Bisa diharapkan batuannya" => [
                    "+" => "Z",
                    "-" => "Z"
                ]
            ],
            23 => [
                "Berani mengambil resiko" => [
                    "+" => "X",
                    "-" => "X"
                ],
                "Menyenangkan, suka membantu" => [
                    "+" => "Z",
                    "-" => "+-"
                ],
                "Mudah mengemukakan perasaan" => [
                    "+" => "Y",
                    "-" => "+-"
                ],
                "Rendah hati, sederhana" => [
                    "+" => "+-",
                    "-" => "R"
                ]
            ],
            24 => [
                "Mengutamakan hasil" => [
                    "+" => "X",
                    "-" => "X"
                ],
                "Menginginkan akurasi, ketepatan" => [
                    "+" => "R",
                    "-" => "R"
                ],
                "Betah berbicara lama" => [
                    "+" => "+-",
                    "-" => "Y"
                ],
                "Suka berkelompok, bersama-sama" => [
                    "+" => "+-",
                    "-" => "Z"
                ]
            ]
        );

        foreach ($disc_soal as $key1 => $value1) {
            foreach ($value1 as $key2 => $value2) {
                DB::table('disc_soals')->insert([
                    'disc_group_nomor' => $key1,
                    'soal' => $key2,
                    'kunci_plus' => $value2['+'],
                    'kunci_minus' => $value2['-']
                ]);
            }
        }
    }
}
