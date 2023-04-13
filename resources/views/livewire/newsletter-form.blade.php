<div class="w-full xl:w-1/2 xl:pl-40 xl:py-28">
    <h1 class="text-2xl md:text-4xl xl:text-5xl font-bold leading-10 text-gray-800 dark:text-white mb-4 text-center xl:text-left md:mt-0 mt-4">Subscribe</h1>
    <p class="text-base leading-normal text-gray-600 dark:text-gray-200 text-center xl:text-left">Whether article spirits new her covered hastily sitting her. Money witty books nor son add.</p>
    <div class="flex items-stretch mt-12">
        <input wire:model="email" class="bg-gray-100 rounded-lg rounded-r-none dark:bg-gray-800 text-base leading-none text-gray-800 dark:text-white p-5 w-4/5 border border-transparent focus:outline-none focus:border-gray-500" type="email" placeholder="Your Email">
        <button wire:click="createNewsletterSubscriber" class="w-32 rounded-l-none hover:bg-indigo-600 bg-indigo-700 rounded text-base font-medium leading-none text-white p-5 uppercase focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700">subscribe</button>
    </div>
    @error('email')
        <div class="go re yl">{{ $message }}</div>
    @enderror
</div>