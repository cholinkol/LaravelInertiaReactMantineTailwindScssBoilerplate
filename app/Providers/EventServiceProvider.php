<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
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

        /**
         * Add event listener for adminlte menu
         */
        Event::listen(BuildingMenu::class, static function (BuildingMenu $event) {
            // Update "label" option to Blog menu item
            $event->menu->add(// Navbar items:
                [
                    'type' => 'navbar-search',
                    'text' => 'search',
                    'topnav_right' => true,
                ],
                [
                    'type' => 'fullscreen-widget',
                    'topnav_right' => true,
                ],

                // Sidebar items:
                [
                    'type' => 'sidebar-menu-search',
                    'text' => 'search',
                ],
                [
                    'key' => 'blog',
                    'text' => 'Blog',
                    'url' => 'admin/blog',
                    'icon' => 'far fa-fw fa-file',
                    'label' => 5,
                    'label_color' => 'success',
                ],
                [
                    'key' => 'pages',
                    'text' => 'pages',
                    'url' => 'admin/pages',
                    'icon' => 'far fa-fw fa-file',
                    'label' => 4,
                    'label_color' => 'success',
                ],
                ['header' => 'account_settings'],
                [
                    'text' => 'profile',
                    'url' => 'admin/settings',
                    'icon' => 'fas fa-fw fa-user',
                ],
                [
                    'text' => 'change_password',
                    'url' => 'admin/settings',
                    'icon' => 'fas fa-fw fa-lock',
                ],
                [
                    'text' => 'multilevel',
                    'icon' => 'fas fa-fw fa-share',
                    'submenu' => [
                        [
                            'text' => 'level_one',
                            'url' => '#',
                        ],
                        [
                            'text' => 'level_one',
                            'url' => '#',
                            'submenu' => [
                                [
                                    'text' => 'level_two',
                                    'url' => '#',
                                ],
                                [
                                    'text' => 'level_two',
                                    'url' => '#',
                                    'submenu' => [
                                        [
                                            'text' => 'level_three',
                                            'url' => '#',
                                        ],
                                        [
                                            'text' => 'level_three',
                                            'url' => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            'text' => 'level_one',
                            'url' => '#',
                        ],
                    ],
                ],
                ['header' => 'labels'],
                [
                    'text' => 'important',
                    'icon_color' => 'red',
                    'url' => '#',
                ],
                [
                    'text' => 'warning',
                    'icon_color' => 'yellow',
                    'url' => '#',
                ],
                [
                    'text' => 'information',
                    'icon_color' => 'cyan',
                    'url' => '#',
                ]);


        });
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
