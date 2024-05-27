<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class News extends Controller
{
    public function index()
    {
        // Mengimpor Simple HTML DOM Parser
        require_once APPPATH . 'Libraries/simple_html_dom.php';

        // Mengambil HTML dari URL
        $url = 'https://aceh.tribunnews.com/tag/aceh-jaya';
        $html = file_get_contents($url);

        // Periksa apakah konten HTML berhasil diambil
        if ($html === FALSE) {
            echo "Failed to retrieve HTML.";
            return;
        }

        // Membuat objek DOM
        $dom = str_get_html($html);

        // Periksa apakah objek DOM berhasil dibuat
        if ($dom === FALSE) {
            echo "Failed to parse HTML.";
            return;
        }

        // Array untuk menyimpan data berita
        $news = [];

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

                $news[] = [
                    'title' => $title,
                    'link' => $link,
                    'image' => $image,
                    'description' => $description
                ];
            }
        }

        // Mengirim data ke view
        $data['news'] = $news;
        return view('index', $data);
    }
}
