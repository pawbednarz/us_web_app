{extends file="main.tpl"}

{block name=content}
    {if isset($history_data) && count($history_data) > 0}
        <table>
            <thead>
                <td>Data</td>
                <td>Kwota</td>
                <td>Lata</td>
                <td>Oprocentowanie</td>
                <td>Miesięczna rata</td>
            </thead>
            <tbody>
                {foreach $history_data as $row}
                    <tr>
                        <td>{$row["date"]}</td>
                        <td>{$row["amount"]}</td>
                        <td>{$row["years"]}</td>
                        <td>{$row["percentage"]}</td>
                        <td>{$row["result"]}</td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    {/if}
{/block}
