<!-- The Countries modal -->
<div class="modal fade shadow" id="countriesModal" tabindex="-1" aria-labelledby="countriesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mx-sm-auto">
        <div class="modal-content text-dark">
        <div class="modal-body">
            <div class="d-flex justify-content-end">
            <a href="#" class="" data-bs-dismiss="modal"><i class="fas fa-times"></i></a>
            </div>

            <div class="m-4">
            <h6><strong>Send and receive money quickly and securely from the following countries:</strong></h6>
            <div class="row my-3 pb-3 border-bottom">
                <div class="col"><img class="img-fluid me-2" alt="Canada" src="{{ asset('assets/images/country/canada.png') }}"> <strong>Canada</strong></div>
            </div>
            <div class="row">
                <div class="col-6 mb-3"><img class="img-fluid me-md-2" alt="Benin" src="{{ asset('assets/images/country/benin.png') }}"> <strong>Benin</strong></div>
                <div class="col-6 mb-3"><img class="img-fluid me-md-2" alt="Burkina Faso" src="{{ asset('assets/images/country/burkinafaso.png') }}"> <strong>Burkina Faso</strong></div>
                <div class="col-6 mb-3"><img class="img-fluid me-md-2" alt="Cameroon" src="{{ asset('assets/images/country/cameroon.png') }}"> <strong>Cameroon</strong></div>
                <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Cote d'Ivoire" src="{{ asset('assets/images/country/ivorycoast.png') }}"> <strong>Cote d'Ivoire</strong></div>
                <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Ghana" src="{{ asset('assets/images/country/ghana.png') }}"> <strong>Ghana</strong></div>
                <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Guinea" src="{{ asset('assets/images/country/guinea.png') }}"> <strong>Guinea</strong></div>
                <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Kenya" src="{{ asset('assets/images/country/kenya.png') }}"> <strong>Kenya</strong></div>
                <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Mali" src="{{ asset('assets/images/country/mali.png') }}"> <strong>Mali</strong></div>
                <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Nigeria" src="{{ asset('assets/images/country/nigeria.png') }}"> <strong>Nigeria</strong></div>
                <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Rwanda" src="{{ asset('assets/images/country/rwanda.png') }}"> <strong>Rwanda</strong></div>
                <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Senegal" src="{{ asset('assets/images/country/senegal.png') }}"> <strong>Senegal</strong></div>
                <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Tanzania" src="{{ asset('assets/images/country/tanzania.png') }}"> <strong>Tanzania</strong></div>
                <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Uganda" src="{{ asset('assets/images/country/uganda.png') }}"> <strong>Uganda</strong></div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- The share modal -->
<div class="modal fade shadow" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mx-sm-auto">
        <div class="modal-content">
        <div class="modal-body">
            <div class="d-flex justify-content-end">
            <a href="#" class="" data-bs-dismiss="modal"><i class="fas fa-times"></i></a>
            </div>

            <div class="text-center">
            <small class="text-center text-dark">Copy and Share this link:</small>
            <div class="d-flex justify-content-center">
                <div class="input-group mb-3 w-75">
                <input type="text" class="form-control" id="shareUrl" readonly>
                <button class="btn kbkg text-white" type="button" id="copyButton"><i class="far fa-copy"></i></button>
                </div>
            </div>
            <div id="copied" class="form-text text-success"></div>
            </div>
        </div>
        </div>
    </div>
</div>
