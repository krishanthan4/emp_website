<?php require_once "views/partials/header.php"; ?>

<style>
        .jumbtron {
    background: url('/public/images/Leonardo_Diffusion_XL_liquid_death_canned_water_designcoconut_0.jpg') no-repeat center center;
    background-size: cover;
    opacity: 0.9;
    padding: 100px 0;
    margin-bottom: 0;
    position: relative; /* Add this line to position the pseudo-element properly */

}

.jumbtron::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.2); /* Adjust the alpha value as needed */
    backdrop-filter: blur(3px);
    z-index: -1; /* Ensure the pseudo-element is behind the content */
}
</style>
<div class="tw-h-screen tw-flex tw-justify-center tw-bg-cover  tw-items-center tw-flex-col jumbtron tw-gap-10">
    <h1 class="tw-text-white  tw-text-8xl">Welcome to Tropical Elixar</h1>
    <p class="tw-text-3xl tw-text-slate-200">Discover the Refreshing Taste of Coconut Water</p>
    <p><a class="btn hover:tw-text-white tw-bg-blue-500 tw-text-white tw-mt-20 hover:tw-mt-20 hover:tw-p-5 hover:tw btn-lg" href="/contact" role="button">Contact Us</a></p>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 tw-mt-20">
            <h2 class="tw-text-4xl tw-pb-5">Our Story</h2>
            <p>
                At Tropical Elixar, our journey began with a passion for delivering the goodness of nature in every sip.
                Inspired by the lush coconut groves and tropical paradises, we set out to create a product that captures
                the essence of nature in a can.
            </p>
            <p>
                Our founders, driven by a shared love for health and wellness, embarked on a mission to provide a
                delicious and hydrating alternative to traditional beverages. After extensive research and sourcing the
                finest coconuts from around the world, we perfected the art of preserving the natural goodness of
                coconut water in a can.
            </p>
        </div>
        <div class="col-md-6 tw-my-20">
            <img src="/public/images/Leonardo_Vision_XL_coconut_canned_water_terrorwarning4k_0.jpg"
                class="img-responsive img-rounded" alt="Coconut Water Can">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 tw-my-20">
            <img src="public/images/Leonardo_Vision_XL_coconut_factory_3d_business_model4K8Kcolorf_0.jpg"
                class="img-responsive img-rounded" alt="Coconut Water Can">
        </div>
        <div class="col-md-6 tw-mt-20">
            <h2 class="tw-text-4xl tw-pb-5">Our Business Model</h2>
            <p>
                At Tropical Elixar, our business model transcends boundaries as we set our sights on the international
                market. We believe that the pure, untouched goodness found in Sri Lankan coconuts deserves a global
                stage. Our coconut water cans encapsulate the essence of tropical paradise, bringing a taste of Sri
                Lanka to discerning consumers worldwide. </p>
            <br>
            <p>
                Our commitment to quality and sustainability defines us. From the lush coconut groves of Sri Lanka to
                our state-of-the-art production processes, every step is a testament to our dedication to delivering a
                premium product. We go beyond just selling coconut water; we curate an experience that embodies purity,
                health, and a dash of tropical indulgence.

            </p>
        </div>
        <div class="tw-w-full tw-text-center">
            <button class="btn btn-toolbar  tw-py-5 tw-mt-10"><a href="/business-model">Learn More ...</a></button>
        </div>
    </div>
</div>

<style>
    .single-testimonial-box {
        padding: 0;
    }
</style>

<section id="reviews" class="reviews">

        <div class="testimonial-carousel">

            <a href="/business-model" class="single-testimonial-box focus:tw-outline-none  tw-flex tw-flex-col tw-justify-center tw-items-center">
                <div class="tw-w-full tw-h-full tw-z-20">
                    <p class="tw-font-bold tw-py-3 tw-text-3xl text-center">Business Model</p>
                </div>
                <img src="public/images/Leonardo_Diffusion_XL_coconut_water_cans_creativeprofessionalt_0.jpg"
                    class=" tw-h-full" alt="clients">

</a>
            <a href="/products" class="single-testimonial-box focus:tw-outline-none  tw-flex tw-flex-col tw-justify-center tw-items-center">
                <div class="tw-w-full tw-h-full tw-z-20">
                    <p class="tw-font-bold tw-py-3 tw-text-3xl text-center">Products</p>
                </div>
                <img src="public/images/Leonardo_Vision_XL_liquid_death_canned_water_terrorwarning4k_0 (1).jpg"
                    class="tw-rounded-md tw-background-cover tw-h-full" alt="clients">

</a>
            <a href="/our-approach" class="focus:tw-outline-none single-testimonial-box tw-flex tw-flex-col tw-justify-center tw-items-center">
                <div class="tw-w-full tw-h-full tw-z-20">
                    <p class="tw-font-bold tw-py-3 tw-text-3xl text-center">Our Approach</p>
                </div>
                <img src="public/images/Leonardo_Diffusion_XL_coconut_factory_bird_viewcreativeprofess_0.jpg"
                    class=" tw-h-full" alt="clients">

</a>
            <a href="/client-reviews" class="single-testimonial-box focus:tw-outline-none  tw-flex tw-flex-col tw-justify-center tw-items-center">
                <div class="tw-w-full tw-h-full tw-z-20">
                    <p class="tw-font-bold tw-py-3 tw-text-3xl text-center">Testimonial</p>
                </div>
                <img src="public/images/Leonardo_Diffusion_XL_5_hands_using_a_laptop_wallpapercreative_0.jpg"
                    class=" tw-h-full" alt="clients">

</a>
            <a href="/board-of-directors" class="single-testimonial-box focus:tw-outline-none  tw-flex tw-flex-col tw-justify-center tw-items-center">
                <div class="tw-w-full tw-h-full tw-z-20">
                    <p class="tw-font-bold tw-py-3 tw-text-3xl text-center">Board Of Directors</p>
                </div>
                <img src="public/images/Leonardo_Diffusion_XL_board_of_directors5_peoplepresentationsp_0 (1).jpg"
                    class=" tw-h-full" alt="clients">

</a>
        </div>

</section>

<?php

require_once "views/partials/footer.php";

?>