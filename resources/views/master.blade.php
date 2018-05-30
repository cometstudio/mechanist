<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css?rand={{ rand(0,10000) }}" />
        <title>Title</title>
    </head>
    <body>

    <div class="header-section full grid-container">
        <div class="grid-container">
            <a href="/" class="logo logo--big">Xxxx</a>
        </div>
    </div>

    <div class="banner-section grid-container grid-container--margin-y">
        <div class="banner-section__content">
            <div class="grid-x grid-margin-x grid-padding-x grid-padding-y align-bottom">
                <div class="cell medium-4 medium-offset-2">
                    <div class="banner-section__content__text">
                        <span>Line 1</span>
                        <span>Line 2</span>
                    </div>
                </div>
                <div class="cell medium-4">
                    <a href="" class="success button">Signup</a> or <a href="" class="success button">Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Forum -->

    <div class="label-section grid-container grid-container--margin-y grid-container--padding-x">
        <div class="grid-x grid-margin-x align-bottom">
            <div class="cell medium-6">
                <div class="label-section__name">
                    Forum
                </div>
            </div>
            <div class="cell medium-6">
                <div class="label-section__details"><span>3</span> threads, <span>12</span> topics, <span>452</span> posts</div>
            </div>
        </div>
    </div>

    <div class="thread-section grid-container grid-container--margin-y">
            @for($i=0;$i<3;$i++)
                <div class="thread-section__card">
                    <div class="grid-x grid-margin-x grid-margin-y">
                        <div class="cell medium-6">
                            <div class="thread-section__card__name">
                                <a href="" class="a--alert">Thread name</a>
                            </div>
                            <div class="thread-section__card__description">
                                The discussion about something interesting
                            </div>
                        </div>
                        <div class="cell medium-6">
                            <div class="thread-section__card__updated">
                                Last post was made 30 minutes ago by <a href="" class="a--alert">Motherfucker</a>
                            </div>
                            <div class="thread-section__card__created">
                                Started on 12 Feb 2018
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
    </div>

    <!-- Gallery -->

    <div class="label-section grid-container grid-container--margin-y grid-container--padding-x">
        <div class="grid-x grid-margin-x align-bottom">
            <div class="cell medium-6">
                <div class="label-section__name">
                    Gallery
                </div>
            </div>
            <div class="cell medium-6">
                <div class="label-section__details"><span>124</span> images. <a href="" class="a--alert">Add your image</a></div>
            </div>
        </div>
    </div>

    <div class="gallery-section grid-container grid-container--margin-y">
        <div class="grid-x grid-margin-x grid-margin-y">
            @for($i=0;$i<4;$i++)
                <div class="cell medium-6 large-3">
                    <div class="gallery-section__card">1</div>
                </div>
            @endfor
        </div>
    </div>

    </body>
</html>
