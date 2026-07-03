# ShortURL — сервис сокращения ссылок

Простой и быстрый сервис для сокращения ссылок с личной панелью управления и статистикой переходов.

---

## Возможности

- Создание коротких ссылок
- Статистика переходов
- Уникальные IP
- История переходов
- Личный кабинет (Filament Admin Panel)
- Авторизация пользователей
- Современный UI (Inertia + Vue)

---

## Технологии

- Laravel 12
- Filament Admin Panel
- Inertia.js
- Vue 3
- Tailwind CSS
- MySQL / SQLite

---

## Установка и запуск

```bash
git clone git@github.com:Kinasai/ShortURL.git
cd ShortURL

composer install
npm install

cp .env.example .env
php artisan key:generate
php artisan migrate

npm run build
php artisan serve
```

---

## Панель управления

Filament панель доступна по адресу:

`/panel`

В панели можно:

- управлять ссылками
- смотреть статистику переходов
- просматривать логи переходов

---

## Короткие ссылки

Формат редиректа:
`http://127.0.0.1:8000/go/{short}`

Пример:
`http://127.0.0.1:8000/go/Q7jSlWCG → https://google.com`

---

## Статистика

Система собирает:

- количество переходов
- уникальные IP
- время посещения
