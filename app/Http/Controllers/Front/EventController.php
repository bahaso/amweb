<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;

class EventController extends BaseController
{
    public function index()
    {

        //sponsors
        $sponsors = Sponsor::get();
        $sponsor_img = [];
        foreach( $sponsors as $s )
        {
            $sponsor_img[$s->id] = $s->file( 'img_sponsor' )->first()->original();
        }

        $data = compact( 'sponsors', 'sponsor_img' );

        return $this->output('events.index', $data);
    }

    public function detail( $id, $slug=null )
    {
        $curr_article = Post::find( $id );

        //set side bar navigation and child
        $side_nav = Post::whereCategoryType('events')
            ->whereParentId(NULL)
            ->get();

        $side_nav_child = [];

        foreach( $side_nav as $sn )
        {
            $side_nav_child[ $sn->id ] = Post::whereParentId( $sn->id )->get();
        }

        $data = compact( 
            'curr_article', 
            'side_nav',
            'side_nav_child'
        );

        return $this->output('events.detail', $data);
    }

    public function programVTI()
    {
        //sponsors
        $sponsors = Sponsor::get();
        $sponsor_img = [];
        foreach( $sponsors as $s )
        {
            $sponsor_img[$s->id] = $s->file( 'img_sponsor' )->first()->original();
        }

        $data = compact( 'sponsors', 'sponsor_img' );

        return $this->output('events.program-vti', $data);
    }

    public function upcomingVTI()
    {
        //sponsors
        $sponsors = Sponsor::get();
        $sponsor_img = [];
        foreach( $sponsors as $s )
        {
            $sponsor_img[$s->id] = $s->file( 'img_sponsor' )->first()->original();
        }

        $data = compact( 'sponsors', 'sponsor_img' );

        return $this->output('events.upcoming-vti', $data);
    }

    public function pastVTI()
    {
        //sponsors
        $sponsors = Sponsor::get();
        $sponsor_img = [];
        foreach( $sponsors as $s )
        {
            $sponsor_img[$s->id] = $s->file( 'img_sponsor' )->first()->original();
        }

        $data = compact( 'sponsors', 'sponsor_img' );

        return $this->output('events.past-vti', $data);
    }

    public function bank()
    {
        return $this->output('events.bank');
    }

    public function ministry()
    {
        return $this->output('events.ministry');
    }

    public function mainEvents()
    {
        //sponsors
        $sponsors = Sponsor::get();
        $sponsor_img = [];
        foreach( $sponsors as $s )
        {
            $sponsor_img[$s->id] = $s->file( 'img_sponsor' )->first()->original();
        }

        $data = compact( 'sponsors', 'sponsor_img' );

        return $this->output('events.main-events', $data);
    }

    public function sideEvents()
    {
        //sponsors
        $sponsors = Sponsor::get();
        $sponsor_img = [];
        foreach( $sponsors as $s )
        {
            $sponsor_img[$s->id] = $s->file( 'img_sponsor' )->first()->original();
        }

        $data = compact( 'sponsors', 'sponsor_img' );

        return $this->output('events.side-events', $data );
    }
}