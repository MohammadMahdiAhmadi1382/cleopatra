<script src="{{ asset('assets/plugin/ripple/ripple.min.js') }}"></script>

<script>
    $(window).on('load', function() {
        $('[data-modal-loading]').fadeOut('slow', function() {
            $(this).remove(); // remove loading after load on DOM
        });
    });

    $(document).ready(function() {

        // Initialize Lozad.js with default settings
        const observer = lozad(); // Create an instance of Lozad.js

        // Start observing elements for lazy loading
        observer.observe();

        // show modal
        $('[data-modal-show]').click(function() {
            const modalId = $(this).attr('data-modal-show');
            const modal = $(modalId);
            if (modal.hasClass('hidden')) {
                modal.removeClass('hidden').addClass('block');
            } else {
                modal.removeClass('block').addClass('hidden');
            }
        });

        $('[data-modal]').on('click', function(e) {
            const $modalSection = $(this).find('[data-modal-section]');
            if (!$modalSection.is(e.target) && $modalSection.has(e.target).length === 0) {
                $(this).removeClass('block').addClass('hidden');
            }
        });

        // close modal
        $('[data-modal-close]').click(function() {
            $(this).closest('[data-modal]').removeClass('block').addClass('hidden');
        });

        // close modal
        $('[data-modal-section]').click(function() {
            if (!$modalSection.is(e.target) && $modalSection.has(e.target).length === 0) {
                $(this).closest('[data-modal]').removeClass('block').addClass('hidden');
            }
        });



        // add effect btn-ripple
        $.ripple(".btn-ripple", {
            debug: false, // Turn Ripple.js logging on/off
            on: 'mousedown', // The event to trigger a ripple effect

            opacity: 0.4, // The opacity of the ripple
            color: "auto", // Set the background color. If set to "auto", it will use the text color
            multi: false, // Allow multiple ripples per element

            duration: 0.7, // The duration of the ripple

            // Filter function for modifying the speed of the ripple
            rate: function(pxPerSecond) {
                return pxPerSecond;
            },

            easing: 'linear' // The CSS3 easing function of the ripple
        });
    });



    // for effect ripple
    function ripple(event) {
        Ripple(event, {
            color: 'rgba(255, 255, 255, 0.4)',
            duration: 600
        });
    }


    // show modals
    function showModal(modalId) {
        if ($(modalId).hasClass('hidden')) {
            $(modalId).removeClass('hidden').addClass('block');
        } else {
            $(modalId).removeClass('block').addClass('hidden');
        }
    }

    // Close all modals
    function closeModalAll() {
        // Close all modals by selecting elements with data-modal attribute
        $('[data-modal]').removeClass('block').addClass('hidden');
    }
</script>
{{-- create function js logouts --}}
@auth
    <script>
        // Function to handle logout
        function logout() {
            $.ajax({
                url: '{{ route('auth.logout') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: handleSuccessLogout,
                error: handleError,
            });
        }

        function handleSuccessLogout(response) {
            if (response.status == "success") {
                window.location.href = "{{ route('page.explore') }}";
            } else {
                showErrorMessage(response.message);
            }

        }
    </script>
@endauth
