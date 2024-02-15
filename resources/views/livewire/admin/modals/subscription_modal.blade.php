<!-- DEACTIVATE MODAL -->
<div wire:ignore.self class="modal fade" id="deactivateSubscriptionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5">Deactivate Subscription</h2>
                <button type="button" class="btn-close" wire:click ="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div wire:loading class="py-5">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="spinner-grow purple-text" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
            <div wire:loading.remove>
                <form wire:submit.prevent="deactivateSubscription()">
                    <div class="modal-body text-center">
                        <p>Are you sure you want to deactivate this subscriber?</p>
                        <strong class="mt-2">{{ $banEmail }}</strong>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click ="closeModal" class="btn kbtn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn kbtn-dark">Yes, Deactivate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL -->
