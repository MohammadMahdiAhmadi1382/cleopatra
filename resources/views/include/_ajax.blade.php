<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function ReqAjax(url, method, data, successCallback, errorCallback) {
        $.ajax({
            url: url,
            method: method,
            data: data,
            beforeSend: function() {
                $('#loading_ajax').fadeIn(500);
            },
            success: successCallback,
            error: errorCallback,
            complete: function() {
                $('#loading_ajax').fadeOut(500);
            },
        });
    }


    // Ajax request function
    function ReqAjaxPayment(url, method, data, successCallback, errorCallback) {
        $.ajax({
            url: url,
            method: method,
            data: data,
            beforeSend: function() {
                $('#loading_ajax').fadeIn(500);
            },
            success: successCallback,
            error: errorCallback,
            complete: function() {
                $('#loading_ajax').fadeOut(500);
            },
        });
    }


    function ReqCreateAjax(formId, successCallback, errorCallback) {
        let formData = $(formId).serialize();
        let url = $(formId).attr('action');
        let method = $(formId).attr('method');
        let submitButton = $(formId + ' button[type="submit"]');
        let originalText = submitButton.text();

        $.ajax({
            url: url,
            type: method,
            dataType: 'json',
            data: formData,
            beforeSend: function() {
                $(formId + ' button').prop('disabled', true);
            },
            success: successCallback,
            error: errorCallback,
            complete: function() {
                $(formId + ' button').prop('disabled', false);
            },
        });
    }




    function ReqUpdateAjax(formId, successCallback, errorCallback) {
        let formData = $(formId).serialize();
        let url = $(formId).attr('action');
        let method = $(formId).attr('method');
        let submitButton = $(formId + ' button[type="submit"]');
        let originalText = submitButton.text();

        $.ajax({
            url: url,
            type: "post",
            dataType: 'json',
            data: formData,
            beforeSend: function() {
                $('#loading_ajax').fadeIn(500);
                $(formId + ' button').prop('disabled', true);
            },
            success: successCallback,
            error: errorCallback,
            complete: function() {
                $('#loading_ajax').fadeOut(500);
                $(formId + ' button').prop('disabled', false);
            },
        });
    }

    function ReqUpdateFileAjax(formId, successCallback, errorCallback) {
        let formData = new FormData($(formId)[0]);
        let url = $(formId).attr('action');
        let method = $(formId).attr('method');
        let submitButton = $(formId + ' button[type="submit"]');
        let originalText = submitButton.text();

        $.ajax({
            url: url,
            type: "post",
            dataType: 'json',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $('#loading_ajax').fadeIn(500);
                $(formId + ' button').prop('disabled', true);
            },
            success: successCallback,
            error: errorCallback,
            complete: function() {
                $('#loading_ajax').fadeOut(500);
                $(formId + ' button').prop('disabled', false);
            },
        });
    }


    function ReqFileAjax(formId, url, method, data, successCallback, errorCallback) {
        let submitButton = $(formId + ' button');
        let originalText = submitButton.text();

        $.ajax({
            url: url,
            method: method,
            data: data,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $('#loading_ajax').fadeIn(500);
                $(formId + " button").prop('disabled', true).text('در حال پردازش');
            },
            success: successCallback,
            error: errorCallback,
            complete: function() {
                $('#loading_ajax').fadeOut(500);
                $(formId + " button").prop('disabled', false).text(originalText);
            },
        });
    }

    function ReqAjaxUpdate(url, method, data, successCallback, errorCallback) {
        $.ajax({
            url: url,
            data: data,
            method: method,
            processData: false,
            contentType: false,
            success: successCallback,
            error: errorCallback
        });
    }

    function ReqAjaxDelete(url, method, data, successCallback, errorCallback) {
        $.ajax({
            url: url,
            method: 'POST',
            data: {
                _method: 'DELETE',
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: successCallback,
            error: errorCallback
        });
    }


    function ReqCreateFileAjax(formId, successCallback, errorCallback) {
        let formData = new FormData($(formId)[0]); // Use FormData to properly handle file data
        let url = $(formId).attr('action');
        let method = $(formId).attr('method');
        let submitButton = $(formId + ' button[type="submit"]');
        let originalText = submitButton.text();

        $.ajax({
            url: url,
            type: method,
            dataType: 'json',
            data: formData, // Send the FormData object, which includes the file
            processData: false, // Important: don't let jQuery process the data
            contentType: false, // Important: don't set content type, the browser will do it automatically
            beforeSend: function() {
                $(formId + ' button').prop('disabled', true); // Disable the submit button before sending
            },
            success: successCallback, // Handle success response
            error: errorCallback, // Handle error response
            complete: function() {
                $(formId + ' button').prop('disabled',
                    false); // Re-enable the submit button after the request
            },
        });
    }




    function showMessage(value) {
        Toastify({
            text: value,
            duration: 4200,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "linear-gradient(to right, #f1f5f9, #f1f5f9)",
            stopOnFocus: true,
        }).showToast();
    }

    function showErrorMessage(value) {
        Toastify({
            text: value,
            duration: 3500,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "linear-gradient(to right, #ef4444, #b91c1c)",
            stopOnFocus: true,
        }).showToast();
    }

    // errorHanel
    function handleError(error) {
        $.each(error.responseJSON.errors, function(key, value) {
            Toastify({
                text: value,
                duration: 4200,
                close: true,
                gravity: "top",
                position: "center",
                backgroundColor: "linear-gradient(to right, #ef4444, #b91c1c)",
                stopOnFocus: true,
            }).showToast();
        });
    }
</script>
