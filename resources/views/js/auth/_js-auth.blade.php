<script>
    $(document).ready(function() {
        // form_login
        $(document).on('submit', '#form_login', function(e) {
            e.preventDefault();
            ReqCreateAjax('#form_login', handleSuccessLogin, handleError);
        });

        // handleSuccessLogin
        function handleSuccessLogin(response) {
            if (response.status == "success") {
                showMessage(response.message);
            } else {
                showErrorMessage(response.message);
            }
        }
    })
</script>
