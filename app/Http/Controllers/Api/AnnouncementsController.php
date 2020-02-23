<?php

namespace App\Http\Controllers\Api;

use App\Announcement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the Announcement.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Announcement::latest()->get();
    }

    /**
     * Store a newly created Announcement in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'body' => 'max:500',
        ]);

        return Announcement::create($request->only(['name', 'body']));
    }

    /**
     * Display the specified Announcement.
     *
     * @param  \App\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        return $announcement;
    }

    /**
     * Update the specified Announcement in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {
        $request->validate([
            'name' => 'required|string',
            'body' => 'max:500',
        ]);

        $announcement->update($request->only(['name', 'body']));
        return $announcement;
    }

    /**
     * Remove the specified Announcement from storage.
     *
     * @param  \App\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        return $announcement->delete();
    }
}
