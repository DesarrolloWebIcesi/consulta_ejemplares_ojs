/* Author: David Andrés Manzano Herrera - damanzano

*/
jQuery(document).on("ready",function(){
    searchJournal();     
});

function searchJournal(){
    jQuery.ajax({
        type : 'GET',
        url : 'control/JournalControl.php',        
        data: {
            journal : journal            
        },
        success : function(journal){
            jQuery("#journal").html(journal);
            pageTreeview();
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) {
            mensaje = "Estado: " + XMLHttpRequest.status + "<br/>" + textStatus + "<br/>Error: " + errorThrown;
            alert(mensaje);
        }
  
    });    
}

function pageTreeview(){
    $("#journal").treeview({
        animated: "fast",
        collapsed: treeCollapsed,
        control: "#treecontrol"
    }); 
}





