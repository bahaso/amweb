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

		/**
		 * DISCOVERS
		 */
		Route::get( 'discovers/5-destinasi-pariwisata-indonesia', 'DiscoverController@indonesia' )->name( 'discovers.indonesia' );
		Route::get( 'discovers/11-destinasi-bali', 'DiscoverController@bali' )->name( 'discovers.bali' );

		/**
		 * FAQS
		 */
		Route::get( 'faq', 'FaqController@index' )->name( 'faqs.index' );

		/**
		 * GALLERY
		 */
		Route::get( 'gallery', 'GalleryController@detail' )->name( 'galleries.detail' );

		/**
		 * ABOUTS
		 */
		Route::get( 'abouts/vti', 'AboutController@vti' )->name( 'abouts.vti' );
		Route::get( 'abouts/imf', 'AboutController@imf' )->name( 'abouts.imf' );
		Route::get( 'abouts/imf-world-bank', 'AboutController@imfWorldBank' )->name( 'abouts.imf_world_bank' );
		Route::get( 'abouts/world-bank', 'AboutController@worldBank' )->name( 'abouts.world_bank' );
		Route::get( 'abouts/am2018', 'AboutController@am2018' )->name( 'abouts.am2018' );
		Route::get( 'abouts/program-vti', 'AboutController@programVTI' )->name( 'abouts.program_vti' );

		/**
		 * EVENTS
		 */
		Route::get( 'events', 'EventController@index' )->name( 'events.index' );
		Route::get( 'events/{id}/{slug}', 'EventController@detail' )->name( 'events.detail' );

		/**
		 * EXHIBITIONS
		 */
		Route::get( 'exhibition', 'ExhibitionController@detail' )->name( 'exhibitions.detail' );
		Route::get( 'exhibition/seminar', 'ExhibitionController@seminar' )->name( 'exhibitions.seminar' );

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
