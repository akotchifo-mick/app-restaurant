<div class="alert alert-danger">
    <h2> got tickets</h2>
</div>

<!--@if ($tickets)
        <x-essai message='lordis'/>
        <script>
              window.onload = function () {
        OpenBootstrapPopup();
    };
    function OpenBootstrapPopup() {
        $("#gotTicketsModal").modal('show');
    }
        </script>
    @endif-->

@foreach ($tickets as $ticket)
@include('includes.ticket', $ticket)
@endforeach

<div id="onetrust-banner-sdk" class="otFlat bottom ot-wo-title vertical-align-content" tabindex="0" style="bottom: 0px;">
    <div role="alertdialog" aria-describedby="onetrust-policy-text" aria-label="Privacy">
        <div class="ot-sdk-container">
            <div class="ot-sdk-row">
                <div id="onetrust-group-container" class="ot-sdk-eight ot-sdk-columns">
                    <div class="banner_logo"></div>
                    <div id="onetrust-policy">
                        <p id="onetrust-policy-text">By clicking “Accept All Cookies”, you agree to the storing of cookies on your device to enhance site navigation, analyze site usage, and assist in our marketing efforts. </p>
                    </div>
                </div>
                <div id="onetrust-button-group-parent" class="ot-sdk-three ot-sdk-columns has-reject-all-button">
                    <div id="onetrust-button-group"><button id="onetrust-pc-btn-handler">Cookies Settings</button> <button id="onetrust-reject-all-handler">Reject All</button> <button id="onetrust-accept-btn-handler">Accept All Cookies</button></div>
                </div>
            </div>
        </div><!-- Close Button -->
        <div id="onetrust-close-btn-container"><button class="onetrust-close-btn-handler onetrust-close-btn-ui banner-close-button ot-close-icon" aria-label="Close"></button></div><!-- Close Button END-->
    </div>
</div>