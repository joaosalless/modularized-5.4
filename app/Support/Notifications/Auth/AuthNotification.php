<?php

namespace App\Support\Notifications\Auth;

use App\Support\Panels\PanelProperties;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Jenssegers\Agent\Agent;
use Torann\GeoIP\Facades\GeoIP;

abstract class AuthNotification extends Notification
{
    protected $geo;
    protected $agent;
    protected $panel;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        $this->agent  = new Agent();
        $this->geo    = GeoIP::getLocation();
        $this->appUrl = config('app.url');
        $this->panel  = new PanelProperties();
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [
            'mail',
        ];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        //
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    /**
     * Get device type.
     */
    public function getDevice()
    {
        if ($this->agent->device() == 'WebKit') {
            if ($this->agent->isDesktop()) {
                return 'Desktop';
            } elseif ($this->agent->isTablet()) {
                return 'Tablet';
            } elseif ($this->agent->isIpad()) {
                return 'iPad';
            } elseif ($this->agent->isIphone()) {
                return 'iPhone';
            } elseif ($this->agent->isAndroid()) {
                return 'Android';
            } elseif ($this->agent->isMobile()) {
                return 'Mobile';
            } else {
                return $this->agent->device();
            }
        }

        return $this->agent->device();
    }
}