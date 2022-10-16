<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::Create([
            'name' => 'Ultras Garuda Indonesia rohid ammar firdaus',
            'username' => 'rohid',
            'password' => bcrypt('rohid123'),
            'email' => 'gemersrasta@gmail.com',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'admin'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Pusat',
            'username' => 'ugpusat',
            'password' => bcrypt('pusat1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Tangerang',
            'username' => 'tangerang',
            'password' => bcrypt('tangerang1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Bangka Belitung',
            'username' => 'bangkabelitung',
            'password' => bcrypt('bangkabelitung1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Bali',
            'username' => 'bali',
            'password' => bcrypt('bali1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Balikpapan',
            'username' => 'balikpapan',
            'password' => bcrypt('balikpapan1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Banten',
            'username' => 'banten',
            'password' => bcrypt('banten1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Banyumas',
            'username' => 'banyumas',
            'password' => bcrypt('banyumas1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Banyuwangi',
            'username' => 'banyuwangi',
            'password' => bcrypt('banyuwangi1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Batam',
            'username' => 'batam',
            'password' => bcrypt('batam1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Batang',
            'username' => 'batang',
            'password' => bcrypt('batang1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Bekasi',
            'username' => 'bekasi',
            'password' => bcrypt('bekasi1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Blitar',
            'username' => 'blitar',
            'password' => bcrypt('blitar1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Blora',
            'username' => 'blora',
            'password' => bcrypt('blora1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Bogor',
            'username' => 'bogor',
            'password' => bcrypt('bogor1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Bojonegoro',
            'username' => 'bojonegoro',
            'password' => bcrypt('bojonegoro1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Boyolali',
            'username' => 'boyolali',
            'password' => bcrypt('boyolali1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Brebes',
            'username' => 'brebes',
            'password' => bcrypt('brebes1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Cilegon',
            'username' => 'cilegon',
            'password' => bcrypt('cilegon1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Cianjur',
            'username' => 'cianjur',
            'password' => bcrypt('cianjur1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Cirebon',
            'username' => 'cirebon',
            'password' => bcrypt('cirebon1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Gresik',
            'username' => 'gresik',
            'password' => bcrypt('gresik1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Jakarta',
            'username' => 'jakarta',
            'password' => bcrypt('jakarta1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);


        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Jogja',
            'username' => 'jogja',
            'password' => bcrypt('jogja1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Kotawaringin Barat',
            'username' => 'kotawaringinbarat',
            'password' => bcrypt('kotawaringinbarat1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Lamongan',
            'username' => 'lamongan',
            'password' => bcrypt('lamongan1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Lampung',
            'username' => 'lampung',
            'password' => bcrypt('lampung1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Madura',
            'username' => 'madura',
            'password' => bcrypt('madura1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Makassar',
            'username' => 'makassar',
            'password' => bcrypt('makassar1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Malang',
            'username' => 'malang',
            'password' => bcrypt('malang1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Mojokerto',
            'username' => 'mojokerto',
            'password' => bcrypt('mojokerto1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Muriaraya',
            'username' => 'muriaraya',
            'password' => bcrypt('muriaraya1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Palembang',
            'username' => 'palembang',
            'password' => bcrypt('palembang1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Ponorogo',
            'username' => 'ponorogo',
            'password' => bcrypt('ponorogo1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Pontianak',
            'username' => 'pontianak',
            'password' => bcrypt('pontianak1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Minang',
            'username' => 'minang',
            'password' => bcrypt('minang1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Riau',
            'username' => 'riau',
            'password' => bcrypt('riau1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Samarinda',
            'username' => 'samarinda',
            'password' => bcrypt('samarinda1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Semarang',
            'username' => 'semarang',
            'password' => bcrypt('semarang1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Sidoarjo',
            'username' => 'sidoarjo',
            'password' => bcrypt('sidoarjo1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Surabaya',
            'username' => 'surabaya',
            'password' => bcrypt('surabaya1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Depok',
            'username' => 'depok',
            'password' => bcrypt('depok1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Medan',
            'username' => 'medan',
            'password' => bcrypt('medan1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);

        User::Create([
            'name' => 'Ultras Garuda Indonesia Sezione Squadra',
            'username' => 'squadra',
            'password' => bcrypt('squadra1945'),
            'email' => '',
            'no_hp' => '08667754123',
            'status' => 'aktif',
            'role' => 'sezione'

        ]);


    }
}
