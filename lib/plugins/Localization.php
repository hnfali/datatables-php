<?php

namespace datatables\plugins;

use datatables\Datatables,
    datatables\PluginInterface;

class Localization implements PluginInterface {
    
    /* ______________________________________________________________________ */
    
    public function apply(Datatables $table) {
        $table->setTranslationArray(array(
            "sZeroRecords"    => "<div class='notice'><p align='center'>No results matches.</p></div>",
            "sInfo"           => "",
            "sSearch"         => "Search: _INPUT_",
            "sInfoEmpty"      => "",
            "sInfoFiltered"   => "",
            "sLoadingRecords" => "Loading...",
            "sProcessing"     => "Loading...",
            "sLengthMenu"     => "
<select>
    <option value='10'>10</option>
    <option value='20'>20</option>
    <option value='50'>50</option>
    <option value='100'>100</option>
    <option value='-1'>All</option>
</select>
            ",
        ));
    }
}