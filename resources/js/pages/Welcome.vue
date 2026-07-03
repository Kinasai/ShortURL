<script setup>
import { Head, Link } from '@inertiajs/vue3'
</script>

<template>
    <Head title="ShortURL" />

    <div class="min-h-screen bg-gray-50 text-gray-900">

        <!-- Header -->
        <header class="border-b bg-white">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">

                <Link href="/" class="text-2xl font-bold text-indigo-600">
                    ShortURL
                </Link>

                <div class="flex items-center gap-4">

                    <template v-if="$page.props.auth.user">
                        <a
                            :href="route('filament.admin.pages.dashboard')"
                            class="rounded-lg bg-indigo-600 px-5 py-2 text-white transition hover:bg-indigo-700"
                        >
                            Панель управления
                        </a>
                        <Link
                            method="post"
                            :href="route('logout')"
                            class="rounded-lg px-4 py-2 text-gray-600 transition hover:text-black"
                        >
                            Выйти
                        </Link>
                    </template>
                    <template v-else>
                        <Link
                            :href="route('login')"
                            class="rounded-lg px-4 py-2 text-gray-600 transition hover:text-black"
                        >
                            Войти
                        </Link>

                        <Link
                            :href="route('register')"
                            class="rounded-lg bg-indigo-600 px-5 py-2 text-white transition hover:bg-indigo-700"
                        >
                            Регистрация
                        </Link>
                    </template>

                </div>

            </div>
        </header>

        <!-- Hero -->
        <section class="py-24">
            <div class="mx-auto max-w-4xl px-6 text-center">

                <span
                    class="rounded-full bg-indigo-100 px-4 py-2 text-sm font-medium text-indigo-600"
                >
                    Сервис сокращения ссылок
                </span>

                <h1 class="mt-8 text-5xl font-bold leading-tight md:text-6xl">
                    Создавайте короткие ссылки
                    <span class="text-indigo-600">
                        и отслеживайте статистику
                    </span>
                </h1>

                <p class="mx-auto mt-6 max-w-2xl text-lg text-gray-600">
                    Удобный сервис для хранения ссылок,
                    анализа переходов и управления ими
                    через современную панель управления.
                </p>

                <div class="mt-10 flex flex-col justify-center gap-4 sm:flex-row">

                    <template v-if="$page.props.auth.user">
                        <a
                            :href="route('filament.admin.pages.dashboard')"
                            class="rounded-xl bg-indigo-600 px-8 py-4 font-semibold text-white transition hover:bg-indigo-700"
                        >
                            Перейти в панель
                        </a>
                    </template>

                    <template v-else>
                        <Link
                            :href="route('register')"
                            class="rounded-xl bg-indigo-600 px-8 py-4 font-semibold text-white transition hover:bg-indigo-700"
                        >
                            Создать аккаунт
                        </Link>

                        <Link
                            :href="route('login')"
                            class="rounded-xl border bg-white px-8 py-4 font-semibold transition hover:bg-gray-100"
                        >
                            Войти
                        </Link>
                    </template>


                </div>

            </div>
        </section>

        <!-- Features -->
        <section class="py-20">
            <div class="mx-auto grid max-w-7xl gap-8 px-6 md:grid-cols-2 lg:grid-cols-4">

                <div class="rounded-2xl bg-white p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                    <div class="text-5xl">⚡</div>

                    <h3 class="mt-5 text-xl font-semibold">
                        Быстро
                    </h3>

                    <p class="mt-4 text-gray-600">
                        Создание короткой ссылки занимает меньше секунды.
                    </p>
                </div>

                <div class="rounded-2xl bg-white p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                    <div class="text-5xl">📊</div>

                    <h3 class="mt-5 text-xl font-semibold">
                        Аналитика
                    </h3>

                    <p class="mt-4 text-gray-600">
                        Подробная статистика переходов и активности пользователей.
                    </p>
                </div>

                <div class="rounded-2xl bg-white p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                    <div class="text-5xl">🔗</div>

                    <h3 class="mt-5 text-xl font-semibold">
                        Управление
                    </h3>

                    <p class="mt-4 text-gray-600">
                        Все ваши ссылки находятся в одном удобном кабинете.
                    </p>
                </div>

                <div class="rounded-2xl bg-white p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                    <div class="text-5xl">🔒</div>

                    <h3 class="mt-5 text-xl font-semibold">
                        Безопасность
                    </h3>

                    <p class="mt-4 text-gray-600">
                        Полный контроль над ссылками и их статистикой.
                    </p>
                </div>

            </div>
        </section>

        <!-- How it works -->
        <section class="bg-white py-24">

            <div class="mx-auto max-w-6xl px-6">

                <h2 class="text-center text-4xl font-bold">
                    Как это работает
                </h2>

                <div class="mt-16 grid gap-10 md:grid-cols-4">

                    <div class="text-center">
                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-indigo-600 text-xl font-bold text-white">
                            1
                        </div>

                        <h3 class="mt-5 text-xl font-semibold">
                            Регистрация
                        </h3>

                        <p class="mt-3 text-gray-600">
                            Создайте аккаунт за пару минут.
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-indigo-600 text-xl font-bold text-white">
                            2
                        </div>

                        <h3 class="mt-5 text-xl font-semibold">
                            Создание ссылки
                        </h3>

                        <p class="mt-3 text-gray-600">
                            Добавьте длинную ссылку и получите короткую.
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-indigo-600 text-xl font-bold text-white">
                            3
                        </div>

                        <h3 class="mt-5 text-xl font-semibold">
                            Делитесь
                        </h3>

                        <p class="mt-3 text-gray-600">
                            Используйте короткую ссылку где угодно.
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-indigo-600 text-xl font-bold text-white">
                            4
                        </div>

                        <h3 class="mt-5 text-xl font-semibold">
                            Анализируйте
                        </h3>

                        <p class="mt-3 text-gray-600">
                            Отслеживайте эффективность ваших ссылок.
                        </p>
                    </div>

                </div>

            </div>

        </section>

        <!-- CTA -->
        <section class="py-24">
            <div class="mx-auto max-w-5xl px-6">

                <div class="rounded-3xl bg-indigo-600 px-10 py-16 text-center text-white">

                    <h2 class="text-4xl font-bold">
                        Готовы начать?
                    </h2>

                    <p class="mx-auto mt-5 max-w-2xl text-lg text-indigo-100">
                        Создайте бесплатный аккаунт и получите доступ
                        к управлению ссылками и подробной статистике.
                    </p>

                    <a
                        v-if="$page.props.auth.user"
                        :href="route('filament.admin.pages.dashboard')"
                        class="mt-10 inline-flex rounded-xl bg-white px-8 py-4 font-semibold text-indigo-600 transition hover:bg-gray-100"
                    >
                        Перейти в панель
                    </a>
                    <Link v-else
                        :href="route('register')"
                        class="mt-10 inline-flex rounded-xl bg-white px-8 py-4 font-semibold text-indigo-600 transition hover:bg-gray-100"
                    >
                        Регистрация
                    </Link>

                </div>

            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t bg-white">
            <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 px-6 py-8 md:flex-row">

                <div class="text-gray-500">
                    © {{ new Date().getFullYear() }} ShortURL
                </div>

                <div class="flex gap-6">
                    <template v-if="$page.props.auth.user">
                    <a
                        :href="route('filament.admin.pages.dashboard')"
                        class="text-gray-500 hover:text-gray-900"
                    >
                        Панель управления
                    </a>
                    <Link
                        method="post"
                        :href="route('logout')"
                        class="text-gray-500 hover:text-gray-900"
                    >
                        Выйти
                    </Link>
                    </template>
                    <template v-else>
                        <Link
                            :href="route('login')"
                            class="text-gray-500 hover:text-gray-900"
                        >
                            Войти
                        </Link>

                        <Link
                            :href="route('register')"
                            class="text-gray-500 hover:text-gray-900"
                        >
                            Регистрация
                        </Link>
                    </template>


                </div>

            </div>
        </footer>

    </div>
</template>
