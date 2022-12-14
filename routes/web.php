<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'landing'])->name('landing');
Route::get('apply', [PageController::class, 'apply'])->name('apply');
Route::get('confidentiality', [PageController::class, 'confidentiality'])->name('confidentiality');
Route::get('faq', [PageController::class, 'faq'])->name('faq');
Route::get('insights', [PageController::class, 'insights'])->name('insights');
Route::get('publications', [PageController::class, 'publications'])->name('publications');
Route::get('services', [PageController::class, 'services'])->name('services');
Route::get('team', [PageController::class, 'team'])->name('team');


Route::group(['prefix' => 'blog'], function() {
    Route::get('which-thought-leadership-content-works', [BlogController::class, 'whichThoughtLeadershipContentWorks'])->name('blog-1');
    Route::get('how-to-master-thought-leadership-in-2023', [BlogController::class, 'howToMasterThoughtLeadershipIn2023'])->name('blog-2');
    Route::get('leadership-lessons-from-notable-thought-leaders', [BlogController::class, 'leadershipLessonsFromNotableThoughtLeaders'])->name('blog-3');
});

Route::group(['prefix' => 'article'], function() {
    Route::get('why-storytelling-is-important-to-brand-strategy', [ArticleController::class, 'whyStorytellingIsImportantToBrandStrategy'])->name('article-1');
    Route::get('brand-trust-should-be-a-priority-in-your-strategy', [ArticleController::class, 'brandTrustShouldBeAPriorityInYourStrategy'])->name('article-2');
    Route::get('how-content-marketing-can-support-thought-leadership', [ArticleController::class, 'howContentMarketingCanSupportThoughtLeadership'])->name('article-3');
});