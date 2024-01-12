
<?php require_once "views/partials/header.php";?>

<section class="tw-bg-white container wbg-gray-900">
  <div class="tw-py-8 lg:tw-py-16 tw-px-4 tw-mx-auto tw-max-w-screen-md">
      <h2 class="tw-mb-4 tw-text-4xl tw-tracking-tight tw-font-extrabold tw-text-center tw-text-gray-900 w-text-white">Contact Us</h2>
      <p class="tw-mb-8 lg:tw-mb-16 tw-font-light tw-text-center tw-text-gray-500 w-text-gray-400 :tw-text-xl">Get in touch with Tropical Elixar! For inquiries, feedback, or business details. Reach out, and we'll respond promptly. Your connection matters!</p>
      <form action="https://formsubmit.co/bab2df030697c2f928e1e1b6e33ede00" method="POST" class="tw-space-y-8">
          <div>
          <div>
          <input type="hidden" name="_next" value="https://sprinsec.com/thanks">
              <label for="Name" class="tw-block tw-mb-2 tw-text  tw-font-medium tw-text-gray-900 tw-ext-gray-300">Name</label>
              <input type="text"  name="name" id="Name" class="tw-block tw-p-3 tw-w-full tw-text  tw-text-gray-900 tw-bg-gray-50 tw-rounded-lg tw-border tw-border-gray-300 tw-shadow  tw-focus:tw-ring-primary-500 tw-focus:tw-border-primary-500 tw-g-gray-700 tw-order-gray-600 tw-laceholder-gray-400 tw-ext-white tw-ocus:tw-ring-primary-500 tw-ocus:tw-border-primary-500 tw-hadow -light" placeholder="John Wick" required>
          </div>
              <label for="email" class="tw-block tw-mb-2 tw-text  tw-font-medium tw-text-gray-900 tw-ext-gray-300">Your email</label>
              <input type="email" name="email" id="email" class="tw-shadow  tw-bg-gray-50 tw-border tw-border-gray-300 tw-text-gray-900 tw-text  tw-rounded-lg tw-focus:tw-ring-primary-500 tw-focus:tw-border-primary-500 tw-block tw-w-full tw-p-2.5 tw-g-gray-700 tw-order-gray-600 tw-laceholder-gray-400 tw-ext-white tw-ocus:tw-ring-primary-500 tw-ocus:tw-border-primary-500 tw-hadow -light" placeholder="name@email.com" required>
          </div>
          <div>
              <label for="subject" class="tw-block tw-mb-2 tw-text  tw-font-medium tw-text-gray-900 tw-ext-gray-300">Subject</label>
              <input type="text" name="_subject" id="subject" class="tw-block tw-p-3 tw-w-full tw-text  tw-text-gray-900 tw-bg-gray-50 tw-rounded-lg tw-border tw-border-gray-300 tw-shadow  tw-focus:tw-ring-primary-500 tw-focus:tw-border-primary-500 tw-g-gray-700 tw-order-gray-600 tw-laceholder-gray-400 tw-ext-white tw-ocus:tw-ring-primary-500 tw-ocus:tw-border-primary-500 tw-hadow -light" placeholder="Let us know how we can help you" required>
          </div>
          <div class="tw :tw-col-span-2">
              <label for="message" class="tw-block tw-mb-2 tw-text  tw-font-medium tw-text-gray-900 tw-ext-gray-400">Your message</label>
              <textarea id="message" rows="6" class="tw-block tw-p-2.5 tw-w-full tw-text  tw-text-gray-900 tw-bg-gray-50 tw-rounded-lg tw-shadow  tw-border tw-border-gray-300 tw-focus:tw-ring-primary-500 tw-focus:tw-border-primary-500 tw-g-gray-700 tw-order-gray-600 tw-laceholder-gray-400 tw-ext-white tw-ocus:tw-ring-primary-500 tw-ocus:tw-border-primary-500 tw-hadow -light" placeholder="Leave a comment..."></textarea>
          </div>
          <button type="submit" class="tw-text-center tw-text-white tw-rounded-md tw-p-5 tw-bg-green-700">Send message</button>
      </form>
  </div>
</section>


		<?php require_once "views/partials/footer.php";?>