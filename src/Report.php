<?php

namespace Gan;

/**
 * Represents a report object.
 */
class Report extends Entity
{
    public $links_url;
    public $bounced_temporary;
    public $bounced_permanent;
    public $sender_email;
    public $unsubscribed_url;
    public $opens_url;
    public $receivers_who_clicked_24h;
    public $mail_subject;
    public $preview_url;
    public $mail_id;
    public $url;
    public $sendtime;
    public $sender_name;
    public $unique_html_clicks;
    public $receivers_who_clicked;
    public $get_view_online_link;
    public $bounces_url;
    public $mail_url;
    public $id;
    public $sent;
    public $sent_to_lists;
}
