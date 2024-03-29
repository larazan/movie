<?php

use App\Events\MessageCreated;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SubscribersController;
use App\Http\Controllers\FullCalendarController;
use App\Http\Controllers\Admin\ArticleController;


// Livewire
use App\Http\Livewire\Account;
use App\Http\Livewire\AdvertisingIndex;
use App\Http\Livewire\AdvSegmentIndex;
use App\Http\Livewire\AlbumIndex;
use App\Http\Livewire\ArticleIndex;
use App\Http\Livewire\AttributeIndex;
use App\Http\Livewire\AttributeOptionIndex;
use App\Http\Livewire\BasketIndex;
use App\Http\Livewire\BrandIndex;
use App\Http\Livewire\CalendarIndex;
use App\Http\Livewire\CastIndex;
use App\Http\Livewire\CategoryArticleIndex;
use App\Http\Livewire\CategoryIndex;
use App\Http\Livewire\CharacterIndex;
use App\Http\Livewire\Chat\Main;
use App\Http\Livewire\CountryIndex;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\EpisodeIndex;
use App\Http\Livewire\FaqIndex;
use App\Http\Livewire\FestivalIndex;
use App\Http\Livewire\ForumIndex;
use App\Http\Livewire\GenreIndex;
use App\Http\Livewire\GroupIndex;
use App\Http\Livewire\kanban;
use App\Http\Livewire\LabelIndex;
use App\Http\Livewire\MessagesIndex;
use App\Http\Livewire\MovieCast;
use App\Http\Livewire\MovieCategoryIndex;
use App\Http\Livewire\MovieIndex;
use App\Http\Livewire\MusicIndex;
use App\Http\Livewire\NationalityIndex;
use App\Http\Livewire\NetworkIndex;
use App\Http\Livewire\OptionIndex;
use App\Http\Livewire\OrderIndex;
use App\Http\Livewire\OrderDetail;
use App\Http\Livewire\PermissionIndex;
use App\Http\Livewire\PersonIndex;
use App\Http\Livewire\PodcastIndex;
use App\Http\Livewire\PollIndex;
use App\Http\Livewire\PostIndex;
use App\Http\Livewire\ProductIndex;
use App\Http\Livewire\ProductSliderIndex;
use App\Http\Livewire\ProductReviewIndex;
use App\Http\Livewire\QuoteIndex;
use App\Http\Livewire\RateTypeIndex;
use App\Http\Livewire\ReportIndex;
use App\Http\Livewire\RoleIndex;
use App\Http\Livewire\SeasonIndex;
use App\Http\Livewire\SerieIndex;
use App\Http\Livewire\SettingIndex;
use App\Http\Livewire\ShipmentIndex;
use App\Http\Livewire\ShipmentDetail;
use App\Http\Livewire\SlideIndex;
use App\Http\Livewire\SubscribeIndex;
use App\Http\Livewire\TagIndex;
use App\Http\Livewire\ThreadDetail;
use App\Http\Livewire\UserIndex;
use App\Http\Livewire\Portrait;
use App\Http\Livewire\Select2;
use App\Http\Livewire\Vote;


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

Route::get('/message/created', function () {
    MessageCreated::dispatch('lorem ipsum dolor sit');
});

// Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', Dashboard::class);
    Route::get('profile', Account::class)->name('account.index');
    Route::get('adv-segments', AdvSegmentIndex::class)->name('adv-segments.index');
    Route::get('advertisings', AdvertisingIndex::class)->name('advertisings.index');
    Route::get('albums', AlbumIndex::class)->name('albums.index');
    Route::get('articles', ArticleIndex::class)->name('articles.index');
    // 
    Route::get('articles/create', [ArticleController::class, 'create']);
    Route::post('articles/store', [ArticleController::class, 'store']);
    Route::get('articles/edit/{articleID}', [ArticleController::class, 'edit']);
    Route::put('articles/update', [ArticleController::class, 'update'])->name('updateArticle');
    // 
    Route::get('attributes', AttributeIndex::class)->name('attributes.index');
    Route::get('attributes/{attributeID}/options', AttributeOptionIndex::class)->name('attribute-options.index');
    Route::get('baskets', BasketIndex::class)->name('basket.index');
    Route::get('brands', BrandIndex::class)->name('brands.index');
    Route::get('calendar', CalendarIndex::class)->name('calendar.index');
    Route::get('casts', CastIndex::class)->name('casts.index');
    Route::get('category-article', CategoryArticleIndex::class)->name('category-article.index');
    Route::get('categories', CategoryIndex::class)->name('categories.index');
    Route::get('chat', Main::class)->name('chat');
    // Route::get('characters', CharacterIndex::class)->name('characters.index');
    Route::get('countries', CountryIndex::class)->name('countries.index');
    Route::get('episodes', EpisodeIndex::class)->name('episodes.index');
    Route::get('faqs', FaqIndex::class)->name('faqs.index');
    Route::get('festivals', FestivalIndex::class)->name('festivals.index');
    Route::get('forum', ForumIndex::class)->name('forum.index');
    Route::get('forum/thread/{slug}', ThreadDetail::class)->name('thread-detail.index');
    Route::get('genres', GenreIndex::class)->name('genres.index');
    Route::get('groups', GroupIndex::class)->name('groups.index');
    Route::get('kanban/{slug?}', Kanban::class)->name('kanban.index');
    // Route::get('kanban/{slug}/board', Kanban::class)->name('kanban.index');
    Route::get('labels', LabelIndex::class)->name('labels.index');
    Route::get('messages', MessagesIndex::class)->name('messages.index');
    Route::get('movie-cast', MovieCast::class)->name('movie-cast.index');
    Route::get('movies/{id}/characters', CharacterIndex::class)->name('movie-cast.index');
    Route::get('movie-category', MovieCategoryIndex::class)->name('movie-category.index');
    Route::get('movies', MovieIndex::class)->name('movies.index');
    Route::get('musics', MusicIndex::class)->name('musics.index');
    Route::get('nationalities', NationalityIndex::class)->name('nationalities.index');
    Route::get('networks', NetworkIndex::class)->name('networks.index');
    // 
    Route::get('orders', OrderIndex::class)->name('orders.index');
    Route::get('orderDetail/{orderID}', OrderDetail::class)->name('orderDetail.index');
    // Route::get('orderDetail/{orderID}/cancel', [OrderDetail::class, 'cancel']);
	// Route::put('orderDetail/cancel/{orderID}', [OrderDetail::class, 'doCancel']);
	// Route::post('orderDetail/complete/{orderID}', [OrderDetail::class, 'doComplete']);
    // 
    Route::get('permissions', PermissionIndex::class)->name('permissions.index');
    Route::get('persons', PersonIndex::class)->name('persons.index');
    Route::get('podcasts', PodcastIndex::class)->name('podcasts.index');
    Route::get('polls', PollIndex::class)->name('polls.index');
    Route::get('polls/{pollID}/options', OptionIndex::class)->name('options.index');
    Route::get('posts', PostIndex::class)->name('posts.index');
    Route::get('products', ProductIndex::class)->name('products.index');
    Route::get('product-slide', ProductSliderIndex::class)->name('product-slider.index');
    Route::get('product-review', ProductReviewIndex::class)->name('product-review.index');
    Route::get('quotes', QuoteIndex::class)->name('quotes.index');
    Route::get('rate-types', RateTypeIndex::class)->name('rate-types.index');
    Route::get('reports', ReportIndex::class)->name('reports.index');
    Route::get('roles', RoleIndex::class)->name('roles.index');
    Route::get('seasons', SeasonIndex::class)->name('seasons.index');
    Route::get('series', SerieIndex::class)->name('series.index');
    Route::get('settings', SettingIndex::class)->name('settings.index');

    Route::get('shipments', ShipmentIndex::class)->name('shipments.index');
    Route::get('shipmentDetail/{shipmentID}', ShipmentDetail::class)->name('shipmentDetail.index');

    Route::get('slides', SlideIndex::class)->name('slides.index');
    Route::get('subscribers', SubscribeIndex::class)->name('subscribers.index');
    Route::get('tags', TagIndex::class)->name('tags.index');
    Route::get('users', UserIndex::class)->name('users.index');

    Route::get('series/{serie}/seasons', SeasonIndex::class)->name('seasons.index');
    Route::get('series/{serie}/seasons/{season}/episodes', EpisodeIndex::class)->name('episodes.index');

    Route::get('select', Select2::class);
    Route::get('votes', Vote::class)->name('votes.index');

});

Route::get('/getevent', [FullCalendarController::class, 'getEvent'])->name('getevent');

// Subscribe & unsubscribe
Route::get('/unsubscribe', [SubscribersController::class, 'destroy'])->name('public.subscriber.destroy');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    
    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

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
    Route::get('/hs', [DashboardController::class, 'hasMake']);
    Route::get('/portrait', Portrait::class);
});

// CKEDITOR IMAGE STORE
Route::post('ckeditor', [CkeditorFileUploadController::class, 'store'])->name('ckeditor.upload');