<?php

namespace App\Enums;


enum  PostsState: string
{
    case Draft = "draft";
    case Archived = "archived";
    case Saved = "saved";
}
