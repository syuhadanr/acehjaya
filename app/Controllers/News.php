<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class News extends Controller
{
    public function index()
    {
        // Mengimpor Simple HTML DOM Parser
        require_once APPPATH . 'Libraries/simple_html_dom.php';

        // URL yang ingin diambil
        $urls = [
            'https://aceh.tribunnews.com/tag/aceh-jaya',
            'https://aceh.tribunnews.com/tag/calang'
        ];

        // Array untuk menyimpan data berita
        $news1 = []; // Berita dari Aceh Jaya
        $news2 = []; // Berita dari Calang

        // Fungsi untuk mengambil dan memparse data dari URL
        function fetchNews($url) {
            $html = file_get_contents($url);

            // Periksa apakah konten HTML berhasil diambil
            if ($html === FALSE) {
                return [];
            }

            // Membuat objek DOM
            $dom = str_get_html($html);

            // Periksa apakah objek DOM berhasil dibuat
            if ($dom === FALSE) {
                return [];
            }

            $newsItems = [];

            // Menemukan elemen-elemen berita dan mengekstrak data
            foreach ($dom->find('.fr.mt3.pos_rel') as $element) {
                $linkElement = $element->find('a', 0);
                $imgElement = $element->find('img', 0);
                $descElement = $element->next_sibling()->find('h4.grey2.pt5', 0);

                if ($linkElement && $imgElement && $descElement) {
                    $link = $linkElement->href;
                    $title = $linkElement->title;
                    $image = $imgElement->src;
                    $description = $descElement->plaintext;

                    $newsItems[] = [
                        'title' => $title,
                        'link' => $link,
                        'image' => $image,
                        'description' => $description
                    ];
                }
            }

            return $newsItems;
        }

        // Ambil berita dari semua URL
        foreach ($urls as $url) {
            // Tentukan kategori berita berdasarkan URL
            $category = (strpos($url, 'aceh-jaya') !== false) ? 'news1' : 'news2';
            // Simpan berita ke dalam variabel yang sesuai dengan kategori
            $$category = array_merge($$category, fetchNews($url));
        }

        // Mengirim data ke view
        $data['news1'] = $news1;
        $data['news2'] = $news2;
        return view('index', $data);
    }
}
