$(document).ready(function(){

        $('#form').validate(
        {
        rules:{
            username:"required",
            password:"required",
                },
        messages:
        {
            username:"Please Select an incident type",
            password:"select date",
        }
        submitHandler: function() {
        }
    }

        );
}
 });
