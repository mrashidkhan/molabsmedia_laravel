<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function videoproduction()
    {
        $pageClass = 'page-banner-videoproduction';
        $pagetitle = 'Video Production';

        return view('pages.videoproduction', compact('pageClass', 'pagetitle'));

    }

    public function events()
    {
        $pageClass = 'page-banner-events';
        $pagetitle = 'Events';

        return view('pages.events', compact('pageClass', 'pagetitle'));
    }

    public function creativewriting()
    {
        $pageClass = 'page-banner-creativewriting';
        $pagetitle = 'Creative Writing';

        return view('pages.creativewriting', compact('pageClass', 'pagetitle'));
    }

    public function contentwriting()
    {
        $pageClass = 'page-banner-contentwriting';
        $pagetitle = 'Content Writing';

        return view('pages.contentwriting', compact('pageClass', 'pagetitle'));

    }

    public function webdesign()
    {
        $pageClass = 'page-banner-webdesign';
        $pagetitle = 'Web Design';

        return view('pages.webdesign', compact('pageClass', 'pagetitle'));

    }

    public function graphicsdesign()
    {
        $pageClass = 'page-banner-graphicsdesign';
        $pagetitle = 'Graphics Design';

        return view('pages.graphicsdesign', compact('pageClass', 'pagetitle'));

    }

    public function staffing()
    {
        $pageClass = 'page-banner-staffing';
        $pagetitle = 'Staffing';

        return view('pages.staffing', compact('pageClass', 'pagetitle'));

    }


}
