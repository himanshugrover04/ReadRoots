<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'On Liberty',
                'author' => 'John Stuart Mill',
                'description' => 'A classic essay exploring individual freedom and the role of authority in society.',
                'price' => '99.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/34901',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'Common Sense',
                'author' => 'Thomas Paine',
                'description' => 'A 1776 pamphlet that urged American independence from Britain.',
                'price' => '79.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/147',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'The Federalist Papers',
                'author' => 'Hamilton, Madison & Jay',
                'description' => 'A collection of essays promoting the ratification of the U.S. Constitution.',
                'price' => '56.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/1404',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'The Autobiography of Benjamin Franklin',
                'author' => 'Benjamin Franklin',
                'description' => "The story of Franklin's life, values, and rise from humble beginnings.",
                'price' => '121.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/148',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'The Wealth of Nations',
                'author' => 'Adam Smith',
                'description' => 'Seminal economics text on free markets and labor productivity.',
                'price' => '76.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/3300',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'Narrative of the Life of Frederick Douglass',
                'author' => 'Frederick Douglass',
                'description' => 'A firsthand account of slavery and the journey to freedom.',
                'price' => '45.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/23',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'Meditations',
                'author' => 'Marcus Aurelius',
                'description' => 'Philosophical reflections by the Roman Emperor on Stoicism.',
                'price' => '34.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/2680',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'The Varieties of Religious Experience',
                'author' => 'William James',
                'description' => 'A study on the psychology and diversity of religious experiences.',
                'price' => '55.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/621',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'Democracy in America',
                'author' => 'Alexis de Tocqueville',
                'description' => 'An in-depth analysis of American political culture in the 19th century.',
                'price' => '34.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/815',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'The Souls of Black Folk',
                'author' => 'W.E.B. Du Bois',
                'description' => 'A seminal work on race, culture, and identity in America.',
                'price' => '78.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/408',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'Beyond Good and Evil',
                'author' => 'Friedrich Nietzsche',
                'description' => 'Exploration of morality and critique of traditional ethics.',
                'price' => '56.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/4363',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'Twenty Years at Hull-House',
                'author' => 'Jane Addams',
                'description' => 'A memoir of social reform and activism in Chicago.',
                'price' => '45.00',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/1325',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'The Subjection of Women',
                'author' => 'John Stuart Mill',
                'description' => 'A foundational feminist text advocating equality for women.',
                'price' => '32.00',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/27083',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'Walden',
                'author' => 'Henry David Thoreau',
                'description' => 'A reflection on simple living in natural surroundings.',
                'price' => '76.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/205',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'The Education of Henry Adams',
                'author' => 'Henry Adams',
                'description' => 'An autobiography exploring education and change in the 19th century.',
                'price' => '23.00',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/2044',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'The Art of War',
                'author' => 'Sun Tzu (translated by Lionel Giles)',
                'description' => 'Ancient Chinese text on military strategy and leadership.',
                'price' => '18.00',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/132',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'The Interpretation of Dreams',
                'author' => 'Sigmund Freud',
                'description' => 'A groundbreaking work on psychoanalysis and dream theory.',
                'price' => '12.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/15489',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'The Protestant Ethic and the Spirit of Capitalism',
                'author' => 'Max Weber',
                'description' => 'Analysis of the relationship between religion and economic development.',
                'price' => '11.99',
                'pdf_url' => 'https://archive.org/details/protestantethics00webeuoft',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => "A Room of One's Own",
                'author' => 'Virginia Woolf',
                'description' => "An extended essay about women's need for space, money, and education to write.",
                'price' => '09.99',
                'pdf_url' => 'https://gutenberg.net.au/ebooks02/0200791.txt',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'Civil Disobedience',
                'author' => 'Henry David Thoreau',
                'description' => 'An argument for disobedience to an unjust state.',
                'price' => '8.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/71',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'The Prince',
                'author' => 'Niccolò Machiavelli',
                'description' => 'A political treatise on leadership and power.',
                'price' => '10.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/1232',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'Self-Reliance',
                'author' => 'Ralph Waldo Emerson',
                'description' => 'An essay on individualism and trusting oneself.',
                'price' => '12.00',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/16643',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'Ethics',
                'author' => 'Baruch Spinoza',
                'description' => 'A philosophical treatise structured as a geometric proof.',
                'price' => '11.00',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/3800',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'The Confessions of Saint Augustine',
                'author' => 'Saint Augustine',
                'description' => 'One of the earliest autobiographies in Western literature.',
                'price' => '9.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/3296',
                'genre' => 'Non-Fiction'
            ],
            [
                'title' => 'The Ethics of Diet',
                'author' => 'Howard Williams',
                'description' => 'Historical account of vegetarianism and ethical eating.',
                'price' => '12.99',
                'pdf_url' => 'https://www.gutenberg.org/ebooks/25026',
                'genre' => 'Non-Fiction'
            ]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
