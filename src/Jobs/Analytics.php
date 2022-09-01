<?php

/*
 * This file is part of SeAT
 *
 * Copyright (C) 2015 to 2022 Leon Jacobs
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

namespace Seat\Services\Jobs;

use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Seat\Services\AbstractSeatPlugin;
use Seat\Services\Helpers\AnalyticsContainer;
use Seat\Services\Settings\Seat;
use Seat\Services\Traits\VersionsManagementTrait;

/**
 * Class Analytics.
 *
 * @package Seat\Services\Jobs
 */
class Analytics implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels, VersionsManagementTrait;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 1;

    /**
     * @var \Seat\Services\Helpers\AnalyticsContainer
     */
    private $hit;

    /**
     * @var string
     */
    private $tracking_id = false;

    /**
     * @var bool
     */
    private $debug;

    /**
     * Create a new job instance.
     *
     * @param  \Seat\Services\Helpers\AnalyticsContainer  $hit
     * @param  bool  $debug
     */
    public function __construct(AnalyticsContainer $hit, $debug = false)
    {

        $this->hit = $hit;
        $this->debug = $debug;

    }

    /**
     * Execute the job, keeping in mind that if tracking
     * is disabled, nothing should be sent and the
     * job should just return.
     *
     * @return void
     *
     * @throws \Seat\Services\Exceptions\SettingException
     */
    public function handle()
    {
		return;
    }

    /**
     * Check if tracking is allowed.
     *
     * @return bool
     *
     * @throws \Seat\Services\Exceptions\SettingException
     */
    public function allowTracking()
    {
		return false;
    }

    /**
     * Send an 'event' type hit to GA.
     */
    public function sendEvent()
    {
		return;
    }

    /**
     * Send the GA Hit.
     *
     * @param  $type
     * @param  array  $query
     *
     * @throws \Seat\Services\Exceptions\SettingException
     */
    private function send($type, array $query)
    {
		return;
    }

    /**
     * Query the eveseat/resources repository for SDE
     * related information.
     *
     * @return mixed|string
     *
     * @throws \Seat\Services\Exceptions\SettingException
     */
    private function getClientID()
    {
        return 'fartbutts';

    }

    /**
     * Send an 'exception' type hit to GA.
     */
    public function sendException()
    {
		return;
    }
}
