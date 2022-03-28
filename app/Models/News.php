<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public $table = "news";

    public const SHORT_TEXT_LENGTH = 300;

    /**
     * @return mixed|string
     */
    public function getShortText()
    {
        $text = strip_tags($this->text);

        if (strlen($text) > self::SHORT_TEXT_LENGTH) {
            return substr($text, 0, self::SHORT_TEXT_LENGTH)."...";
        }

        return $text;
    }
}
