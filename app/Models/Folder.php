<?php

namespace App\Models;

use Core\Model;

class Folder extends Model
{
    public static string|null $tableName = 'folders';

    public string $title, $created_at, $updated_at;
    public int|null $user_id;
}