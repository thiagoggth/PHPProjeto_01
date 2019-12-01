function deleteEmail(id){
    if(confirm('are you sure?')){
        $.ajax({
            type:'post',
            url:include_path_painel+'ajax/deleteEmail.php',
            data:{delete_id:id},
            success:function(data){
                $('#delete_'+id).hide();
            }
        });
    }    
}