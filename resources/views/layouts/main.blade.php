<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.inc._head')

    @livewireStyles
</head>
<body>
      <main id="Home">
          <!-- Navbar -->
          @include('layouts.inc._navbar')

          <div class="container-fluid position-relative pb-5" id="hero">
            <img src="assets/images/pink_sphere.png" alt="" class="pink-sphere" />

            <img src="assets/images/purple_sphere.png" alt="" class="purple-sphere" />

              <div class="container hero-body">
                <div class="pt-3">
                  <div class="col-lg-6 pt-2 my-auto mx-auto text-white text-center text-md-start">
                    <p class="intro text-center mt-md-3">Introducing Korrency!</p>
                    <div class="py-md-3 pt-3 text-center">
                      <h1 class="">Transfer Globally,<br/>Exchange Easily.</h1>


                      <div class="col-lg-10 mx-auto">
                        <p class="py-2 my-0 my-md-3 sub-heading text-center">
                          Send/Receive money internationally and securely exchange with your peers at your desired rate for your complete peace of mind
                        </p>
                      </div>


                      <div class="row my-4">
                        <div class="pb-2 waitlist float-right">
                          Join the waitlist and earn a chance to gain 90 days of free exchange
                        </div>

                        @yield('content')
                      </div>

                      <div class="list_countries position-relative text-center mb-3">
                        <small class="text-white">
                          Send money from Canada to Nigeria, Ghana, Kenya and <a href="#" class="" data-bs-toggle="modal" data-bs-target="#countriesModal"><strong>more countries</strong></a> <i class="fas fa-external-link-alt"></i>
                        </small>
                      </div>

                      <div class="row position-relative my-4 d-flex flex-row justify-content-center">
                          <div class="col-md-7 col-10 d-flex flex-row justify-content-center">
                            <div>
                              <img alt="ios" src="assets/images/coming_soon_ios.png" class="img-fluid rounded-2" />
                            </div>
                            <div>
                              <img alt="android" src="assets/images/coming_soon_android.png" class="img-fluid rounded-2" />
                            </div>
                          </div>
                          <div class="text-center">
                            <small class="text-white mt-3 mt-md-0">Regulated by <strong>FINTRAC</strong></small>
                          </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="row narrow mb-0 mx-auto">
                <div class="col-lg-4 mx-auto mt-lg-0 text-center">

                  <div class="position-relative mt-md-2">
                      <a href="https://api.whatsapp.com/send?text=Send/Receive money internationally and securely exchange money with your peers at your desired rate for your complete peace of mind: https://www.korrency.com/" target="_blank" rel="noopener noreferrer">
                        <img class="img-fluid" alt="WhatsApp" src="assets/images/fa-brands_whatsapp.png"></a>

                      <a href="#" id="facebookShare" class="ms-4 ms-md-5" onclick="shareOnFacebook()">
                        <img class="img-fluid" alt="Facebook" src="assets/images/fa-brands_facebook.png"></a>

                      <a href="#" onclick="shareOnTwitter();" id="twitterShare" class="ms-4 ms-md-5" rel="canonical">
                        <img class="img-fluid" alt="Twitter (X)" src="assets/images/fa-brands_twitter_x.png"></a>

                      <a href="#" onclick="shareOnLinkedIn();" id="linkedinShare" class="ms-4 ms-md-5">
                        <img class="img-fluid" alt="LinkedIn" src="assets/images/fa-brands_linkedin-in.png"></a>

                      <a href="#" id="shareButton" class="ms-4 ms-md-5" data-bs-toggle="modal" data-bs-target="#shareModal">
                        <img class="img-fluid" alt="Share" src="assets/images/share_this.png"></a>
                  </div>


                </div>
              </div>

              <!-- The Countries modal -->
              <div class="modal fade shadow" id="countriesModal" tabindex="-1" aria-labelledby="countriesModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered mx-sm-auto">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="d-flex justify-content-end">
                        <a href="#" class="" data-bs-dismiss="modal"><i class="fas fa-times"></i></a>
                      </div>

                      <div class="m-4">
                        <h6><strong>Send and receive money quickly and securely from the following countries:</strong></h6>
                        <div class="row my-3 pb-3 border-bottom">
                          <div class="col"><img class="img-fluid me-2" alt="Canada" src="assets/images/country/canada.png"> <strong>Canada</strong></div>
                        </div>
                        <div class="row">
                          <div class="col-6 mb-3"><img class="img-fluid me-md-2" alt="Benin" src="assets/images/country/benin.png"> <strong>Benin</strong></div>
                          <div class="col-6 mb-3"><img class="img-fluid me-md-2" alt="Burkina Faso" src="assets/images/country/burkinafaso.png"> <strong>Burkina Faso</strong></div>
                          <div class="col-6 mb-3"><img class="img-fluid me-md-2" alt="Cameroon" src="assets/images/country/cameroon.png"> <strong>Cameroon</strong></div>
                          <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Cote d'Ivoire" src="assets/images/country/ivorycoast.png"> <strong>Cote d'Ivoire</strong></div>
                          <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Ghana" src="assets/images/country/ghana.png"> <strong>Ghana</strong></div>
                          <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Guinea" src="assets/images/country/guinea.png"> <strong>Guinea</strong></div>
                          <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Kenya" src="assets/images/country/kenya.png"> <strong>Kenya</strong></div>
                          <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Mali" src="assets/images/country/mali.png"> <strong>Mali</strong></div>
                          <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Nigeria" src="assets/images/country/nigeria.png"> <strong>Nigeria</strong></div>
                          <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Rwanda" src="assets/images/country/rwanda.png"> <strong>Rwanda</strong></div>
                          <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Senegal" src="assets/images/country/senegal.png"> <strong>Senegal</strong></div>
                          <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Tanzania" src="assets/images/country/tanzania.png"> <strong>Tanzania</strong></div>
                          <div class="col-6 mb-3"><img class="img-fluid me-2" alt="Uganda" src="assets/images/country/uganda.png"> <strong>Uganda</strong></div>
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
                        <small class="text-center">Copy and Share this link:</small>
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
          </div>


          <!--Why Korrency-->
          <section class="py-5" id="frame1">
            <div class="container narrow pt-5">
                <!--Title-->
              <h2 class="kcolor text-center mb-5">Why use Korrency</h2>

              <div class="row py-3 row-cols-1 row-cols-lg-3 gx-3 gx-lg-3">
                <div class="col mb-3">
                  <div class="whycard p-3 text-center rounded-4 shadow-sm">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                      <img class="w-75 pt-3" alt="" src="{{ asset('assets/images/set_rates.png') }}">
                    </div>
                    <h5 class="kcolor">Set Your Rate</h5>
                    <p class="">Gain control over your currency exchanges with the freedom to set your own rates, ensuring you always get the best value.</p>
                  </div>
                </div>

                <div class="col mb-3">
                  <div class="whycard p-3 text-center rounded-4 shadow-sm">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                      <img class="w-75 pt-3" alt="" src="{{ asset('assets/images/fast_transfer.png') }}">
                    </div>
                    <h5 class="kcolor">Fast & Secure</h5>
                    <p class="">Experience swift international transfers with top-tier security, giving you peace of mind with every transaction...</p>
                  </div>
                </div>

                <div class="col mb-3">
                  <div class="whycard p-3 text-center rounded-4 shadow-sm">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                      <img class="w-75 pt-3" alt="" src="{{ asset('assets/images/user_focused.png') }}">
                    </div>
                    <h5 class="kcolor">Transparent & User Focused</h5>
                    <p class="">Enjoy a transparent service with no hidden fees and a platform that's designed around your needs and feedback.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- HOW IT WORKS -->
          <div class="container-fluid" id="HowItWorks">
            <div class="container narrow">
              <h4 class="kcolor text-md-start text-center fw-bold pt-5 pb-3">How does Korrency work?</h4>
                <div class="row g-5 mb-5 d-flex">
                  <!-- COL ONE -->
                  <div class="col-12 col-lg-5 mb-2">
                      <div class="row gx-2 w-100 border-1 py-1 rounded-5 mb-3 mx-auto rnd-btn-case w-100">
                        <div class="col-6 text-center">
                            <button type="button" class="btn btn-lg px-4 py-2 send" id="how-send-btn">Send Money</button>
                        </div>
                        <div class="col-6 text-center">
                            <button type="button" class="btn btn-lg px-4 py-2 p2p" id="how-p2p-btn">P2P</button>
                        </div>
                      </div>

                      <!-- LIST -->
                      <div id="sendList">
                        <div class="row mb-2 pb-1 how_card rounded-4 shadow-sm">
                          <div class="col-md-2 text-center d-flex align-items-center justify-content-center mb-3 mb-md-0 order-0 order-md-0">
                            <img class="img-fluid" src="{{ asset('assets/images/sign_up_verify.png') }}"width = "60px" alt="" >
                          </div>
                          <div class="col-md-10 text-center text-md-start order-1 order-md-1">
                            <h6 class="mb-0 pt-4">Sign Up and Verify</h6>
                            <p class="mt-2 text-wrap">Create your account and verify your identity in a few steps.</p>
                          </div>
                        </div>

                        <div class="row mb-2 pb-2 how_card rounded-4 shadow-sm">
                          <div class="col-md-2 text-center d-flex align-items-center justify-content-center mb-3 mb-md-0 order-0 order-md-0">
                            <img class="img-fluid" src="{{ asset('assets/images/transfer_details.png') }}"width = "60px" alt="" >
                          </div>
                          <div class="col-md-10 text-center text-md-start order-1 order-md-1">
                            <h6 class="mb-0 pt-4">Enter Transfer Details</h6>
                            <p class="mt-2 text-wrap">Select currencies, enter amount, and recipient's details</p>
                          </div>
                        </div>

                        <div class="row mb-2 pb-2 how_card rounded-4 shadow-sm">
                          <div class="col-md-2 text-center d-flex align-items-center justify-content-center mb-3 mb-md-0 order-0 order-md-0">
                            <img class="img-fluid" src="{{ asset('assets/images/best_rate.png') }}"width = "60px" alt="" >
                          </div>
                          <div class="col-md-10 text-center text-md-start order-1 order-md-1">
                            <h6 class="mb-0 pt-4">Get the Best Rate</h6>
                            <p class="mt-2 text-wrap">You will receive competitive, real-time exchange rates.</p>
                          </div>
                        </div>

                        <div class="row mb-2 pb-2 how_card rounded-4 shadow-sm">
                          <div class="col-md-2 text-center d-flex align-items-center justify-content-center mb-3 mb-md-0 order-0 order-md-0">
                            <img class="img-fluid" src="{{ asset('assets/images/send_money.png') }}"width = "60px" alt="" >
                          </div>
                          <div class="col-md-10 text-center text-md-start order-1 order-md-1">
                            <h6 class="mb-0 pt-4">Send Money</h6>
                            <p class="mt-2 text-wrap">Confirm and send. Fast, secure, and notified on completion.</p>
                          </div>
                        </div>
                      </div>

                      <div id="p2pList" class="d-none">
                        <div class="row mb-2 pb-2 how_card rounded-4 shadow-sm">
                          <div class="col-md-2 text-center d-flex align-items-center justify-content-center mb-3 mb-md-0 order-0 order-md-0">
                            <img class="img-fluid" src="{{ asset('assets/images/create_account.png') }}"width = "60px" alt="" >
                          </div>
                          <div class="col-md-10 text-center text-md-start order-1 order-md-1">
                            <h6 class="mb-0 pt-4">Create an Account</h6>
                            <p class="mt-2 text-wrap">Create your free Korrency account. Its quick and simple.</p>
                          </div>
                        </div>

                        <div class="row mb-2 pb-2 how_card rounded-4 shadow-sm">
                          <div class="col-md-2 text-center d-flex align-items-center justify-content-center mb-3 mb-md-0 order-0 order-md-0">
                            <img class="img-fluid" src="{{ asset('assets/images/verify_identity.png') }}"width = "60px" alt="" >
                          </div>
                          <div class="col-md-10 text-center text-md-start order-1 order-md-1">
                            <h6 class="mb-0 pt-4">Verify Your Identity</h6>
                            <p class="mt-2 text-wrap">Quick and secure identity verification to ensure your safety and compliance with regulation.</p>
                          </div>
                        </div>

                        <div class="row mb-2 pb-2 how_card rounded-4 shadow-sm">
                          <div class="col-md-2 text-center d-flex align-items-center justify-content-center mb-3 mb-md-0 order-0 order-md-0">
                            <img class="img-fluid" src="{{ asset('assets/images/create_offers.png') }}"width = "60px" alt="" >
                          </div>
                          <div class="col-md-10 text-center text-md-start order-1 order-md-1">
                            <h6 class="mb-0 pt-4">Create or Browse Offers</h6>
                            <p class="mt-2 text-wrap"><strong>Create an offer</strong> to exchange money at your desired rate or <strong>Browse and Accept</strong> offers on the Marketplace.</p>
                          </div>
                        </div>

                        <div class="row mb-2 pb-2 how_card rounded-4 shadow-sm">
                          <div class="col-md-2 text-center d-flex align-items-center justify-content-center mb-3 mb-md-0 order-0 order-md-0">
                            <img class="img-fluid" src="{{ asset('assets/images/exchange_save.png') }}"width = "60px" alt="" >
                          </div>
                          <div class="col-md-10 text-center text-md-start order-1 order-md-1">
                            <h6 class="mb-0 pt-4">Accept Offer and Save!</h6>
                            <p class="mt-2 text-wrap"><strong>Accept an offer</strong> Accepted Offers fulfil instantly.</p>
                          </div>
                        </div>
                      </div>
                  </div>

                  <!-- COL TWO -->
                  <div class="col-lg-7 d-none d-lg-block mb-2 d-flex justify-content-center align-items-middle">
                    <div class="text-center" id="send_mobile">
                      <img src="{{ asset('assets/images/mobile_send.png') }}"alt="Korrency Mobile App" width="420" height="100%" class=""/>
                    </div>
                    <div class="text-center d-none" id="p2p_mobile">
                      <img src="{{ asset('assets/images/mobile_p2p.png') }}"alt="Korrency Mobile App" width="420" height="100%" class=""/>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- END HOW IT WORKS -->

          <!-- WE KEEP YOUR MONEY SECURED -->
          <div class="container-fluid py-5 kbkg">
            <div class="container pt-5 narrow">
                <div class="row g-5 mb-5">
                  <!--Title-->
                  <h4 class="text-center mb-4"><span class="kbtn-light">We keep your money</span> <span style="color: #A4C7FA;">Secured</span></h4>

                    <div class="col-md-6 py-2 mb-2 d-flex flex-column flex-md-row">
                      <div class="col-md-2 text-center d-flex align-items-center justify-content-center mb-3 mb-md-0 order-0 order-md-0">
                        <img class="img-fluid" src="{{ asset('assets/images/trusted_partner.png') }}"width = "50px" alt="" >
                      </div>
                      <div class="ms-md-3 col-md-8 text-center text-md-start kbtn-light order-1 order-md-1">
                        <h5 class="mb-0">Trusted Banking Partners</h5>
                        <p class="mt-3 text-wrap">Your funds are held with reputable financial institutions, separate from our own operational funds, ensuring your money is always accessible and secure.</p>
                      </div>
                    </div>

                    <div class="col-md-6 py-2 mb-2 d-flex flex-column flex-md-row">
                      <div class="col-md-2 text-center d-flex align-items-center justify-content-center mb-3 mb-md-0 order-0 order-md-0">
                        <img class="img-fluid" src="{{ asset('assets/images/enhanced_security.png') }}"width = "50px" alt="" >
                      </div>
                      <div class="ms-md-3 col-md-8 text-center text-md-start kbtn-light order-1 order-md-1">
                        <h5 class="mb-0">Enhanced Security Measures</h5>
                        <p class="mt-3 text-wrap">We implement stringent security protocols, including two-factor authentication (2FA), to safeguard your account and every transaction.</p>
                      </div>
                    </div>


                    <div class="col-md-6 py-2 mb-2 d-flex flex-column flex-md-row">
                      <div class="col-md-2 text-center d-flex align-items-center justify-content-center mb-3 mb-md-0 order-0 order-md-0">
                        <img class="img-fluid" src="{{ asset('assets/images/regular_audits.png') }}"width = "50px" alt="" >
                      </div>
                      <div class="ms-md-3 col-md-8 text-center text-md-start kbtn-light order-1 order-md-1">
                        <h5 class="mb-0">Regular Audits</h5>
                        <p class="mt-3 text-wrap">Regular financial audits are conducted to confirm the security and stability of our platform, reinforcing that your money is managed with the utmost care.</p>
                      </div>
                    </div>

                    <div class="col-md-6 py-2 mb-2 d-flex flex-column flex-md-row">
                      <div class="col-md-2 text-center d-flex align-items-center justify-content-center mb-3 mb-md-0 order-0 order-md-0">
                        <img class="img-fluid" src="{{ asset('assets/images/fraud_prevention.png') }}"width = "50px" alt="" >
                      </div>
                      <div class="ms-md-3 col-md-8 text-center text-md-start kbtn-light order-1 order-md-1">
                        <h5 class="mb-0">Vigilant Fraud Prevention</h5>
                        <p class="mt-3 text-wrap">Our dedicated anti-fraud team is always on guard, utilizing advanced technology to prevent and protect against even the most sophisticated fraud attempts.</p>
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <!--END WE KEEP YOUR MONEY SECURED-->

          <!-- FAQS -->
          <div class="container py-5" id="FAQs">
            <div class="row p-3">
              <!--Title-->
              <h4 class="kcolor text-center mb-5">Frequently Asked Questions</h4>

              <div class="col-md-12 mb-5 faq" id="faq">

                <div class="faq-list">
                  <ul>
                    <li class="shadow-sm">
                      <div class="d-flex">
                        <div class="p-2 w-100">
                          <strong class="kcolor">What is Korrency?</strong>
                          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                              Korrency is an innovative financial technology platform (Not a bank) designed for user-driven peer-to-peer currency exchange and international money transfers. It empowers users, particularly African immigrants, to seamlessly conduct cross-border financial transactions. Korrency allows users to set their own exchange rates, ensuring they get the best possible deals, and offers a transparent, secure, fast and cost-effective way to send money internationally.
                            </p>
                          </div>
                        </div>
                        <div class="d-flex p-2 flex-shrink-1 align-content-center">
                          <a data-bs-toggle="collapse" class="collapse d-flex align-items-center" data-bs-target="#faq-list-1">
                            <img src="{{ asset('assets/images/faq_open.png') }}"alt="" class="icon-show">
                            <img src="{{ asset('assets/images/faq_close.png') }}"alt="" class="icon-close">
                          </a>
                        </div>
                      </div>
                    </li>

                    <li class="shadow-sm">
                      <div class="d-flex">
                        <div class="p-2 w-100">
                          <strong class="kcolor">How does Korrency work?</strong>
                          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                              Korrency allows users to send speedy and instant international money transfers at zero fees. Also, Korrency empowers users to define their own rates for peer-to-peer currency exchange. The platform incorporates robust security measures like encryption, multi-factor authentication, continuous monitoring and security audits.
                            </p>
                          </div>
                        </div>
                        <div class="d-flex p-2 flex-shrink-1 align-content-center">
                          <a data-bs-toggle="collapse" class="collapsed d-flex align-items-center" data-bs-target="#faq-list-2">
                            <img src="{{ asset('assets/images/faq_open.png') }}"alt="" class="icon-show">
                            <img src="{{ asset('assets/images/faq_close.png') }}"alt="" class="icon-close">
                          </a>
                        </div>
                      </div>
                    </li>

                    <li class="shadow-sm">
                      <div class="d-flex">
                        <div class="p-2 w-100">
                          <strong class="kcolor">When will Korrency be available?</strong>
                          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                              Korrency is gearing up for its launch. Stay tuned to our website and social media for the official launch date and updates.
                            </p>
                          </div>
                        </div>
                        <div class="d-flex p-2 flex-shrink-1 align-content-center">
                          <a data-bs-toggle="collapse" class="collapsed d-flex align-items-center" data-bs-target="#faq-list-3">
                            <img src="{{ asset('assets/images/faq_open.png') }}"alt="" class="icon-show">
                            <img src="{{ asset('assets/images/faq_close.png') }}"alt="" class="icon-close">
                          </a>
                        </div>
                      </div>
                    </li>

                    <li class="shadow-sm">
                      <div class="d-flex">
                        <div class="p-2 w-100">
                          <strong class="kcolor">What makes Korrency different?</strong>
                          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                              Korrency stands out with its unique approach to currency exchange and international money transfers. Users are empowered to set their own exchange rates, offering more control and potentially better savings than other services. Additionally, Korrency prioritizes transaction security, employing robust measures to safeguard your financial transactions. These features, combined with competitive exchange rates for instant money transfers and an intuitive and user-friendly platform, make Korrency a distinct choice for international money transfers.
                            </p>
                          </div>
                        </div>
                        <div class="d-flex p-2 flex-shrink-1 align-content-center">
                          <a data-bs-toggle="collapse" class="collapsed d-flex align-items-center" data-bs-target="#faq-list-4">
                            <img src="{{ asset('assets/images/faq_open.png') }}"alt="" class="icon-show">
                            <img src="{{ asset('assets/images/faq_close.png') }}"alt="" class="icon-close">
                          </a>
                        </div>
                      </div>
                    </li>

                    <li class="shadow-sm">
                      <div class="d-flex">
                        <div class="p-2 w-100">
                          <strong class="kcolor">Is Korrency secure?</strong>
                          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                              Yes, Korrency prioritizes user security with advanced encryption and multi-factor authentication, ensuring safe and confidential transactions.
                            </p>
                          </div>
                        </div>
                        <div class="d-flex p-2 flex-shrink-1 align-content-center">
                          <a data-bs-toggle="collapse" class="collapsed d-flex align-items-center" data-bs-target="#faq-list-5">
                            <img src="{{ asset('assets/images/faq_open.png') }}"alt="" class="icon-show">
                            <img src="{{ asset('assets/images/faq_close.png') }}"alt="" class="icon-close">
                          </a>
                        </div>
                      </div>
                    </li>

                    <li class="shadow-sm">
                      <div class="d-flex">
                        <div class="p-2 w-100">
                          <strong class="kcolor">Which countries and currencies will Korrency support?</strong>
                          <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                              Initially, Korrency will facilitate transactions from Canada to Nigeria, Ghana, Kenya, and some other African countries, with plans to expand to more countries and currencies.
                            </p>
                          </div>
                        </div>
                        <div class="d-flex p-2 flex-shrink-1 align-content-center">
                          <a data-bs-toggle="collapse" class="collapsed d-flex align-items-center" data-bs-target="#faq-list-6">
                            <img src="{{ asset('assets/images/faq_open.png') }}"alt="" class="icon-show">
                            <img src="{{ asset('assets/images/faq_close.png') }}"alt="" class="icon-close">
                          </a>
                        </div>
                      </div>
                    </li>

                    <li class="shadow-sm">
                      <div class="d-flex">
                        <div class="p-2 w-100">
                          <strong class="kcolor">Are there any fees?</strong>
                          <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                            <p>
                              Korrency offers zero fees for instant money transfers, ensuring cost-effective transactions. For peer-to-peer exchanges, a minimal fee of 0.5% per transaction is charged, translating to significant savings for users. This means for every $100 exchanged, users pay just 50 cents, offering exceptional value.
                            </p>
                          </div>
                        </div>
                        <div class="d-flex p-2 flex-shrink-1 align-content-center">
                          <a data-bs-toggle="collapse" class="collapsed d-flex align-items-center" data-bs-target="#faq-list-7">
                            <img src="{{ asset('assets/images/faq_open.png') }}"alt="" class="icon-show">
                            <img src="{{ asset('assets/images/faq_close.png') }}"alt="" class="icon-close">
                          </a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col d-flex justify-content-center align-items-center d-none">
                <a href="#" class="btn btn-lg kbtn-blue-border px-4 py-2 text-center">More FAQs</a>
              </div>
            </div>
          </div>
          <!--END FAQ-->

          <!-- Start Exchanging -->
          <div class="container narrow py-5">
            <div class="row py-5 kbkg rounded-4 d-flex justify-content-center text-center mx-2 kbtn-light">
              <div class="col-md-6">
                <h2 class="mb-5">Start exchanging and sending money internationally on Korrency</h2>

                <p class="mb-5">
                  Sign up now and get your free multi-currency wallets to start exchanging money at your own desired rate and sending money internationally right away at the best rates.
                </p>
              </div>

            </div>
          </div>
          <!-- End Start Exchanging -->

          <!--Footer-->
          @include('layouts.inc._footer')
      </main>

      <!-- Include jQuery -->
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


      <!-- Include Owl Carousel CSS and JS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

      <script src="{{ asset('assets/js/carousel.js') }}"></script>
      <script src="{{ asset('assets/js/spheres.js') }}"></script>
      <script src="{{ asset('assets/js/navbar.js') }}"></script>
      <script src="{{ asset('assets/js/hero_forms.js') }}"></script>
      <script src="{{ asset('assets/js/howitworks.js') }}"></script>
      <script src="{{ asset('assets/js/share.js') }}"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <!--Start of Tawk.to Script-->
      <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/65be8be20ff6374032c905fe/1hlo54rd3';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
      </script>
      <!--End of Tawk.to Script-->

      @livewireScripts
      @yield('scripts')
</body>
</html>
