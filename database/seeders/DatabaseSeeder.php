<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\News;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Review::query()->delete();

        $reviews = [
            ['url' => '/images/reviews/one.jpeg', 'title' => "Роман Дудин", 'text' => "Выиграл прошивку в конкурсе! Автомобиль лада веста 1.6 МТ. После прошивки авто не узнать! Пропали провалы при переключениях, увеличилась динамика при разгоне. Большое спасибо!", "created_at" => "2022-03-07 20:23:00"],
            ['url' => '/images/reviews/one.jpeg', 'title' => "Роман Дудин", 'text' => "Выиграл прошивку в конкурсе! Автомобиль лада веста 1.6 МТ. После прошивки авто не узнать! Пропали провалы при переключениях, увеличилась динамика при разгоне. Большое спасибо!", "created_at" => "2022-03-07 20:23:00"],
        ];

        foreach ($reviews as $review) {
            $reviewModel = new Review();
            $reviewModel->url = $review['url'];
            $reviewModel->title = $review['title'];
            $reviewModel->text = $review['text'];
            $reviewModel->save();
        }

        News::query()->delete();

        $news = [
            ['url' => '/images/advanteges-one.jpeg', 'title' => "Lorem ipsum dolor sit amet", 'text' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet."],
            ['url' => '/images/advanteges-one.jpeg', 'title' => "Далеко-далеко за словесными горами", 'text' => "Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они в буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек Даль журчит по всей стране и обеспечивает ее всеми необходимыми правилами. Эта парадигматическая страна, в которой жаренные члены предложения залетают прямо в рот. Даже всемогущая пунктуация не имеет власти над рыбными текстами, ведущими безорфографичный образ жизни. Однажды одна маленькая строчка рыбного текста по имени Lorem ipsum решила выйти в большой мир грамматики. Великий Оксмокс предупреждал ее о злых запятых, диких знаках вопроса и коварных точках с запятой, но текст не дал сбить себя с толку. Он собрал семь своих заглавных букв, подпоясал инициал за пояс и пустился в дорогу. Взобравшись на первую вершину курсивных гор, бросил он последний взгляд назад, на силуэт своего родного города Буквоград, на заголовок деревни Алфавит и на подзаголовок своего переулка Строчка. Грустный риторический вопрос скатился по его щеке и он продолжил свой путь. По дороге встретил текст рукопись. Она предупредила его: «В моей стране все переписывается по несколько раз. Единственное, что от меня осталось, это приставка «и». Возвращайся ты лучше в свою безопасную страну». Не послушавшись рукописи, наш текст продолжил свой путь. Вскоре ему повстречался коварный составитель"],
        ];

        foreach ($news as $record) {
            $newsModel = new News();
            $newsModel->url = $record['url'];
            $newsModel->title = $record['title'];
            $newsModel->text = $record['text'];
            $newsModel->save();
        }
    }
}
