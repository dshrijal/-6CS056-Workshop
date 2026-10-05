#!/usr/bin/env bash
# Usage: ./install.sh /path/to/your/laravel-project
set -e
TARGET="${1:-.}"

if [ ! -f "$TARGET/artisan" ]; then
  echo "Error: '$TARGET' does not look like a Laravel project (no artisan file)."
  exit 1
fi

HERE="$(cd "$(dirname "$0")" && pwd)"

mkdir -p "$TARGET/app/Models" "$TARGET/database/migrations" \
         "$TARGET/resources/views/student" "$TARGET/resources/views/course"

cp "$HERE"/app/Models/*.php                    "$TARGET/app/Models/"
cp "$HERE"/database/migrations/*.php           "$TARGET/database/migrations/"
cp "$HERE"/resources/views/student/*.blade.php "$TARGET/resources/views/student/"
cp "$HERE"/resources/views/course/*.blade.php  "$TARGET/resources/views/course/"
cp "$HERE"/routes/web.php                      "$TARGET/routes/web.php"

echo "Files copied. Next:"
echo "  1. Set DB_* values in .env and create the database (CREATE DATABASE WorkshopDB;)"
echo "  2. cd $TARGET && php artisan migrate"
echo "  3. php artisan serve  ->  http://127.0.0.1:8000/students"
