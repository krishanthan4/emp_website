<?php
require_once "views/partials/header.php";
?>
<style>
     .jumbotron {
    background: url('./public/images/Leonardo_Vision_XL_coconut_canned_water_terrorwarning4k_0.jpg') no-repeat center center;
    background-size: cover;
    opacity: 0.9;
    color: #ffffff;
    padding: 100px 0;
    margin-bottom: 0;
    position: relative; /* Add this line to position the pseudo-element properly */

}

.jumbotron::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.2); /* Adjust the alpha value as needed */
    backdrop-filter: blur(7px);
    z-index: -1; /* Ensure the pseudo-element is behind the content */
}
      
</style>



<div class="jumbotron text-center ">
    <h1>Welcome to Tropical Elixar</h1>
    <p class="tw-text-white">Refreshing Coconut Water in a Can</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 tw-mt-20">
            <h2 class="tw-text-4xl tw-pb-5">Our Story</h2>
            <p>
                At Tropical Elixar, our journey began with a passion for delivering the goodness of nature in every sip. Inspired by the lush coconut groves and tropical paradises, we set out to create a product that captures the essence of nature in a can.
            </p>
            <p>
                Our founders, driven by a shared love for health and wellness, embarked on a mission to provide a delicious and hydrating alternative to traditional beverages. After extensive research and sourcing the finest coconuts from around the world, we perfected the art of preserving the natural goodness of coconut water in a can.
            </p>
        </div>
        <div class="col-md-6 tw-my-20">
            <img src="/public/images/Leonardo_Vision_XL_coconut_canned_water_terrorwarning4k_0.jpg" class="img-responsive img-rounded" alt="Coconut Water Can">
        </div>
    </div>

    <div class=" mt-5 tw-mb-10 ">
        <div class="col-md-12  tw-mb-10 text-center">
            <h2 class="tw-text-4xl  tw-tracking-[2px] ">Why Choose <span>TROPICAL ELIXAR</span> Coconut Water?</h2>
        </div>
    <div class="tw-flex col-md-12 tw-mb-5 tw-justify-center tw-items-center w-full">
    <div class="col-md-3 tw-border-2 tw-border tw-cursor-pointer tw-rounded-md tw-p-6 hover:tw-scale-105 tw-bg-slate-100 tw-m-3 ">
            <h4>Pure and Natural</h4>
            <p>We pride ourselves on delivering 100% pure coconut water with no additives or preservatives.</p>
        </div>
        <div class="col-md-3 tw-border-2 tw-border tw-cursor-pointer tw-rounded-md   tw-p-6 hover:tw-scale-105 tw-bg-slate-100 tw-m-3 ">
            <h4>Sustainable Packaging</h4>
            <p>Our cans are environmentally friendly, ensuring that you enjoy your coconut water guilt-free.</p>
        </div>
        <div class="col-md-3 tw-border-2 tw-border tw-cursor-pointer tw-rounded-md tw-p-6 hover:tw-scale-105 tw-bg-slate-100 tw-m-3 ">
            <h4>Deliciously Hydrating</h4>
            <p>Experience the refreshing taste that hydrates and nourishes your body naturally.</p>
        </div>
    </div>
    </div>
</div>
<div class="tw-text-center">
    <button class="btn btn-warning tw-py-5 tw-mt-8">
    <a href="/client-reviews" class="tw-text-white hover:tw-text-white">What our clients say</a>

    </button>

</div>

<?php
require_once "views/partials/footer.php";
?>
