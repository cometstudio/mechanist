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
            <a href="/" class="logo logo--big">Механист</a>
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
                    <div class="grid-x grid-margin-x grid-margin-y medium-margin-collapse">
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
                    <div class="gallery-section__card">
                        <div class="gallery-section__card__image"></div>
                        <div class="gallery-section__card__info">
                            <div class="gallery-section__card__info__name">
                                <a href="" class="a--alert">Модель самолёта ИЛ-86</a>
                            </div>
                            <div class="user__card">
                                <div class="grid-x">
                                    <div class="cell shrink">
                                        1
                                    </div>
                                    <div class="cell auto">2</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    </body>
</html>
