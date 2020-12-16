{if (!$messages->is_error_empty())}
    <h4>Bląd</h4>
    <ul class="alt error">
        {foreach $messages->get_errors() as $msg}
            <li>{$msg}</li>
        {/foreach}
    </ul>
{/if}
