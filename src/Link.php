<?php

namespace Gan;

/**
 * Represents a link object.
 */
class Link extends Entity
{
    public $id;
    public $url;
    public $link;
    public $unique_clicks;
    public $clicks_url;
    public $total_clicks;
    public $percent_of_total;
}
