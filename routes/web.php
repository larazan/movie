<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\WelcomeController;
// Livewire
use App\Http\Livewire\ArticleIndex;
use App\Http\Livewire\AttributeIndex;
use App\Http\Livewire\BasketIndex;
use App\Http\Livewire\BrandIndex;
use App\Http\Livewire\CalendarIndex;
use App\Http\Livewire\CastIndex;
use App\Http\Livewire\CategoryArticleIndex;
use App\Http\Livewire\CategoryIndex;
use App\Http\Livewire\CharacterIndex;
use App\Http\Livewire\CountryIndex;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\EpisodeIndex;
use App\Http\Livewire\FaqIndex;
use App\Http\Livewire\GenreIndex;
use App\Http\Livewire\LabelIndex;
use App\Http\Livewire\MessagesIndex;
use App\Http\Livewire\MovieCast;
use App\Http\Livewire\MovieCategoryIndex;
use App\Http\Livewire\MovieIndex;
use App\Http\Livewire\MusicIndex;
use App\Http\Livewire\NetworkIndex;
use App\Http\Livewire\OrderIndex;
use App\Http\Livewire\PermissionIndex;
use App\Http\Livewire\PersonIndex;
use App\Http\Livewire\PodcastIndex;
use App\Http\Livewire\PostIndex;
use App\Http\Livewire\ProductIndex;
use App\Http\Livewire\ProductSliderIndex;
use App\Http\Livewire\ProductReviewIndex;
use App\Http\Livewire\QuoteIndex;
use App\Http\Livewire\RoleIndex;
use App\Http\Livewire\SeasonIndex;
use App\Http\Livewire\SerieIndex;
use App\Http\Livewire\SettingIndex;
use App\Http\Livewire\ShipmentIndex;
use App\Http\Livewire\SlideIndex;
use App\Http\Livewire\TagIndex;
use App\Http\Livewire\UserIndex;


use Illuminate\Support\Facades\Route;
// use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', Dashboard::class);
    Route::get('articles', ArticleIndex::class)->name('articles.index');
    Route::get('attributes', AttributeIndex::class)->name('attributes.index');
    Route::get('basket', BasketIndex::class)->name('basket.index');
    Route::get('brands', BrandIndex::class)->name('brands.index');
    Route::get('calendar', CalendarIndex::class)->name('calendar.index');
    Route::get('casts', CastIndex::class)->name('casts.index');
    Route::get('category-article', CategoryArticleIndex::class)->name('category-article.index');
    Route::get('categories', CategoryIndex::class)->name('categories.index');
    // Route::get('characters', CharacterIndex::class)->name('characters.index');
    Route::get('countries', CountryIndex::class)->name('countries.index');
    Route::get('episodes', EpisodeIndex::class)->name('episodes.index');
    Route::get('faqs', FaqIndex::class)->name('faqs.index');
    Route::get('genres', GenreIndex::class)->name('genres.index');
    Route::get('labels', LabelIndex::class)->name('labels.index');
    Route::get('messages', MessagesIndex::class)->name('messages.index');
    Route::get('movie-cast', MovieCast::class)->name('movie-cast.index');
    Route::get('movie/{id}/characters', CharacterIndex::class)->name('movie-cast.index');
    Route::get('movie-category', MovieCategoryIndex::class)->name('movie-category.index');
    Route::get('movies', MovieIndex::class)->name('movies.index');
    Route::get('musics', MusicIndex::class)->name('musics.index');
    Route::get('networks', NetworkIndex::class)->name('networks.index');
    Route::get('orders', OrderIndex::class)->name('orders.index');
    Route::get('permissions', PermissionIndex::class)->name('permissions.index');
    Route::get('persons', PersonIndex::class)->name('persons.index');
    Route::get('podcasts', PodcastIndex::class)->name('podcasts.index');
    Route::get('posts', PostIndex::class)->name('posts.index');
    Route::get('products', ProductIndex::class)->name('products.index');
    Route::get('product-slide', ProductSliderIndex::class)->name('product-slider.index');
    Route::get('product-review', ProductReviewIndex::class)->name('product-review.index');
    Route::get('quotes', QuoteIndex::class)->name('quotes.index');
    Route::get('roles', RoleIndex::class)->name('roles.index');
    Route::get('seasons', SeasonIndex::class)->name('seasons.index');
    Route::get('series', SerieIndex::class)->name('series.index');
    Route::get('settings', SettingIndex::class)->name('settings.index');
    Route::get('shipments', ShipmentIndex::class)->name('shipments.index');
    Route::get('slides', SlideIndex::class)->name('slides.index');
    Route::get('tags', TagIndex::class)->name('tags.index');
    Route::get('users', UserIndex::class)->name('users.index');

    Route::get('series/{serie}/seasons', SeasonIndex::class)->name('seasons.index');
    Route::get('series/{serie}/seasons/{season}/episodes', EpisodeIndex::class)->name('episodes.index');

    Route::get('accoun', [DashboardController::class, 'user']);
    Route::get('notification', [DashboardController::class, 'notification']);

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/404', [DashboardController::class, 'empat04']);
    Route::get('/blogs', [DashboardController::class, 'blog']);
    Route::get('/blog/{id}', [DashboardController::class, 'blogDetail']);
    Route::get('/calendar', [DashboardController::class, 'calendar']);
    Route::get('/campaign', [DashboardController::class, 'campaign']);
    Route::get('/feed', [DashboardController::class, 'feed']);
    Route::get('/forum', [DashboardController::class, 'forum']);
    Route::get('/forum/{id}', [DashboardController::class, 'forumPost']);
    Route::get('/profile', [DashboardController::class, 'profile']);
    Route::get('/user', [DashboardController::class, 'user']);
    Route::get('/cart', [DashboardController::class, 'cart']);
    Route::get('/customer', [DashboardController::class, 'customer']);
    Route::get('/invoice', [DashboardController::class, 'invoice']);
    Route::get('/orders', [DashboardController::class, 'orders']);
    Route::get('/products', [DashboardController::class, 'products']);
    Route::get('/inbox', [DashboardController::class, 'inbox']);
    Route::get('/message', [DashboardController::class, 'message']);
    Route::get('/account', [DashboardController::class, 'account']);
    Route::get('/billing', [DashboardController::class, 'billing']);
    Route::get('/notification', [DashboardController::class, 'notification']);
    Route::get('/plan', [DashboardController::class, 'plan']);
    Route::get('/changelog', [DashboardController::class, 'changelog']);
    Route::get('/faq', [DashboardController::class, 'faq']);
    Route::get('/roadmap', [DashboardController::class, 'roadmap']);
});
