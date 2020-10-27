<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body>
        <div id = "app">
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>

<li class="sub-menu-style2 sub-menu">
    <a data-scroll href="{Router::url('/', true)}{trim($item.url, '/')}">
        {if $item.img}
            <i><img src="{Router::url('/', true)}{$item.img}" alt="{$item.name}"></i>
        {/if}
        {if $item.icon}
            <i class="{$item.icon}"></i>
        {/if}
        {if !empty($item.name)}{$item.name}{/if}
    </a>
    {if !empty($item.children)}
        {assign var=count_data value=$item.children|@count}

        {assign var=max_item value=4}
        {if !empty($item.img)}
            {assign var=max_item value=3}
        {/if}

        <ul class="clearfix main_menu_mega">
            {foreach from = $item.children key = k_child item = child}
                {if $child.status eq "1"}
                    <li class="col-sm-3">
                       <a href="{Router::url('/', true)}{trim($child.url, '/')}">
                           {if $child.img}
                               <i><img width="24px" src="{Router::url('/', true)}{$child.img}" alt="{$child.name}" title="{$child.name}"></i>
                           {/if}
                           {if $child.icon}
                               <i class="{$child.icon}"></i>
                           {/if}
                            {if !empty($child.name)}{$child.name}{/if}
                        </a>
                        {if !empty($child.children)}
                            <ul class="clearfix">
                                {foreach from = $child.children item = child_mega}
                                    {if $child_mega.status eq "1"}
                                    <li>
                                        <a href="{Router::url('/', true)}{trim($child_mega.url, '/')}">
                                            {if !empty($child_mega.name)}{$child_mega.name}{/if}
                                        </a>
                                    </li>
                                    {/if}
                                {/foreach}
                            </ul>      
                        {/if}          
                    </li>
                {/if}
            {/foreach}
            {if !empty($item.img)}
                <li class="col-sm-3">
                    <a href="{Router::url('/', true)}{trim($item.url, '/')}" class="banner-sub-menu">
                        <div class="img-banner-sub">
                            <img src="{Router::url('/', true)}{$item.img}" class="col-md-12" alt="{if !empty($item.name)}{$item.name}{/if}">
                        </div>
                    </a>
                </li>
            {/if}
        </ul>

    {/if}
</li>