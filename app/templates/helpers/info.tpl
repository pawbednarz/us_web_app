{if (!$messages->is_info_empty())}
    <h4>Komunikat</h4>
    <ul class="alt info">
        {foreach $messages->get_info() as $msg}
            <li>{$msg}</li>
        {/foreach}
    </ul>
{/if}
