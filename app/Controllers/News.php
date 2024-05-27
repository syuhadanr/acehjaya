<?php
namespace App\Controllers;
require_once 'vendor/autoload.php'; // Autoload Composer packages



use CodeIgniter\Controller;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Client;

class News extends Controller
{
    public function index()
    {
        // Create a GuzzleHttp Client instance
        $client = new Client();

        // Array to store scraped news
        $news = [];

        // URLs to scrape
        $urls = [
            'https://aceh.tribunnews.com/tag/aceh-jaya',
            'https://aceh.tribunnews.com/tag/calang',
        ];

        // Scrape each URL
        foreach ($urls as $url) {
            // Send a GET request
            $response = $client->request('GET', $url);

            // Get the HTML content
            $html = (string) $response->getBody();

            // Create a new Crawler instance
            $crawler = new Crawler($html);

            // Find news elements
            $newsElements = $crawler->filter('.articles--iridescent-list');

            // Loop through each news element
            $newsElements->each(function (Crawler $node) use (&$news) {
                $title = $node->filter('h3')->text();
                $summary = $node->filter('.f18r_')->text(); // Example: Assuming summary has a class of 'f18r_'

                // Add news to the array
                $news[] = [
                    'title' => $title,
                    'summary' => $summary,
                ];
            });
        }

        // Pass news data to the view
        $data['news'] = $news;

        // Load the view and pass the data
        return view('index', $data);
    }
}
