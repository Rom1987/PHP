let fr = document.getElementById('form_record');
let fc = document.getElementById('form_car');
let fu = document.getElementById('form_user');

let func = function(e){
    let el = e.target || e.srcElement; 
    let qwe = el.form.getElementsByClassName('checkbox');
    for ( let i = 0; i < qwe.length; i++ ) {
        if ( el.checked ) {
            qwe[i].checked = true;
        } else {
            qwe[i].checked = false;
        }
    }
};

if ( fc ) {
    fc.cb_all.onchange = func;
}
if ( fr ) {
    fr.cb_all.onchange = func;
} 
if ( fu ) {
    fu.cb_all.onchange = func;
}

function form_record () {
    let checkList = document.querySelectorAll('#form_record .checkbox:checked');
    if ( checkList.length > 0 ) {
        let form = document.getElementById('form_record');
        form.action = 'form_tab_records.php';
        form.submit();
    }
}
function form_car () {
    let checkList = document.querySelectorAll('#form_car .checkbox:checked');
    if ( checkList.length > 0 ) {
        let form = document.getElementById('form_car');
        form.action = 'form_tab_cars.php';
        form.submit();
    }
}
function form_user () {
    let checkList = document.querySelectorAll('#form_user .checkbox:checked');
    if ( checkList.length > 0 ) {
        let form = document.getElementById('form_user');
        form.action = 'form_tab_users.php';
        form.submit();
    }
}