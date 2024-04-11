<?php

class View
{
    function generate($content_view, $template_view = null, $data = null)
    {
        if(is_array($data))
        {
            extract($data);
        }

        if(isset($template_view))
        {
            include 'app/views/'. $template_view;
        }
        else
        {
            include 'app/views/'. $content_view;
        }
    }
}