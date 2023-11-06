<?php
function hero_contents(): array
{
    return [
        [
            "background_image" => "hero-1.jpg",
            "title" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
            "description" => "Feugiat nibh sed pulvinar proin gravida hendrerit lectus. Urna condimentum mattis pellentesque id nibh. Posuere ac ut consequat semper viverra nam. Vitae suscipit tellus mauris a diam maecenas sed.",
            "buttons" => [
                [
                    "url" => "#about",
                    "title" => "About Us"
                ],
                [
                    "url" => "#contact",
                    "title" => "Contact Us"
                ]
            ]
        ],
        [
            "background_image" => "hero-2.jpg",
            "title" => "Dui vivamus arcu felis bibendum ut tristique et",
            "description" => "Purus in massa tempor nec feugiat nisl. Malesuada fames ac turpis egestas integer eget aliquet Eget lorem dolor sed viverra.",
            "buttons" => [
                [
                    "url" => "#features",
                    "title" => "View Features"
                ]
            ]
        ]
    ];
}

function about_contents(): array
{
    return [
        [
            "image" => "who-are-we.jpg",
            "sub_heading" => "who are we",
            "heading" => "Elementum nisi quis eleifend quam adipiscing vitae proin",
            "description" => "Sodales ut eu sem integer vitae justo. Iaculis nunc sed augue lacus viverra vitae congue. Odio pellentesque diam volutpat commodo sed. Sed viverra ipsum nunc aliquet. Aliquet risus feugiat in ante metus dictum at tempor. Sit amet porttitor eget dolor morbi non. Auctor augue mauris augue neque. Cras adipiscing enim eu turpis egestas pretium aenean pharetra. Nam libero justo laoreet sit amet cursus sit amet dictum. Molestie a iaculis at erat pellentesque adipiscing commodo elit. Ornare massa eget egestas purus viverra. In arcu cursus euismod quis viverra nibh."
        ],
        [
            "image" => "history.jpg",
            "sub_heading" => "our history",
            "heading" => "Semper feugiat nibh sed pulvinar proin gravida hendrerit lectus a",
            "description" => "Faucibus in ornare quam viverra. Sit amet venenatis urna cursus eget nunc. Tempor nec feugiat nisl pretium fusce. Massa sed elementum tempus egestas sed. Lorem ipsum dolor sit amet. Est ullamcorper eget nulla facilisi etiam dignissim diam quis. Pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Id donec ultrices tincidunt arcu non sodales neque sodales ut. Nulla facilisi cras fermentum odio. Enim eu turpis egestas pretium aenean pharetra magna ac placerat. Urna molestie at elementum eu facilisis sed odio. Sed viverra ipsum nunc aliquet bibendum."
        ]
    ];
}

function features_contents(): array
{
    return [
        [
            "image" => "",
            "heading" => "Condimentum id venenatis a condimentum",
            "description" => "Faucibus in ornare quam viverra. Sit amet venenatis urna cursus eget nunc. Tempor nec feugiat nisl pretium fusce. Massa sed elementum tempus egestas sed. Lorem ipsum dolor sit amet."
        ],
        [
            "image" => "",
            "heading" => "Pharetra magna ac placerat vestibulum lectus mauris ultrices eros",
            "description" => "Id donec ultrices tincidunt arcu non sodales neque sodales ut. Nulla facilisi cras fermentum odio. Enim eu turpis egestas pretium aenean pharetra magna ac placerat."
        ],
        [
            "image" => "",
            "heading" => "Urna molestie at elementum eu facilisis sed odio",
            "description" => "Aliquet risus feugiat in ante. Sodales neque sodales ut etiam sit amet. Convallis tellus id interdum velit laoreet id donec. Proin nibh nisl condimentum id venenatis a."
        ],
        [
            "image" => "",
            "heading" => "Sed adipiscing diam donec adipiscing tristique risus",
            "description" => "Quis ipsum suspendisse ultrices gravida dictum fusce ut placerat. Etiam tempor orci eu lobortis elementum nibh tellus. Vitae tortor condimentum lacinia quis vel eros donec ac odio."
        ],
        [
            "image" => "",
            "heading" => "In fermentum posuere urna nec",
            "description" => "Dorem sed risus ultricies tristique nulla. In massa tempor nec feugiat nisl pretium. Vitae congue eu consequat ac felis. Neque volutpat ac tincidunt vitae. Nisl nisi scelerisque eu ultrices."
        ],
        [
            "image" => "",
            "heading" => "Sed vulputate odio ut enim blandit volutpat maecenas",
            "description" => "Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Tortor id aliquet lectus proin. Tortor at risus viverra adipiscing at in. Amet luctus venenatis lectus magna fringilla urna."
        ]
    ];
}

function socials(): array
{
    return [
        [
            "icon" => '<i class="fa-brands fa-facebook"></i>',
            "link" => "https://facebook.com"
        ],
        [
            "icon" => '<i class="fa-brands fa-twitter"></i>',
            "link" => "https://twitter.com"
        ],
        [
            "icon" => '<i class="fa-brands fa-instagram"></i>',
            "link" => "https://instagram.com"
        ],
        [
            "icon" => '<i class="fa-brands fa-youtube"></i>',
            "link" => "https://youtube.com"
        ],
        [
            "icon" => '<i class="fa-brands fa-spotify"></i>',
            "link" => "https://spotify.com"
        ],
    ];
}

function get_image( string $image ): string
{
    return "/assets/images/{$image}";
}