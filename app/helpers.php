<?php

if (! function_exists('acelords_links'))
{
    /**
     * Get AceLords Links
     */
    function acelords_links()
    {
        $products = collect([
            [
                'label' => 'Main Website',
                'link' => 'https://acelords.space'
            ],
            [
                'label' => 'AceLords Store',
                'link' => 'https://store.acelords.space'
            ],
            [
                'label' => 'Project Pegasus',
                'link' => 'https://project-pegasus.acelords.space'
            ],
            [
                'label' => 'AceLords Skeleton',
                'link' => 'https://skeleton.acelords.space'
            ],
            [
                'label' => 'AceLords Livewire Skeleton',
                'link' => 'https://livewire-skeleton.acelords.space'
            ],
            [
                'label' => 'Icon Library',
                'link' => 'https://icons.acelords.space'
            ],
            [
                'label' => 'Messenger (Laravel Package)',
                'link' => 'https://github.com/lexxyungcarter/laravel-5-messenger'
            ],
            [
                'label' => 'Flutter Starter-Kit',
                'link' => 'https://github.com/acelords/flutter-starter-kit'
            ],
            [
                'label' => 'Invoicing WebApp',
                'link' => 'https://github.com/acelords/invoicing-webapp'
            ]
        ]);

        return $products;
    }
}


if (! function_exists('acelords_socials'))
{
    /**
     * Get AceLords Social Links
     */
    function acelords_socials()
    {
        $links = collect([
            [
                'label' => 'Github',
                'link' => 'https://github.com/acelords'
            ],
            [
                'label' => 'Instagram',
                'link' => 'https://instagram.com/acelords'
            ],
            [
                'label' => 'Facebook',
                'link' => 'https://facebook.com/acelords.space'
            ],
            [
                'label' => 'Twitter',
                'link' => 'https://twitter.com/acelords'
            ],
        ]);

        return $links;
    }
}


if (! function_exists('acelords_support_links'))
{
    /**
     * Get AceLords support Links
     */
    function acelords_support_links()
    {
        $links = collect([
            [
                'label' => 'Patreon',
                'link' => 'https://patreon.com/lexxyungcarter'
            ],
            [
                'label' => 'Ko-Fi',
                'link' => 'https://ko-fi.com/acelords'
            ],
            [
                'label' => 'MarketPlace',
                'link' => 'https://store.acelords.space'
            ],
        ]);

        return $links;
    }
}
