$(function(){
    var $form = $("#form1");
    if($form.length){
    $form.validate({
    rules:{
    PID: {
    required: true
    },
    time: {
    required: true
    }, 
    selection: {
    required: true
    }
    },
    messages: {
    PID: {
    required: 'ID is mandatory'
    },
    time: {
    required: 'An appointment time must be selected'
    },
    selectionl: {
    required: 'An reason must be selected for the appointment'
    }
    }
    })
    }
    })