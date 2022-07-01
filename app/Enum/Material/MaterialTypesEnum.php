<?php

namespace App\Enum\Material;


enum MaterialTypesEnum: string
{

  case BOOK =   'Книга';
  case ARTICLE =   'Статья';
  case VIDEO =   'Видео';
  case WEBSITE =   'Сайт/Блог';
  case COLLECTION =   'Подборка';
  case MAIN_IDEAS =   'Ключевые идеи книги';
}
