{foreach $echo as $out}
    Device found on {$out.ip}! <a href="#" class="device-found" data-ip="{$out.ip}" data-hw="{$out.MAC}">Click to add </a></br>
{/foreach}
{if count($echo) = 0 }
    Sorry, we were unable to find that device.
{/if}