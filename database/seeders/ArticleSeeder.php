<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $article = [
            [
                'title' => 'Deep Learning',
                'content' => 'An in-depth look at deep learning techniques and applications. This article explores neural networks, convolutional networks, and their use in various fields such as image recognition and natural language processing.',
                'image_path' => 'images/article/DeepLearning.png',
                'category' => 'Data Science',
                'writer_id' => 2,
            ],
            [
                'title' => 'Machine Learning',
                'content' => 'This article discusses the latest trends in machine learning for the year 2025, including emerging algorithms, advanced techniques, and best practices for organizations to implement machine learning solutions.',
                'image_path' => 'images/article/MachineLearning.png',
                'category' => 'Data Science',
                'writer_id' => 2,
            ],
            [
                'title' => 'Natural Language Processing',
                'content' => 'An overview of natural language processing (NLP) techniques and their applications in 2025, including sentiment analysis, language translation, and chatbots.',
                'image_path' => 'images/article/NaturalLanguageProcessing.png',
                'category' => 'Data Science',
                'writer_id' => 4,
            ],
            [
                'title' => 'Network Administration',
                'content' => 'This article outlines essential best practices for maintaining robust network security, including firewall configurations, intrusion detection systems, and regular security audits.',
                'image_path' => 'images/article/NetworkAdministration.png',
                'category' => 'Network Security',
                'writer_id' => 1,
            ],
            [
                'title' => 'Popular Network Technologies',
                'content' => 'An analysis of the latest network technologies in 2025, including software-defined networking, network function virtualization, and the rise of 5G.',
                'image_path' => 'images/article/PopularNetworkTechnology.png',
                'category' => 'Network Security',
                'writer_id' => 3,
            ],
            [
                'title' => 'Software Security',
                'content' => 'This article discusses best practices for ensuring software security, including secure coding practices, vulnerability assessments, and the importance of regular updates and patches.',
                'image_path' => 'images/article/SoftwareSecurity.png',
                'category' => 'Network Security',
                'writer_id' => 5,
            ],
        ];
        
        foreach ($article as $art) {
            Article::create($art);
        }

        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            Article::create([
                'title' => $faker->sentence(6, true),
                'content' => $faker->paragraphs(3, true),
                'image_path' => 'images/article/default.png',
                'category' => $faker->randomElement(['Data Science', 'Network Security']),
                'writer_id' => $faker->numberBetween(1, 5),
            ]);
        }

    }
}
