<?php

namespace Gan;

/**
 * Represents a bounce object.
 */
class Bounce extends Entity
{
    public $url;
    public $status;
    public $contact;
    public $contact_url;
    public $contact_active;
    public $description;
    public $created;
    public $error_type;
}
