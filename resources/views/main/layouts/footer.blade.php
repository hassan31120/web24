<!--footer-->
<h1 class="text-center" id="contactUs"></h1>
<div class="container-fluid" id="footer">
    <footer class="fw-bold">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-4 mb-30 text-center">
                        <div class="single-cta">
                            <div class="cta-text">
                                <h1 class="fw-bold text-center text-dark" data-aos="fade-up" ata-aos-offset="250"
                                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">اطلب
                                    الان فقط ب<strong class=" text-dark fw-bolder"> {{ $setting->price }} </strong> ريال
                                </h1>

                                <div class=" col-md-12 text-center mt-3">
                                    <a href="{{ $setting->link }}" data-aos="fade-up" ata-aos-offset="300"
                                        data-aos-delay="50" class="btn btn-success  btn-lg fw-bold" role="button">
                                        <h2 class="fw-bold">واتساب</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-6 ">
                            <div class="copyright-text ">
                                <p class=" text-dark text-center">حقوق الطبع والنشرCopyright &copy; لعام2022 محفوظة
                                    لشركة
                                    <strong style="color:rgb(31, 92, 92)">SIGMA</strong>
                                    أو الشركات
                                    التابعة لها
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="{{ asset('main/js/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('main/js/jquery/jquery.js') }}"></script>
<script src="{{ asset('main/js/index.js') }}"></script>
<script src="{{ asset('main/js/bootstrap-5.2.1-dist/js/bootstrap.bundle.js') }}"></script>
<script>
    const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

    accordionItemHeaders.forEach(accordionItemHeader => {
        accordionItemHeader.addEventListener("click", event => {

            accordionItemHeader.classList.toggle("active");
            const accordionItemBody = accordionItemHeader.nextElementSibling;
            if (accordionItemHeader.classList.contains("active")) {
                accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
            } else {
                accordionItemBody.style.maxHeight = 0;
            }

        });
    });
</script>
</body>

</html>
