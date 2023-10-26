<div
    class="flex flex-col justify-between pb-16 md:pb-20 lg:flex-row lg:pb-24"
  >
    <div
      class="mx-auto w-full border border-grey-darker px-6 py-10 text-center shadow lg:mx-0 lg:w-3/8 lg:py-8 lg:text-left xl:w-1/3 xl:px-8"
    >
      <h2
       class="pb-6 font-butler text-2xl text-secondary sm:text-3xl md:text-4xl dark:text-white text-black dark:border-b border-grey-dark border-black border-1"
      >
        Form Order
      </h2>
      <p class="mt-10 font-hk text-white text-base text-secondary dark:text-white text-black">
        We kindly request that you provide and or confirm the nature of your enquiry in relation to each and all furniture pieces of interest and we kindly request that you forward your full contact details below.
        <br /> <br /> All 'trade' enquiries are kindly requested to forward their full company details to also include their company website. Thank you for your kind assistance and we look forward to being of assistance to you.
        Thank you for using the Filthy Healthy enquiry form. Please be assured of the fact that any information you provide to Filthy Healthy is strictly for internal use only. Filthy Healthy is a private company and does not share any information provided with any third parties.
      <h4
        class="pt-8 font-hk text-lg text-white font-bold uppercase text-secondary sm:text-xl dark:text-white text-black"
      >
      LONDON OFFICE
      </h4>
      <p class="font-hk text-white text-secondary dark:text-white text-black">Filthy Healthy</p> 
      <p class="font-hk text-white text-secondary dark:text-white text-black">THE CLUBHOUSE</p> 
      <p class="font-hk text-white text-secondary dark:text-white text-black">8 ST JAMES'S SQUARE</p> 
      <p class="font-hk text-white text-secondary dark:text-white text-black">ST JAMES'S</p>
      <p class="font-hk text-white text-secondary dark:text-white text-black">LONDON SW1Y 4JU</p> 
      <p class="font-hk text-white text-secondary dark:text-white text-black">UNITED KINGDOM</p> 
      <p class="font-hk text-white text-secondary dark:text-white text-black">UNITED KINGDOM</p> 
       




      <h4
      class="pt-8 font-hk text-lg text-white font-bold uppercase text-secondary sm:text-xl dark:text-white text-black"
    >
    NEW YORK OFFICE
    </h4>
    <p class="font-hk text-white text-secondary dark:text-white text-black">Filthy Healthy</p> 
    <p class="font-hk text-white text-secondary dark:text-white text-black">CHRYSLER BUILDING</p> 
    <p class="font-hk text-white text-secondary dark:text-white text-black">405 LEXINGTON AVENUE</p> 
    <p class="font-hk text-white text-secondary dark:text-white text-black">25-26 FLOOR</p>
    <p class="font-hk text-white text-secondary dark:text-white text-black">NEW YORK NY 10174</p> 
    <p class="font-hk text-white text-secondary dark:text-white text-black">Tel +1 (212) 796 6902</p> 
     
    </div>

    <div class="mt-10 border border-grey-darker px-8 py-10 shadow md:mt-12 lg:mt-0 lg:w-3/5 lg:py-8">
    <form wire:submit.prevent="submitForm">
        {{-- <p class="pb-8 font-hk text-lg text-white text-secondary dark:text-white text-black">Form Order.</p> --}}
        <div class="mb-5 grid grid-cols-1 justify-between md:grid-cols-2 md:gap-10">
            <div class="mb-5 sm:mb-0">
                <label for="name" class="mb-2 block font-hk text-secondary">Name</label>
                <input type="text" wire:model="name" placeholder="Enter your name" class="form-input" id="name">
            </div>
            <div class="mb-5 sm:mb-0">
                <label for="company-name" class="mb-2 block font-hk text-secondary">Company Name</label>
                <input type="text" wire:model="companyName" placeholder="Enter your company name" class="form-input" id="company-name">
            </div>
            <div class="">
                <label for="email" class="mb-2 block font-hk text-secondary">Email address</label>
                <input type="text" wire:model="email" placeholder="Enter your email" class="form-input" id="email">
            </div>
        </div>
        <div class="mb-8 w-full">
            <label for="subject" class="mb-2 block font-hk text-secondary">Subject</label>
            <input type="text" wire:model="subject" placeholder="Enter your subject" class="form-input" id="subject">
        </div>
        <div class="mb-8 w-full">
            <label for="message" class="mb-2 block font-hk text-secondary">Message</label>
            <textarea rows="5" wire:model="message" placeholder="Enter your enquiry" class="form-textarea" id="message"></textarea>
        </div>
        <button type="submit" class="btn border border-white bg-black text-white hover:bg-gray-800 hover:border-gray-200" aria-label="Submit button">
            Send Enquiry
        </button>
    </form>
</div>