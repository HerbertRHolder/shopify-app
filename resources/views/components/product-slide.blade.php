<section class="pt-14 pb-24 px-10 w-full">
    <div class="flex flex-wrap -m-4">
        <div class="w-full lg:w-1/3 p-4">

            <div id="indicators-carousel" class="relative w-full flex flex-col gap-3" data-carousel="static">
                {{-- images  --}}
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-QaEDCt_ruq9dq1ag0ggo8S3hsQeKfwadUQ&s"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxmZtt0gsNsq_usJZzGsjieTgasgzzuvYcjA&s"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwM-Lfa8znkqcoXpIhwDqz_UCGs-fnEvyX1Q&s"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                {{-- Inicators --}}
                <div class="md:flex justify-center items-center gap-3 hidden">

                    {{-- Slider Inicator 1 --}}
                    <div class="group" aria-label="Slide 1" aria-current="true" data-carousel-slide-to="0">
                        <div class="relative overflow-hidden rounded-lg mb-4 border-2 border-transparent group-hover:border-gray-800 transition duration-200"
                            style="width:125px;height:110px;">
                            <img class="absolute inset-0 rounded-lg w-full h-full object-cover transform group-hover:scale-105 transition duration-200"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-QaEDCt_ruq9dq1ag0ggo8S3hsQeKfwadUQ&s"
                                alt="">
                        </div>
                    </div>

                    {{-- Slider Inicator 2 --}}
                    <div class="group" aria-label="Slide 2" aria-current="false" data-carousel-slide-to="1">
                        <div class="relative overflow-hidden rounded-lg mb-4 border border-gray-800 transition duration-200"
                            style="width:125px;height:110px;">
                            <img class="absolute inset-0 rounded-lg w-full h-full object-cover transform group-hover:scale-105 transition duration-200"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxmZtt0gsNsq_usJZzGsjieTgasgzzuvYcjA&s"
                                alt="">
                        </div>
                    </div>

                    {{-- Slider Inicator 3 --}}
                    <div class="group" aria-label="Slide 3" aria-current="false" data-carousel-slide-to="2">
                        <div class="relative overflow-hidden rounded-lg mb-6 border-2 border-transparent group-hover:border-gray-800 transition duration-200"
                            style="width:125px;height:110px;">
                            <img class="absolute inset-0 rounded-lg w-full h-full object-cover transform group-hover:scale-105 transition duration-200"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwM-Lfa8znkqcoXpIhwDqz_UCGs-fnEvyX1Q&s"
                                alt="">
                        </div>
                    </div>
                </div>

                <div class="w-full flex justify-center items-center">
                    {{-- Slider arrow left --}}
                    <button type="button" data-carousel-prev
                        class="bg-white mb-4 mx-auto border border-gray-200 rounded-full hover:bg-gray-50 focus:ring-4 focus:ring-gray-200 text-black text-sm font-semibold w-14 h-14 flex items-center justify-center transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34" viewbox="0 0 35 34"
                            fill="none">
                            <path
                                d="M17.467 16.0937L22.3489 20.6461C22.6072 20.8856 22.9498 21.0131 23.3018 21.0008C23.6538 20.9885 23.9867 20.8374 24.2277 20.5805C24.3483 20.4523 24.4423 20.3015 24.5042 20.1367C24.5662 19.972 24.595 19.7966 24.5888 19.6207C24.5827 19.4448 24.5418 19.2718 24.4685 19.1118C24.3951 18.9518 24.2909 18.8079 24.1616 18.6884L18.3144 13.2358C18.1862 13.1152 18.0354 13.0212 17.8706 12.9592C17.7059 12.8973 17.5305 12.8685 17.3546 12.8746C17.1787 12.8808 17.0057 12.9217 16.8457 12.995C16.6857 13.0683 16.5418 13.1726 16.4223 13.3018L10.903 19.1514C10.7839 19.2802 10.6913 19.4313 10.6307 19.5959C10.5701 19.7606 10.5425 19.9356 10.5497 20.1109C10.5548 20.2863 10.5944 20.459 10.6664 20.6191C10.7384 20.7791 10.8413 20.9233 10.9691 21.0435C11.2275 21.283 11.57 21.4105 11.9221 21.3982C12.2741 21.3859 12.607 21.2348 12.848 20.9779L17.467 16.0937Z"
                                fill="black"></path>
                        </svg>
                    </button>
                    {{-- Slider arrow right --}}
                    <button type="button" data-carousel-next
                        class="bg-white mb-4 mx-auto border border-gray-200 rounded-full hover:bg-gray-50 focus:ring-4 focus:ring-gray-200 text-black text-sm font-semibold w-14 h-14 flex items-center justify-center transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewbox="0 0 33 32"
                            fill="none">
                            <path
                                d="M16.4998 16.9466L11.7798 12.2266C11.53 11.9783 11.192 11.8389 10.8398 11.8389C10.4875 11.8389 10.1496 11.9783 9.89977 12.2266C9.7748 12.3506 9.6756 12.498 9.60791 12.6605C9.54022 12.823 9.50537 12.9973 9.50537 13.1733C9.50537 13.3493 9.54022 13.5236 9.60791 13.6861C9.6756 13.8485 9.7748 13.996 9.89977 14.12L15.5531 19.7733C15.6771 19.8983 15.8245 19.9975 15.987 20.0652C16.1495 20.1328 16.3238 20.1677 16.4998 20.1677C16.6758 20.1677 16.8501 20.1328 17.0125 20.0652C17.175 19.9975 17.3225 19.8983 17.4464 19.7733L23.1664 14.12C23.29 13.9954 23.3878 13.8476 23.4541 13.6852C23.5205 13.5227 23.5541 13.3488 23.5531 13.1733C23.5541 12.9978 23.5205 12.8239 23.4541 12.6614C23.3878 12.499 23.29 12.3512 23.1664 12.2266C22.9166 11.9783 22.5787 11.8389 22.2264 11.8389C21.8742 11.8389 21.5363 11.9783 21.2864 12.2266L16.4998 16.9466Z"
                                fill="black"></path>
                        </svg>
                    </button>
                </div>

            </div>
        </div>
        <div class="w-full lg:w-1/3 p-4">
            <div class="rounded-2xl border border-gray-200 p-8 h-full">
                <h2 class="font-heading uppercase text-3xl mb-4 max-w-md">These soft maroon clothes are not only
                    stylish, but also incredibly comfortable to wear for all skin types</h2>
                <p class="text-gray-500 font-semibold mb-4 text-xl max-w-md">Upgrade Your Wardrobe with These Soft
                    Maroon Clothes that are Equally Stylish and Comfortable for People of All Skin Tones"</p>
                <div class="flex flex-wrap items-center gap-2 mb-8">
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                            fill="none">
                            <path
                                d="M10.8586 4.71245C11.2178 3.60688 12.7819 3.60688 13.1412 4.71245L14.4246 8.66261C14.5853 9.15703 15.046 9.49179 15.5659 9.49179H19.7193C20.8818 9.49179 21.3651 10.9793 20.4247 11.6626L17.0645 14.1039C16.6439 14.4095 16.4679 14.9512 16.6286 15.4456L17.912 19.3957C18.2713 20.5013 17.0059 21.4207 16.0654 20.7374L12.7052 18.296C12.2846 17.9905 11.7151 17.9905 11.2945 18.296L7.93434 20.7374C6.99388 21.4207 5.72851 20.5013 6.08773 19.3957L7.37121 15.4456C7.53186 14.9512 7.35587 14.4095 6.93529 14.1039L3.57508 11.6626C2.63463 10.9793 3.11796 9.49179 4.28043 9.49179H8.43387C8.95374 9.49179 9.41448 9.15703 9.57513 8.66261L10.8586 4.71245Z"
                                fill="#FFB11A"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                            fill="none">
                            <path
                                d="M10.8586 4.71245C11.2178 3.60688 12.7819 3.60688 13.1412 4.71245L14.4246 8.66261C14.5853 9.15703 15.046 9.49179 15.5659 9.49179H19.7193C20.8818 9.49179 21.3651 10.9793 20.4247 11.6626L17.0645 14.1039C16.6439 14.4095 16.4679 14.9512 16.6286 15.4456L17.912 19.3957C18.2713 20.5013 17.0059 21.4207 16.0654 20.7374L12.7052 18.296C12.2846 17.9905 11.7151 17.9905 11.2945 18.296L7.93434 20.7374C6.99388 21.4207 5.72851 20.5013 6.08773 19.3957L7.37121 15.4456C7.53186 14.9512 7.35587 14.4095 6.93529 14.1039L3.57508 11.6626C2.63463 10.9793 3.11796 9.49179 4.28043 9.49179H8.43387C8.95374 9.49179 9.41448 9.15703 9.57513 8.66261L10.8586 4.71245Z"
                                fill="#FFB11A"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                            fill="none">
                            <path
                                d="M10.8586 4.71245C11.2178 3.60688 12.7819 3.60688 13.1412 4.71245L14.4246 8.66261C14.5853 9.15703 15.046 9.49179 15.5659 9.49179H19.7193C20.8818 9.49179 21.3651 10.9793 20.4247 11.6626L17.0645 14.1039C16.6439 14.4095 16.4679 14.9512 16.6286 15.4456L17.912 19.3957C18.2713 20.5013 17.0059 21.4207 16.0654 20.7374L12.7052 18.296C12.2846 17.9905 11.7151 17.9905 11.2945 18.296L7.93434 20.7374C6.99388 21.4207 5.72851 20.5013 6.08773 19.3957L7.37121 15.4456C7.53186 14.9512 7.35587 14.4095 6.93529 14.1039L3.57508 11.6626C2.63463 10.9793 3.11796 9.49179 4.28043 9.49179H8.43387C8.95374 9.49179 9.41448 9.15703 9.57513 8.66261L10.8586 4.71245Z"
                                fill="#FFB11A"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                            fill="none">
                            <path
                                d="M10.8586 4.71245C11.2178 3.60688 12.7819 3.60688 13.1412 4.71245L14.4246 8.66261C14.5853 9.15703 15.046 9.49179 15.5659 9.49179H19.7193C20.8818 9.49179 21.3651 10.9793 20.4247 11.6626L17.0645 14.1039C16.6439 14.4095 16.4679 14.9512 16.6286 15.4456L17.912 19.3957C18.2713 20.5013 17.0059 21.4207 16.0654 20.7374L12.7052 18.296C12.2846 17.9905 11.7151 17.9905 11.2945 18.296L7.93434 20.7374C6.99388 21.4207 5.72851 20.5013 6.08773 19.3957L7.37121 15.4456C7.53186 14.9512 7.35587 14.4095 6.93529 14.1039L3.57508 11.6626C2.63463 10.9793 3.11796 9.49179 4.28043 9.49179H8.43387C8.95374 9.49179 9.41448 9.15703 9.57513 8.66261L10.8586 4.71245Z"
                                fill="#FFB11A"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                            fill="none">
                            <path
                                d="M10.8586 4.71245C11.2178 3.60688 12.7819 3.60688 13.1412 4.71245L14.4246 8.66261C14.5853 9.15703 15.046 9.49179 15.5659 9.49179H19.7193C20.8818 9.49179 21.3651 10.9793 20.4247 11.6626L17.0645 14.1039C16.6439 14.4095 16.4679 14.9512 16.6286 15.4456L17.912 19.3957C18.2713 20.5013 17.0059 21.4207 16.0654 20.7374L12.7052 18.296C12.2846 17.9905 11.7151 17.9905 11.2945 18.296L7.93434 20.7374C6.99388 21.4207 5.72851 20.5013 6.08773 19.3957L7.37121 15.4456C7.53186 14.9512 7.35587 14.4095 6.93529 14.1039L3.57508 11.6626C2.63463 10.9793 3.11796 9.49179 4.28043 9.49179H8.43387C8.95374 9.49179 9.41448 9.15703 9.57513 8.66261L10.8586 4.71245Z"
                                fill="#FFB11A"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-semibold">5.0 (7.932 reviews)</span>
                </div>
                <p class="font-semibold mb-4">Select Size</p>
                <div class="flex flex-wrap gap-6 items-center mb-6">
                    <div class="flex flex-wrap gap-4"><a href="#"
                            class="flex items-center justify-center w-10 h-10 p-2 rounded-lg border border-gray-100 hover:bg-gray-900 hover:text-white transition duration-200">XS</a><a
                            href="#"
                            class="flex items-center justify-center w-10 h-10 p-2 rounded-lg border border-gray-100 hover:bg-gray-900 hover:text-white transition duration-200">S</a><a
                            href="#"
                            class="flex items-center justify-center w-10 h-10 p-2 rounded-lg border border-gray-100 hover:bg-gray-900 hover:text-white transition duration-200">M</a><a
                            href="#"
                            class="flex items-center justify-center w-10 h-10 p-2 rounded-lg border border-gray-100 hover:bg-gray-900 hover:text-white transition duration-200">L</a><a
                            href="#"
                            class="flex items-center justify-center w-10 h-10 p-2 rounded-lg border border-gray-100 hover:bg-gray-900 hover:text-white transition duration-200">XL</a>
                    </div>
                    <a href="#" class="text-sm underline hover:text-gray-700 transition duration-200">Size
                        Guide</a>
                </div>
                <p class="font-semibold mb-4">Colors Available</p>
                <div class="flex flex-wrap gap-4 mb-10">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48"
                            fill="none">
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" fill="#EFF0F3">
                            </rect>
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="#D7D9DF">
                            </rect>
                            <circle cx="24" cy="24" r="12" fill="#85C851"></circle>
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48"
                            fill="none">
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" fill="#EFF0F3">
                            </rect>
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="#D7D9DF">
                            </rect>
                            <circle cx="24" cy="24" r="12" fill="#FFB11A"></circle>
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48"
                            fill="none">
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" fill="#EFF0F3">
                            </rect>
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="#D7D9DF">
                            </rect>
                            <circle cx="24" cy="24" r="12" fill="#35384C"></circle>
                        </svg>
                    </a>
                    <a href="#">
                        <div
                            class="rounded-full bg-red-700 border border-gray-100 w-12 h-12 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewbox="0 0 24 24" fill="none">
                                <path
                                    d="M18.7104 7.21001C18.6175 7.11628 18.5069 7.04189 18.385 6.99112C18.2632 6.94035 18.1324 6.91422 18.0004 6.91422C17.8684 6.91422 17.7377 6.94035 17.6159 6.99112C17.494 7.04189 17.3834 7.11628 17.2904 7.21001L9.84044 14.67L6.71044 11.53C6.61392 11.4368 6.49998 11.3635 6.37512 11.3143C6.25026 11.2651 6.11694 11.2409 5.98276 11.2432C5.84858 11.2456 5.71617 11.2743 5.59309 11.3278C5.47001 11.3813 5.35868 11.4585 5.26544 11.555C5.1722 11.6515 5.09889 11.7655 5.04968 11.8903C5.00048 12.0152 4.97635 12.1485 4.97867 12.2827C4.98099 12.4169 5.00972 12.5493 5.06321 12.6724C5.1167 12.7954 5.19392 12.9068 5.29044 13L9.13044 16.84C9.2234 16.9337 9.334 17.0081 9.45586 17.0589C9.57772 17.1097 9.70843 17.1358 9.84044 17.1358C9.97245 17.1358 10.1032 17.1097 10.225 17.0589C10.3469 17.0081 10.4575 16.9337 10.5504 16.84L18.7104 8.68001C18.8119 8.58637 18.893 8.47272 18.9484 8.34622C19.0038 8.21972 19.0324 8.08312 19.0324 7.94501C19.0324 7.80691 19.0038 7.67031 18.9484 7.54381C18.893 7.41731 18.8119 7.30366 18.7104 7.21001Z"
                                    fill="white"></path>
                            </svg>
                        </div>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48"
                            fill="none">
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" fill="#EFF0F3">
                            </rect>
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="#D7D9DF">
                            </rect>
                            <circle cx="24" cy="24" r="12" fill="#2E8DFF"></circle>
                        </svg>
                    </a>
                </div>
                <a href="#"
                    class="bg-gray-900 rounded-full hover:bg-gray-800 focus:ring-4 focus:ring-gray-200 text-white font-semibold h-14 w-full px-7 py-4 flex items-center justify-center gap-2 transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewbox="0 0 25 24"
                        fill="none">
                        <path
                            d="M21.6479 16H7.64795C7.38273 16 7.12838 15.8946 6.94084 15.7071C6.75331 15.5196 6.64795 15.2652 6.64795 15C6.64795 14.7348 6.75331 14.4804 6.94084 14.2929C7.12838 14.1054 7.38273 14 7.64795 14H18.0879C18.7566 14 19.4061 13.7767 19.9333 13.3654C20.4605 12.9542 20.8352 12.3786 20.9979 11.73L22.6479 5.24C22.6854 5.09241 22.6887 4.93821 22.6575 4.78917C22.6263 4.64013 22.5614 4.50018 22.4679 4.38C22.3707 4.25673 22.2458 4.1581 22.1033 4.09208C21.9609 4.02606 21.8049 3.99452 21.6479 4H7.40795C7.20164 3.41645 6.81988 2.911 6.31501 2.55294C5.81015 2.19488 5.20689 2.00174 4.58795 2H3.64795C3.38273 2 3.12838 2.10536 2.94084 2.29289C2.75331 2.48043 2.64795 2.73478 2.64795 3C2.64795 3.26522 2.75331 3.51957 2.94084 3.70711C3.12838 3.89464 3.38273 4 3.64795 4H4.58795C4.81638 3.99334 5.04021 4.06513 5.22215 4.20341C5.4041 4.34169 5.5332 4.53812 5.58795 4.76L5.64795 5.24L7.37795 12C6.5823 12.0358 5.83346 12.3862 5.29617 12.9741C4.75888 13.5621 4.47714 14.3394 4.51295 15.135C4.54875 15.9306 4.89916 16.6795 5.48709 17.2168C6.07501 17.7541 6.8523 18.0358 7.64795 18H7.82795C7.66348 18.4531 7.61064 18.9392 7.67388 19.4171C7.73712 19.895 7.9146 20.3506 8.19127 20.7454C8.46794 21.1401 8.83566 21.4624 9.2633 21.6849C9.69094 21.9074 10.1659 22.0235 10.6479 22.0235C11.13 22.0235 11.605 21.9074 12.0326 21.6849C12.4602 21.4624 12.828 21.1401 13.1046 20.7454C13.3813 20.3506 13.5588 19.895 13.622 19.4171C13.6853 18.9392 13.6324 18.4531 13.4679 18H15.8279C15.6635 18.4531 15.6106 18.9392 15.6739 19.4171C15.7371 19.895 15.9146 20.3506 16.1913 20.7454C16.4679 21.1401 16.8357 21.4624 17.2633 21.6849C17.6909 21.9074 18.1659 22.0235 18.6479 22.0235C19.13 22.0235 19.605 21.9074 20.0326 21.6849C20.4602 21.4624 20.828 21.1401 21.1046 20.7454C21.3813 20.3506 21.5588 19.895 21.622 19.4171C21.6853 18.9392 21.6324 18.4531 21.4679 18H21.6479C21.9132 18 22.1675 17.8946 22.3551 17.7071C22.5426 17.5196 22.6479 17.2652 22.6479 17C22.6479 16.7348 22.5426 16.4804 22.3551 16.2929C22.1675 16.1054 21.9132 16 21.6479 16ZM20.3679 6L19.0579 11.24C19.0032 11.4619 18.8741 11.6583 18.6922 11.7966C18.5102 11.9349 18.2864 12.0067 18.0579 12H9.42795L7.92795 6H20.3679ZM10.6479 20C10.4502 20 10.2568 19.9414 10.0924 19.8315C9.92793 19.7216 9.79976 19.5654 9.72407 19.3827C9.64838 19.2 9.62858 18.9989 9.66716 18.8049C9.70575 18.6109 9.80099 18.4327 9.94084 18.2929C10.0807 18.153 10.2589 18.0578 10.4529 18.0192C10.6468 17.9806 10.8479 18.0004 11.0306 18.0761C11.2134 18.1518 11.3695 18.28 11.4794 18.4444C11.5893 18.6089 11.6479 18.8022 11.6479 19C11.6479 19.2652 11.5426 19.5196 11.3551 19.7071C11.1675 19.8946 10.9132 20 10.6479 20ZM18.6479 20C18.4502 20 18.2568 19.9414 18.0924 19.8315C17.9279 19.7216 17.7998 19.5654 17.7241 19.3827C17.6484 19.2 17.6286 18.9989 17.6672 18.8049C17.7057 18.6109 17.801 18.4327 17.9408 18.2929C18.0807 18.153 18.2589 18.0578 18.4529 18.0192C18.6468 17.9806 18.8479 18.0004 19.0306 18.0761C19.2134 18.1518 19.3695 18.28 19.4794 18.4444C19.5893 18.6089 19.6479 18.8022 19.6479 19C19.6479 19.2652 19.5426 19.5196 19.3551 19.7071C19.1675 19.8946 18.9132 20 18.6479 20Z"
                            fill="#F0FDF4"></path>
                    </svg>
                    <span>Add To Cart</span>
                </a>
            </div>
        </div>
        <div class="w-full lg:w-1/3 p-4">
            <div class="rounded-2xl border border-gray-200 p-6 mb-4">
                <div class="flex items-center justify-between flex-wrap gap-2">
                    <div>
                        <h2 class="font-heading uppercase text-4xl mb-1">35% OFF</h2>
                        <p class="text-gray-500 text-xs font-semibold">
                            <span>if order over</span>
                            <span class="text-sm">$282</span>
                        </p>
                    </div>
                    <span class="inline-block px-4 py-3 bg-red-50 rounded-md text-red-700 text-sm font-semibold">Until
                        Jun, 2023</span>
                </div>
            </div>
            <div class="rounded-2xl border border-gray-200 p-6">
                <div class="pb-4 border-b border-gray-200 mb-4">
                    <p class="text-2xl font-semibold">Set Order</p>
                </div>
                <div class="flex items-center flex-wrap gap-3 mb-6">
                    <img class="rounded-md h-16 object-cover"
                        src="shopky-assets/details-product/product-details13.png" alt="">
                    <div>
                        <p class="text-gray-500 text-sm mb-1">Selected Size</p>
                        <p class="text-lg font-semibold">L (Large)</p>
                    </div>
                </div>
                <div class="flex justify-between items-center flex-wrap gap-4 mb-6">
                    <div class="flex items-center flex-wrap gap-4">
                        <a href="#"
                            class="bg-white border border-gray-200 rounded-full hover:bg-gray-50 focus:ring-4 focus:ring-gray-200 w-8 h-8 flex items-center justify-center transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewbox="0 0 20 20" fill="none">
                                <path
                                    d="M15.8333 9.16667H4.16659C3.94557 9.16667 3.73361 9.25446 3.57733 9.41074C3.42105 9.56702 3.33325 9.77899 3.33325 10C3.33325 10.221 3.42105 10.433 3.57733 10.5893C3.73361 10.7455 3.94557 10.8333 4.16659 10.8333H15.8333C16.0543 10.8333 16.2662 10.7455 16.4225 10.5893C16.5788 10.433 16.6666 10.221 16.6666 10C16.6666 9.77899 16.5788 9.56702 16.4225 9.41074C16.2662 9.25446 16.0543 9.16667 15.8333 9.16667Z"
                                    fill="#1E2238"></path>
                            </svg>
                        </a>
                        <span class="text-lg font-semibold">04</span>
                        <a href="#"
                            class="bg-white border border-gray-200 rounded-full hover:bg-gray-50 focus:ring-4 focus:ring-gray-200 w-8 h-8 flex items-center justify-center transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewbox="0 0 20 20" fill="none">
                                <path
                                    d="M15.8334 9.16667H10.8334V4.16667C10.8334 3.94565 10.7456 3.73369 10.5893 3.57741C10.433 3.42113 10.2211 3.33333 10 3.33333C9.77903 3.33333 9.56707 3.42113 9.41079 3.57741C9.2545 3.73369 9.16671 3.94565 9.16671 4.16667V9.16667H4.16671C3.94569 9.16667 3.73373 9.25446 3.57745 9.41074C3.42117 9.56702 3.33337 9.77899 3.33337 10C3.33337 10.221 3.42117 10.433 3.57745 10.5893C3.73373 10.7455 3.94569 10.8333 4.16671 10.8333H9.16671V15.8333C9.16671 16.0543 9.2545 16.2663 9.41079 16.4226C9.56707 16.5789 9.77903 16.6667 10 16.6667C10.2211 16.6667 10.433 16.5789 10.5893 16.4226C10.7456 16.2663 10.8334 16.0543 10.8334 15.8333V10.8333H15.8334C16.0544 10.8333 16.2663 10.7455 16.4226 10.5893C16.5789 10.433 16.6667 10.221 16.6667 10C16.6667 9.77899 16.5789 9.56702 16.4226 9.41074C16.2663 9.25446 16.0544 9.16667 15.8334 9.16667Z"
                                    fill="#1E2238"></path>
                            </svg>
                        </a>
                    </div>
                    <p class="text-gray-500 text-sm font-semibold">Stock (238)</p>
                </div>
                <div class="flex justify-between items-center flex-wrap gap-4 mb-10">
                    <p class="text-gray-500 font-semibold">Total Price :</p>
                    <p class="text-2xl font-semibold">$38.203</p>
                </div>
                <a href="#"
                    class="bg-gray-900 rounded-md mb-4 hover:bg-gray-800 focus:ring-4 focus:ring-gray-200 h-12 py-3 px-4 w-full flex items-center justify-center transition duration-200 text-white text-sm font-semibold">Buy
                    Now</a>
                <a href="#"
                    class="bg-white border mb-16 border-gray-200 rounded-md hover:bg-gray-50 focus:ring-4 focus:ring-gray-200 h-12 py-3 px-4 w-full flex items-center justify-center gap-2 transition duration-200 text-sm font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                        fill="none">
                        <path
                            d="M19 7H16V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V7H5C4.73478 7 4.48043 7.10536 4.29289 7.29289C4.10536 7.48043 4 7.73478 4 8V19C4 19.7956 4.31607 20.5587 4.87868 21.1213C5.44129 21.6839 6.20435 22 7 22H17C17.7956 22 18.5587 21.6839 19.1213 21.1213C19.6839 20.5587 20 19.7956 20 19V8C20 7.73478 19.8946 7.48043 19.7071 7.29289C19.5196 7.10536 19.2652 7 19 7ZM10 6C10 5.46957 10.2107 4.96086 10.5858 4.58579C10.9609 4.21071 11.4696 4 12 4C12.5304 4 13.0391 4.21071 13.4142 4.58579C13.7893 4.96086 14 5.46957 14 6V7H10V6ZM18 19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H7C6.73478 20 6.48043 19.8946 6.29289 19.7071C6.10536 19.5196 6 19.2652 6 19V9H8V10C8 10.2652 8.10536 10.5196 8.29289 10.7071C8.48043 10.8946 8.73478 11 9 11C9.26522 11 9.51957 10.8946 9.70711 10.7071C9.89464 10.5196 10 10.2652 10 10V9H14V10C14 10.2652 14.1054 10.5196 14.2929 10.7071C14.4804 10.8946 14.7348 11 15 11C15.2652 11 15.5196 10.8946 15.7071 10.7071C15.8946 10.5196 16 10.2652 16 10V9H18V19Z"
                            fill="#1E2238"></path>
                    </svg>
                    <span>Add to Bag</span>
                </a>
                <div class="flex flex-wrap justify-between items-center gap-2">
                    <a href="#">
                        <div class="flex items-center flex-wrap gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewbox="0 0 24 24" fill="none">
                                <path
                                    d="M13 11H7C6.73478 11 6.48043 11.1054 6.29289 11.2929C6.10536 11.4804 6 11.7348 6 12C6 12.2652 6.10536 12.5196 6.29289 12.7071C6.48043 12.8946 6.73478 13 7 13H13C13.2652 13 13.5196 12.8946 13.7071 12.7071C13.8946 12.5196 14 12.2652 14 12C14 11.7348 13.8946 11.4804 13.7071 11.2929C13.5196 11.1054 13.2652 11 13 11ZM17 7H7C6.73478 7 6.48043 7.10536 6.29289 7.29289C6.10536 7.48043 6 7.73478 6 8C6 8.26522 6.10536 8.51957 6.29289 8.70711C6.48043 8.89464 6.73478 9 7 9H17C17.2652 9 17.5196 8.89464 17.7071 8.70711C17.8946 8.51957 18 8.26522 18 8C18 7.73478 17.8946 7.48043 17.7071 7.29289C17.5196 7.10536 17.2652 7 17 7ZM19 2H5C4.20435 2 3.44129 2.31607 2.87868 2.87868C2.31607 3.44129 2 4.20435 2 5V15C2 15.7956 2.31607 16.5587 2.87868 17.1213C3.44129 17.6839 4.20435 18 5 18H16.59L20.29 21.71C20.3834 21.8027 20.4943 21.876 20.6161 21.9258C20.7379 21.9755 20.8684 22.0008 21 22C21.1312 22.0034 21.2613 21.976 21.38 21.92C21.5626 21.845 21.7189 21.7176 21.8293 21.5539C21.9396 21.3901 21.999 21.1974 22 21V5C22 4.20435 21.6839 3.44129 21.1213 2.87868C20.5587 2.31607 19.7956 2 19 2ZM20 18.59L17.71 16.29C17.6166 16.1973 17.5057 16.124 17.3839 16.0742C17.2621 16.0245 17.1316 15.9992 17 16H5C4.73478 16 4.48043 15.8946 4.29289 15.7071C4.10536 15.5196 4 15.2652 4 15V5C4 4.73478 4.10536 4.48043 4.29289 4.29289C4.48043 4.10536 4.73478 4 5 4H19C19.2652 4 19.5196 4.10536 19.7071 4.29289C19.8946 4.48043 20 4.73478 20 5V18.59Z"
                                    fill="#1E2238"></path>
                            </svg>
                            <span class="font-semibold">Chat Seller</span>
                        </div>
                    </a>
                    <a href="#">
                        <div class="flex items-center flex-wrap gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewbox="0 0 24 24" fill="none">
                                <path
                                    d="M18 14C17.4092 14.0039 16.8266 14.1387 16.294 14.3946C15.7615 14.6504 15.2922 15.0211 14.92 15.48L9.82003 13.13C10.0598 12.3957 10.0598 11.6043 9.82003 10.87L14.92 8.52C15.5216 9.24597 16.3604 9.73608 17.2882 9.90384C18.216 10.0716 19.1732 9.90623 19.991 9.4369C20.8087 8.96758 21.4344 8.22448 21.7576 7.33874C22.0808 6.45301 22.0807 5.48158 21.7573 4.59591C21.434 3.71023 20.8082 2.96724 19.9903 2.49807C19.1725 2.02889 18.2152 1.86369 17.2875 2.03162C16.3597 2.19955 15.521 2.68982 14.9196 3.41589C14.3181 4.14197 13.9924 5.05718 14 6C14.003 6.23823 14.0265 6.47577 14.07 6.71L8.79003 9.14C8.22711 8.58958 7.51427 8.21752 6.74083 8.07043C5.96739 7.92334 5.16775 8.00777 4.44208 8.31313C3.71641 8.6185 3.09699 9.13122 2.66143 9.78706C2.22587 10.4429 1.99353 11.2127 1.99353 12C1.99353 12.7873 2.22587 13.5571 2.66143 14.2129C3.09699 14.8688 3.71641 15.3815 4.44208 15.6869C5.16775 15.9922 5.96739 16.0767 6.74083 15.9296C7.51427 15.7825 8.22711 15.4104 8.79003 14.86L14.07 17.29C14.0265 17.5242 14.003 17.7618 14 18C14 18.7911 14.2346 19.5645 14.6742 20.2223C15.1137 20.8801 15.7384 21.3928 16.4693 21.6955C17.2002 21.9983 18.0045 22.0775 18.7804 21.9231C19.5563 21.7688 20.269 21.3878 20.8285 20.8284C21.3879 20.269 21.7688 19.5563 21.9232 18.7804C22.0775 18.0044 21.9983 17.2002 21.6955 16.4693C21.3928 15.7384 20.8801 15.1136 20.2223 14.6741C19.5645 14.2346 18.7912 14 18 14ZM18 4C18.3956 4 18.7823 4.1173 19.1112 4.33706C19.4401 4.55682 19.6964 4.86918 19.8478 5.23463C19.9992 5.60009 20.0388 6.00222 19.9616 6.39018C19.8844 6.77814 19.6939 7.13451 19.4142 7.41421C19.1345 7.69392 18.7782 7.8844 18.3902 7.96157C18.0022 8.03874 17.6001 7.99913 17.2347 7.84776C16.8692 7.69638 16.5569 7.44004 16.3371 7.11114C16.1173 6.78224 16 6.39556 16 6C16 5.46957 16.2107 4.96086 16.5858 4.58579C16.9609 4.21071 17.4696 4 18 4ZM6.00003 14C5.60447 14 5.21779 13.8827 4.88889 13.6629C4.55999 13.4432 4.30364 13.1308 4.15227 12.7654C4.00089 12.3999 3.96129 11.9978 4.03846 11.6098C4.11563 11.2219 4.30611 10.8655 4.58581 10.5858C4.86552 10.3061 5.22189 10.1156 5.60985 10.0384C5.99781 9.96126 6.39994 10.0009 6.7654 10.1522C7.13085 10.3036 7.4432 10.56 7.66297 10.8889C7.88273 11.2178 8.00003 11.6044 8.00003 12C8.00003 12.5304 7.78931 13.0391 7.41424 13.4142C7.03917 13.7893 6.53046 14 6.00003 14ZM18 20C17.6045 20 17.2178 19.8827 16.8889 19.6629C16.56 19.4432 16.3036 19.1308 16.1523 18.7654C16.0009 18.3999 15.9613 17.9978 16.0385 17.6098C16.1156 17.2219 16.3061 16.8655 16.5858 16.5858C16.8655 16.3061 17.2219 16.1156 17.6098 16.0384C17.9978 15.9613 18.3999 16.0009 18.7654 16.1522C19.1308 16.3036 19.4432 16.56 19.663 16.8889C19.8827 17.2178 20 17.6044 20 18C20 18.5304 19.7893 19.0391 19.4142 19.4142C19.0392 19.7893 18.5305 20 18 20Z"
                                    fill="#1E2238"></path>
                            </svg>
                            <span class="font-semibold">Share Product</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
