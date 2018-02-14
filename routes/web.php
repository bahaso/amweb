<?php

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

Route::group(
	[
		'namespace' => 'Front',
		'as'		=> 'f.',
	],
	function()
	{
		Route::get( '/', 'HomeController@index' )->name( 'home' );

		Route::get( 'post/{id?}/{slug?}', 'PostController@index')->name( 'posts.index');

		/**
		 * DISCOVERS
		 */
		Route::get( 'discovers/indonesia-in-brief', 'DiscoverController@indonesia' )->name( 'discovers.indonesia' );
		Route::get( 'discovers/main-destination', 'DiscoverController@destination' )->name( 'discovers.destination' );
		Route::get( 'discovers/bali', 'DiscoverController@bali' )->name( 'discovers.bali' );

		Route::get( 'discovers/wonderful-indonesia', 'DiscoverController@wonderful_indonesia' )->name( 'discovers.wonderful_indonesia' );

		Route::get( 'discovers/tourism-package', 'DiscoverController@tourism' )->name( 'discovers.tourism' );
		Route::get( 'discovers/tourism-package/list/{location}/{date?}/{people?}', 'DiscoverController@tourism_list' )->name( 'discovers.tourism_list' );
		Route::get( 'discovers/tourism-package/show/{location}/{slug}', 'DiscoverController@tourism_detail' )->name( 'discovers.tourism_detail' );
		
		/**
		 * FAQS
		 */
		// Route::get( 'faq', 'FaqController@index' )->name( 'faqs.index' );

		/**
		 * TRAVEL INFORMATION
		 */
		Route::get( 'travel/indonesia-in-brief', 'TravelController@indonesia' )->name( 'travels.indonesia' );
		Route::get( 'travel/{id}/{slug?}', 'TravelController@detail' )->name( 'travels.detail' );
		/**
		 * MEDIA
		 */
		Route::get( 'news', 'NewsController@index' )->name( 'news.index' );
		Route::get( 'news/{id}/{slug}', 'NewsController@detail' )->name( 'news.detail' );
		Route::get( 'publications', 'PublicationController@index' )->name( 'publications.index' );
		Route::get( 'publications/{id}/{slug}', 'PublicationController@detail' )->name( 'publications.detail' );
		Route::get( 'press-releases', 'PressReleaseController@index' )->name( 'press-releases.index' );
		Route::get( 'press-releases/{id}/{slug}', 'PressReleaseController@detail' )->name( 'press-releases.detail' );

		Route::get( 'indonesia-updates', 'IndonesiaUpdatesController@index' )->name( 'indonesia_updates.index' );
		Route::get( 'indonesia-updates/{id}/{slug}', 'IndonesiaUpdatesController@detail' )->name( 'indonesia_updates.detail' );

		/**
		 * GALLERY
		 */
		Route::get( 'galleries', 'GalleryController@index' )->name( 'galleries.index' );
		Route::get( 'gallery/{id}/{slug}', 'GalleryController@detail' )->name( 'galleries.detail' );

		/**
		 * ABOUTS
		 */
		Route::get( 'abouts/vti', 'AboutController@vti' )->name( 'abouts.vti' );
		Route::get( 'abouts/imf', 'AboutController@imf' )->name( 'abouts.imf' );
		Route::get( 'abouts/imf-world-bank', 'AboutController@imfWorldBank' )->name( 'abouts.imf_world_bank' );
		Route::get( 'abouts/world-bank', 'AboutController@worldBank' )->name( 'abouts.world_bank' );
		Route::get( 'abouts/am2018', 'AboutController@index' )->name( 'abouts.index' );


		Route::get( 'abouts/faq', 'AboutController@faq' )->name( 'abouts.faq' );

		Route::get( 'abouts/{id}/{slug?}', 'AboutController@detail' )->name( 'abouts.detail' );
		/**
		 * EVENTS
		 */
		Route::get( 'events/{id}/{slug?}', 'EventController@detail' )->name( 'events.detail' );

		Route::get( 'events', 'EventController@index' )->name( 'events.index' );
		Route::get( 'events/program-vti', 'EventController@programVTI' )->name( 'events.program_vti' );
		Route::get( 'events/past-vti', 'EventController@pastVTI' )->name( 'events.past_vti' );
		Route::get( 'events/upcoming-vti', 'EventController@upcomingVTI' )->name( 'events.upcoming_vti' );
		Route::get( 'events/bank-indonesia', 'EventController@bank' )->name( 'events.bank' );
		Route::get( 'events/ministry-of-finance', 'EventController@ministry' )->name( 'events.ministry' );
		Route::get( 'events/main', 'EventController@mainEvents' )->name( 'events.main' );
		Route::get( 'events/side', 'EventController@sideEvents' )->name( 'events.side' );

		/**
		 * EXHIBITIONS
		 */
		Route::get( 'exhibition', 'ExhibitionController@detail' )->name( 'exhibitions.detail' );
		Route::get( 'exhibition/seminar', 'ExhibitionController@seminar' )->name( 'exhibitions.seminar' );

		/**
		 * WELCOME TO INDONESIA
		 */
		Route::get( 'welcome-to-indonesia/visa', 'WelcomeController@visa' )->name( 'welcomes.visa' );
		Route::get( 'welcome-to-indonesia/free-tourism-visa', 'WelcomeController@tourism' )->name( 'welcomes.tourism' );
		Route::get( 'welcome-to-indonesia/customs', 'WelcomeController@customs' )->name( 'welcomes.customs' );
		Route::get( 'welcome-to-indonesia/travel-tips', 'WelcomeController@tips' )->name( 'welcomes.tips' );
		/**
		 * INFORMATIONS
		 */
		Route::get( 'information/hotel', 'InformationController@hotel' )->name( 'informations.hotel' );
		Route::get( 'information/transportation', 'InformationController@transportation' )->name( 'informations.transportation' );
		Route::get( 'information/other-facilities', 'InformationController@facilities' )->name( 'informations.facilities' );
		Route::get( 'information/weather', 'InformationController@weather' )->name( 'informations.weather' );
		/**
		 * FOR DUMMY PAGE
		 */
		Route::get( 'pages/{navigation}/{slug}', 'PageController@index' )->name( 'pages.index' );

		Route::get( 'pages/registration/Registration', 'PageController@index' )->name( 'registration.index' );
		Route::get( 'pages/discover-indonesia/indonesia-in-brief', 'PageController@index' )->name( 'discover.index' );
		Route::get( 'pages/media-and-public/gallery', 'PageController@index' )->name( 'media.index' );
		Route::get( 'pages/information/hotel', 'PageController@index' )->name( 'information.index' );
		Route::get( 'pages/coming-to-indonesia/visa', 'PageController@index' )->name( 'coming.index' );


		Route::get( 'pages/no-images', 'PageController@noImages' )->name( 'pages.dummies.no_images' );
		Route::get( 'pages/one-image', 'PageController@oneImage' )->name( 'pages.dummies.one_image' );
		Route::get( 'pages/full-image', 'PageController@fullImage' )->name( 'pages.dummies.full_image' );
		Route::get( 'pages/multiple-images', 'PageController@multipleImages' )->name( 'pages.dummies.multiple_images' );
		Route::get( 'pages/subheading', 'PageController@subheading' )->name( 'pages.dummies.subheading' );
		Route::get( 'pages/calendars', 'PageController@calendars' )->name( 'pages.dummies.calendars' );

		/**
         * MAPS
         */
		Route::get( 'maps', 'MapsController@index' )->name( 'maps.index' );
	});
