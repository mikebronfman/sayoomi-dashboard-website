<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 

    <head> 
        <title>{$title}</title> 
        <meta http-equiv="content-type" content="application/xhtml+xml;charset=utf-8" />
        {link_tag('assets/css/master.css')}
        <noscript>{link_tag('assets/css/mobile.min.css')}</noscript>
        {link_tag('assets/css/start/jquery-ui-1.10.3.custom.css')}
        {link_tag('assets/css/bootstrap.css')}
        {link_tag('assets/css/styles.css')}        
        <style type="text/css">
            {literal}
                .error {background-color: #ff0; color: #c00;}
                .message {background-color: #fff; color: #0c0;}
            {/literal}
        </style>
        <script>
            // Edit to suit your needs.
            {literal}
                var ADAPT_CONFIG = {
                    // Where is your CSS?
                    path: 'assets/css/',
                    // false = Only run once, when page first loads.
                    // true = Change on window resize and page tilt.
                    dynamic: true,
                    // First range entry is the minimum.
                    // Last range entry is the maximum.
                    // Separate ranges by "to" keyword.
                    range: [
                        '0px    to 760px  = mobile.min.css',
                        '760px  to 980px  = 720.min.css',
                        '980px  to 1280px = 960.min.css',
                        '1280px to 1600px = 1200.min.css',
                        '1600px to 1940px = 1560.min.css',
                        '1940px to 2540px = 1920.min.css',
                        '2540px           = 2520.min.css'
                    ]
                };
            {/literal}
        </script>
        {script_tag('assets/js/adapt.min.js')}
        {script_tag('assets/js/jquery-1.9.1.js')}
        {script_tag('assets/js/jquery-ui-1.10.3.custom.js')}
        {script_tag('assets/js/bootstrap.js')}
    </head> 
    <body>
        <div id="l-top">
            <div class="l-container">
                {if !isset($hide_logo)}
                    <!-- LOGO START -->
                    <div class="span-6" id="l-logo">
                        <a href="/">Oomi Inc.</a>
                    </div>
                    <!-- LOGO END -->
                {/if}
                <div id="l-nav">
                    <div id="l-nav-inner">
                        <ol class="nnav">
                            {if isset($username)}
                                <li>    
                                    Welcome, {$username}.  
                                </li>
                                <li>
                                    <a href="/dashboard">Go to your Dashboard</a>
                                </li>
                                <li>
                                    <a href="/account/logout">Logout</a>
                                </li>
                            {else}
                                <li>
                                    <a href="/signin" rel="nofollow">Sign in</a>
                                </li>
                            {/if}
                        </ol>
                    </div>
                </div>
            </div>
        </div>