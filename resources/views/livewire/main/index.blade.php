<div class="col-lg-8 mx-auto">

    <form wire:submit.prevent="saveSubscription">
        <div class="input-group amt-input-grp mb-3">
            <input type="text" wire:model="email" class="form-control form-control-lg rounded-5 py-3" placeholder="Email address" required>
            <button type="submit" class="btn kbtn-dark rounded-pill px-4 py-3 my-1 custom-search-botton" >Notify Me!</button>
        </div>
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
    </form>
</div>

@section('scripts')
    <script>
        $(document).ready(function() {
            window.addEventListener('success-alert', event => {
                Swal.fire({
                    position: "top-end",
                    title: "Congratulations, Champ!",
                    icon: "success",
                    html: `
                        You have successfully joined our waiting list.
                    `,
                    showConfirmButton: false,
                    timer: 2000,
                    customClass: {
                        title: 'swal-title-custom' // Apply custom class to title
                    }
                });
            });

            function shareOnFacebook() {
                // Trigger Facebook share dialog
                FB.ui({
                    method: 'share',
                    href: 'https://www.korrency.com', // Replace with your actual URL
                }, function(response){});
            }

            function shareOnTwitter() {
                // URL to share (replace with your actual URL)
                var url = 'https://www.korrency.com';
                // Text to include in the tweet (optional)
                var text = 'Check out this awesome website: ';
                // Twitter Web Intent URL
                var twitterUrl = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent(url) + '&text=' + encodeURIComponent(text);

                // Open Twitter share dialog
                window.open(twitterUrl, '_blank', 'width=550,height=420');
            }

            function shareOnLinkedIn() {
                // URL to share (replace with your actual URL)
                var url = 'https://www.korrency.com';
                // LinkedIn Share API URL
                var linkedinUrl = 'https://www.linkedin.com/sharing/share-offsite/?url=' + encodeURIComponent(url);

                // Open LinkedIn share dialog
                window.open(linkedinUrl, '_blank', 'width=550,height=420');
            }

        });
    </script>
@endsection

