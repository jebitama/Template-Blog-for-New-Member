<?php

use Illuminate\Database\Seeder;
use App\Berita;
use Carbon\Carbon;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Berita::insert([
            'judul'=> 'Artikel Tentang kesehatan',
            'img_url' => 'https://sehatqcontent.s3.amazonaws.com/content/og-image-promo.jpg',
            'detail'=> 'Lorem ipsum dolor sit amet, et usu dolores expetendis, pri id integre facilisis, zril iracundia sadipscing ius in. Exerci ornatus evertitur eu sit, pri oportere ocurreret efficiendi eu. Aeterno conclusionemque at mel. Ex est adhuc rebum. Tritani ceteros eligendi usu ea, ei omnis menandri oportere has. No cum nemore argumentum, vis denique imperdiet adversarium id. Ut usu commodo alienum, nec ex aeque dicunt veritus. Et alii ludus pertinax sed, summo congue per an, ne agam dictas veritus sit. Id vis nibh vide wisi, pro in iriure antiopam. Eu pri primis senserit disputando.',
            'author'=> 'Author',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
    }
}
