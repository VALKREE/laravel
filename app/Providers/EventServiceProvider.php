<?php

namespace App\Providers;

use App\Events\UserLastLoginEvent;
use App\Listeners\UserLastLoginListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use SocialiteProviders\Manager\SocialiteWasCalled;
use SocialiteProviders\VKontakte\VKontakteExtendSocialite;
use SocialiteProviders\GitHub\GitHubExtendSocialite;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        UserLastLoginEvent::class => [
            UserLastLoginListener::class
        ],

        SocialiteWasCalled::class => [
            // ... other providers
            VKontakteExtendSocialite::class.'@handle',
            GitHubExtendSocialite::class.'@handle',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
