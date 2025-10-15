@if($flash_message)

    <script>
        $.notify({
            icon: 'fa fa-check',
            // title: 'Success!',
            message: '{{ $flash_message }}'
        }, {
            element: 'body',
            position: null,
            type: "success",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: true,
            placement: {
                from: "top",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 2000,
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            },
            icon_type: 'class',
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert bg-primary text-white" role="alert">' +
                '<button type="button" aria-hidden="true" class="btn-close text-white" data-notify="dismiss"></button>' +
                '<span data-notify="icon"></span> ' +
                '<span data-notify="title">{1}</span> ' +
                '<span data-notify="message">{2}</span>' +

                '<a href="{3}" target="{4}" data-notify="url"></a>' +
                '</div>'
        });

    </script>
@endif
