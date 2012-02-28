<?php

namespace schweb\datatables\plugins;

use fuu\template\helper\jquery\datatables\Datatables,
    fuu\template\helper\jquery\datatables\PluginInterface;

class RowSelect implements PluginInterface {
    
    /* ______________________________________________________________________ */
    
	public function apply(Datatables $table) {
        $table->callback('
        $(".dataTables_wrapper table tbody tr").each(function() {
            $(this).click(function() {
                chk = $(this).children("td").find("input[type=checkbox]:first");
                if($(this).hasClass("row-selected")) {
                    $(this).removeClass("row-selected");
                    chk.attr("checked",false)
                } else {
                    $(this).addClass("row-selected");
                    chk.attr("checked",true)
                }
            })
        });
        ');
	}
}