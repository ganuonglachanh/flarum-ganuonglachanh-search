<?php namespace GaNuongLaChanh\Search;

use Flarum\Extend;
use GaNuongLaChanh\Search\Gambit\TitleGambit;
use Flarum\Discussion\Search\DiscussionSearcher;

return [
    (new Extend\SimpleFlarumSearch(DiscussionSearcher::class))
        ->setFullTextGambit(TitleGambit::class)
    ,
];