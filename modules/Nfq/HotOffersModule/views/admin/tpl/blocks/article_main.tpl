[{$smarty.block.parent}]
<tr>
  <td class="edittext" width="120">
    [{ oxmultilang ident="ARTICLE_MAIN_HOTOFFER" }]
  </td>
  <td class="edittext">
    <input type="hidden" name="editval[oxarticles__nfq_is_hotoffer]" value="0">
    <input class="edittext" type="checkbox" name="editval[oxarticles__nfq_is_hotoffer]" value='1' [{if $edit->oxarticles__nfq_is_hotoffer->value == 1}]checked[{/if}] [{ $readonly }]>
  </td>
  </tr>