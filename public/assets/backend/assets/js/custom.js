(function ($){

    $(document).ready(function ()
    {



        // insert modal show
        $(document).on('click','#modal_btn_show', function(e){
            alert('ff');
            e.preventDefault();


            $('#insert_modal').modal('show');
        } );

    });

}) (jQuery)
