QTags.addButton('gtsd-button-one', 'U', '<u>','</u>');
QTags.addButton('gtsd-button-two', 'JS', qtsd_button_two);
QTags.addButton('gtsd-button-three', 'FA', qtsd_fap_preview);

function qtsd_button_two(){
    var name = prompt('What is your name?');
    var text = "Hello "+name;
    QTags.insertContent(text);
}

function qtsd_fap_preview(){
    tb_show('Fontawesome', gtsd.preview);
}

function insertFA(icon){
    tb_remove();
    QTags.insertContent('<i class="fa '+icon+'"></i>');
}
