function StatusSelect(){
    var selected = $('#specialist');
    if(selected.val() == 'врач'){
        $('#maindoc').hide();
        $('#doc').show();
    };
    if(selected.val() == 'завотделением'){
        $('#maindoc').show();
        $('#doc').hide();
    };
};

function Naprav() {
    var selected = $('#referral');
    if(selected.val() == 'no') {
        window.location.href = "/index.php?option=com_content&view=article&id=402&Itemid=76";
    }
}