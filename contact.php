<?php
require_once("includes/header.php");
?>

<!-- page head section starts -->
<section class="page-head-section">
    <div class="container page-heading">
        <h2 class="h3 mb-3 text-white text-center">Contact</h2>
    </div>
</section>
<!-- page head section end -->

<!-- contact section starts -->
<section class="section-b-space">
    <div class="container">
        <div class="title animated-title">
            <div class="loader-line"></div>
            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                <div>
                    <h2>Inform us of Yourself</h2>
                    <h6>
                        Contact us if you have any queries or merely want to say hi.
                    </h6>
                </div>
            </div>
        </div>
        <div class="contact-detail">
            <div class="row g-4">
                <div class="col-xxl-4 col-md-6">
                    <div class="contact-detail-box">
                        <div class="contact-icon">
                            <i class="ri-phone-fill"></i>
                        </div>
                        <div>
                            <div class="contact-detail-title">
                                <h4>Phone</h4>
                            </div>
                            <div class="contact-detail-contain">
                                <p>01635-884944</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                    <div class="contact-detail-box">
                        <div class="contact-icon">
                            <i class="ri-mail-open-fill"></i>
                        </div>
                        <div>
                            <div class="contact-detail-title">
                                <h4>Email</h4>
                            </div>
                            <div class="contact-detail-contain">
                                <p>sabrina.islam.0023@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                    <div class="contact-detail-box">
                        <div class="contact-icon">
                            <i class="ri-map-pin-fill"></i>
                        </div>
                        <div>
                            <div class="contact-detail-title">
                                <h4>Location</h4>
                            </div>
                            <div class="contact-detail-contain">
                                <p>Dhaka, Bangladesh</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xxl-3 col-md-6">
                    <div class="contact-detail-box">
                        <div class="contact-icon">
                            <i class="ri-building-fill"></i>
                        </div>
                        <div>
                            <div class="contact-detail-title">
                                <h4>Institute</h4>
                            </div>
                            <div class="contact-detail-contain">
                                <p>Dhaka Mohila Polytechnic Institute</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="row g-4">
            <div class="col-xl-8">
                <div class="contact-form">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputFirstname" class="form-label mt-0">First Name</label>
                            <input type="text" class="form-control" id="inputFirstname"
                                placeholder="Enter your fist name">
                        </div>
                        <div class="col-md-6">
                            <label for="inputLastname" class="form-label mt-0">Last Name</label>
                            <input type="text" class="form-control" id="inputLastname"
                                placeholder="Enter your last name">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPhone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="inputPhone" placeholder="Enter your number">
                        </div>
                        <div class="col-md-12">
                            <label for="inputtext" class="form-label">How Can We Help You?</label>
                            <textarea class="form-control" id="inputtext" rows="3"
                                placeholder="Hi there, I would like to...."></textarea>
                        </div>
                    </form>
                    <div class="buttons d-flex align-items-center justify-content-end gap-3">
                        <a href="index.php" class="btn gray-btn mt-0">CANCEL</a>
                        <a href="index.php" class="btn theme-btn mt-0">SUBMIT</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d703.8410369650418!2d90.37624185770464!3d23.78031715912243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c74b86758839%3A0x506b8daebdec8358!2sDhaka%20Mohila%20Polytechnic%20Institute!5e0!3m2!1sen!2sbd!4v1731863589264!5m2!1sen!2sbd"
                    width="600" height="450" class="contact-map border-0 w-100 h-100" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- contact section end -->

<?php
require_once("includes/footer.php");
?>