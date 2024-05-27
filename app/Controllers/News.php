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
        $news = [];

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
            $news = array_merge($news, fetchNews($url));
        }

        // Mengirim data ke view
        $data['news'] = $news;
        return view('index', $data);
    }
}
