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
        if (strlen($this->text) > self::SHORT_TEXT_LENGTH) {
            return substr($this->text, 0, self::SHORT_TEXT_LENGTH)."...";
        }

        return $this->text;
    }
}
